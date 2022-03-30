<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\T_realisasi_rkkl;
use App\Models\T_realisasi_tempatpelaksanaan;
use App\Models\T_realisasi_rkkl_dummy;
use App\Models\Ref_keuangan_uraian_kegiatan;
use App\Models\Ref_satuankerja;
// use Yajra\DataTables\DataTables;
use App\Models\T_coba;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DataTables;
use Illuminate\Support\Carbon;

class Realisasi_rkklController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datas = Ref_keuangan_uraian_kegiatan::select('id', 'nama_uraian_kegiatan', 'nama_sub_menu_uraian_kegiatan')
            ->where(
                'Ref_keuangan_uraian_kegiatan.id_unitbagian',
                '=',
                Auth::user()->unit_kerja
            )
            ->get();

        $tempats = Ref_satuankerja::all();

        if ($request->ajax()) {
            $data = T_realisasi_rkkl::with('T_realisasi_tempatpelaksanaans', 'Ref_satuankerjas', 'T_cobas', 'T_pembuat_laporans');

            return Datatables::eloquent($data)

                ->addIndexColumn()

                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editProductx">tambah tempat pelaksana</a>';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editProductz">pembuat laporan</a>';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editProducty">pdf</a>';


                    return $btn;
                })
                ->addColumn('nama_pelaksana', function (T_realisasi_rkkl $T_realisasi_rkkl) {
                    return $T_realisasi_rkkl->T_realisasi_tempatpelaksanaans->map(function ($x) {
                        return $x->nama_pelaksana;
                    })->implode('<br>');
                })
                ->addColumn('nip', function (T_realisasi_rkkl $T_realisasi_rkkl) {
                    return $T_realisasi_rkkl->T_realisasi_tempatpelaksanaans->map(function ($x) {
                        return $x->nip;
                    })->implode('<br>');
                })
                ->addColumn('gol', function (T_realisasi_rkkl $T_realisasi_rkkl) {
                    return $T_realisasi_rkkl->T_realisasi_tempatpelaksanaans->map(function ($x) {
                        return $x->golongan;
                    })->implode('<br>');
                })
                ->addColumn('jabatan', function (T_realisasi_rkkl $T_realisasi_rkkl) {
                    return $T_realisasi_rkkl->T_realisasi_tempatpelaksanaans->map(function ($x) {
                        return $x->jabatan;
                    })->implode('<br>');
                })

                ->addColumn('tempat_pelaksana', function (T_realisasi_rkkl $T_realisasi_rkkl) {
                    return $T_realisasi_rkkl->T_realisasi_tempatpelaksanaans->map(function ($x) {
                        return $x->tempat_pelaksana;
                    })->implode('<br>');
                })
                ->addColumn('pembuat_laporan', function (T_realisasi_rkkl $T_realisasi_rkkl) {
                    return $T_realisasi_rkkl->T_pembuat_laporans->map(function ($x) {
                        return $x->nama_pelaksana;
                    })->implode('<br>');
                })
                ->addColumn('file_pdf', function (T_realisasi_rkkl $T_realisasi_rkkl) {
                    return $T_realisasi_rkkl->T_cobas->map(function ($x) {
                        return $x->file;
                    })->implode('<br>');
                })



                // ->toJson();
                ->rawColumns(['action', 'nama_pelaksana', 'nip', 'gol', 'jabatan', 'tempat_pelaksana', 'pembuat_laporan', 'file_pdf'])
                ->make(true);
        }

        return view('realisasi_rkkl', compact('datas', 'tempats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        T_realisasi_rkkl::updateOrCreate(
            ['id' => $request->product_id],
            [
                'nomor_surat_tugas' => $request->nomor_surat_tugas,
                'tanggal_surat_tugas' => $request->tanggal_surat_tugas,
                'tempat_pelaksana' => $request->tempat_pelaksana,
                'id_kode_uraian_kegiatan' => $request->id_kode_uraian_kegiatan,
                'nilai_pagu_realisasi' => $request->nilai_pagu_realisasi,
                'tanggal_pelaksana_dari' => $request->tanggal_pelaksana_dari,
                'tanggal_pelaksana_sampai' => $request->tanggal_pelaksana_sampai
            ]
        );

        return response()->json(['success' => 'Product saved successfully.']);
    }

    public function storex(Request $request)
    {
        // T_realisasi_rkkl_dummy::updateOrCreate(
        //     ['id_t_realiasi_rkkl' => $request->product_id],
        //     [
        //         'nomor_surat_tugas' => $request->nomor_surat_tugas,
        //         'tanggal_surat_tugas' => $request->tanggal_surat_tugas,
        //         'tempat_pelaksana' => $request->tempat_pelaksana,
        //         'id_kode_uraian_kegiatan' => $request->id_kode_uraian_kegiatan,
        //         'nilai_pagu_realisasi' => $request->nilai_pagu_realisasi,
        //         'tanggal_pelaksana_dari' => $request->tanggal_pelaksana_dari,
        //         'tanggal_pelaksana_sampai' => $request->tanggal_pelaksana_sampai
        //     ]
        // );
        // if ($request->tempat_pelaksana ==  $request->nama_tempat ) {

        // $validatedData = $request->validate(
        //     [
        //         'pdf' => 'required'
        //     ]
        //     );

        // $name = $request->file('pdf')->getClientOriginalName();
        // $path = $request->file('pdf')->store('public/pdf');

        // $save->name = $name;
        // $save->path = $path;



        DB::table('t_realisasi_tempatpelaksanaan')->insert([
            't_realisasi_rkkl_id' => $request->product_id,
            'nama_pelaksana' => $request->nama_pelaksana,
            'nip' => $request->nip,
            'golongan' => $request->golongan,
            'jabatan' => $request->jabatan,
            'tempat_pelaksana' => $request->tempat_pelaksana

        ]);

        // T_realisasi_tempatpelaksanaan::updateOrCreate(
        //     ['t_realisasi_rkkl_id' => $request->product_id],
        //     [
        //         'nama_pelaksana' => $request->nama_pelaksana,
        //         'nip' => $request->nip,
        //         'golongan' => $request->golongan,
        //         'jabatan' => $request->jabatan,
        //         'tempat_pelaksana' => $request->tempat_pelaksana
        //     ]
        // );



        // }


        return response()->json(['success' => 'Product saved successfully.']);
    }


    public function storez(Request $request)
    {
        DB::table('t_pembuat_laporan')->insert([
            't_realisasi_rkkl_id' => $request->product_id,
            'nama_pelaksana' => $request->user

        ]);
        return response()->json(['success' => 'Product saved successfully.']);
    }



    public function storey(Request $request)
    {

        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required',
        ]);

        // $fileName = time() . '.' . $request->file->extension();
        // $request->file->move(public_path('file'), $fileName);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'public/pdf';
        $file->move($tujuan_upload, $nama_file);

        // T_coba::create([
        //     'file' => $nama_file,
        //     'keterangan' => $request->keterangan,
        //     't_realisasi_rkkl_id' => $request->product_id,
        // ]);

        DB::table('t_coba')->insert([
            't_realisasi_rkkl_id' => $request->product_id,
            'file' => $nama_file,
            'keterangan' => $request->keterangan

        ]);

        // return response()->json(['success' => 'Product saved successfully.']);

        return redirect()->back();

        // return redirect()->back();
    }


    //   T_realisasi_rkkl::updateOrCreate(
    //     ['id' => $request->product_id],
    //     [
    //         'nomor_surat_tugas' => $request->nomor_surat_tugas,
    //         'tanggal_surat_tugas' => $request->tanggal_surat_tugas,
    //         'tempat_pelaksana' => $request->tempat_pelaksana,
    //         'id_kode_uraian_kegiatan' => $request->id_kode_uraian_kegiatan,
    //         'nilai_pagu_realisasi' => $request->nilai_pagu_realisasi,
    //         'tanggal_pelaksana_dari' => $request->tanggal_pelaksana_dari,
    //         'tanggal_pelaksana_sampai' => $request->tanggal_pelaksana_sampai
    //     ]
    // );


    // }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = T_realisasi_rkkl::find($id);
        return response()->json($product);
    }
    // public function editx($id)
    // {
    //     $product = T_realisasi_rkkl::find($id);
    //     return response()->json($product);
    // }






    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        T_realisasi_rkkl::find($id)->delete();

        return response()->json(['success' => 'Product deleted successfully.']);
    }
}