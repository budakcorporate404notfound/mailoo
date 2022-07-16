<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\T_realisasi_rkkl;
use App\Models\T_realisasi_tempatpelaksanaan;
use App\Models\T_realisasi_rkkl_dummy;
use App\Models\Ref_satuankerja;
// use Yajra\DataTables\DataTables;
use App\Models\T_coba;
use App\Models\T_pengirim_laporan;
use App\Models\T_realisasi_pagu_rkkl;
use App\Models\Ref_keuangan_uraian_kegiatan;
use App\Models\T_pembuat_laporan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;


class Unggah_LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datas = Ref_keuangan_uraian_kegiatan::select('id', 'nama_uraian_kegiatan', 'nama_sub_menu_uraian_kegiatan', 'kelompok_pagu')
            ->where(
                'Ref_keuangan_uraian_kegiatan.id_unitbagian',
                '=',
                Auth::user()->unit_kerja
            )
            ->get();

        $tempats = Ref_satuankerja::all();

        $laporans = User::select('id', 'name')
            ->where('unit_kerja', '=', Auth::user()->unit_kerja)
            ->get();

        if ($request->ajax()) {
            // $data = T_realisasi_rkkl::with('T_realisasi_tempatpelaksanaans', 'Ref_satuankerjas', 'T_pengirim_laporans', 'T_pembuat_laporans', 'T_realisasi_pagu_rkkls')
            //     ->orderBy('verifikasi_kelengkapan', 'DESC');

            // $data = T_pembuat_laporan::select('id', 't_realisasi_rkkl_id', 'nama_pelaksana', 'no_surat_tugas', 'user_penginput_data');

            $data = DB::table('t_pembuat_laporan')
                ->select('id', 't_realisasi_rkkl_id', 'nama_pelaksana', 'no_surat_tugas', 'user_penginput_data', 'tahun_anggaran', 'created_at', 'updated_at')
                ->where('nama_pelaksana', '=', Auth::user()->name)
                ->where('t_pembuat_laporan.tahun_anggaran', '=', Session::get('tahunanggaran'))
                ->whereNotExists(function ($query) {
                    $query->select(DB::raw(1))
                        ->from('t_pengirim_laporan')
                        ->whereRaw(
                            'concat(t_pembuat_laporan.t_realisasi_rkkl_id,t_pembuat_laporan.nama_pelaksana)
                            =
                            concat(t_pengirim_laporan.t_realisasi_rkkl_id,t_pengirim_laporan.pengirim_laporan)'

                        );
                });

            return Datatables::of($data)

                ->addIndexColumn()

                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-dark btn-sm editProducty" title="unggah laporan"><i class="las la-upload"></i></a>';
                    // $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-dark btn-sm editProductx" title="tambah tempat pelaksanaan"><i class="las la-campground"></i></a>';
                    // $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-dark btn-sm editProductv" title="tambah realisasi anggaran"><i class="las la-dollar-sign"></i></a>';
                    // $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-dark btn-sm editProductz" title="tambah pembuat laporan"><i class="las la-file-medical"></i></a>';
                    // $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct" title="hapus realisasi rkkl"><i class="las la-trash-alt"></i></a>';
                    // $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editProducty">pdf</a>';
                    return $btn;
                })
                ->editColumn('created_at', function ($data) {
                    return $data->created_at ? with(new Carbon($data->created_at))->format('Y-m-d') : '';
                })
                ->editColumn('updated_at', function ($data) {
                    return $data->updated_at ? with(new Carbon($data->updated_at))->format('Y-m-d') : '';
                })

                // ->toJson();
                ->rawColumns(['action', 'nama_pelaksana', 'nip', 'gol', 'jabatan', 'tempat_pelaksana', 'pembuat_laporan', 'ref_keuangan_uraian_kegiatan_id', 'nilai_pagu_realisasi',  'file_pdf'])
                ->make(true);
        }

        return view('unggah_laporan', compact('datas', 'tempats', 'laporans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if (!isset($request->verifikasi_kelengkapan)) {
            T_realisasi_rkkl::updateOrCreate(
                ['id' => $request->product_id],
                [
                    'ref_unitbagian_id' => Auth::user()->unit_kerja,
                    'nomor_surat_tugas' => $request->nomor_surat_tugas,
                    'tanggal_surat_tugas' => $request->tanggal_surat_tugas,
                    // 'tempat_pelaksana' => $request->tempat_pelaksana,
                    // 'id_kode_uraian_kegiatan' => $request->id_kode_uraian_kegiatan,
                    // 'nilai_pagu_realisasi' => $request->nilai_pagu_realisasi,
                    'tanggal_pelaksana_dari' => $request->tanggal_pelaksana_dari,
                    'tanggal_pelaksana_sampai' => $request->tanggal_pelaksana_sampai,
                    'verifikasi_kelengkapan' => 'belum lengkap',
                    'user_penginput_data' => Auth::user()->id,
                    'tahun_anggaran' => Session::get('tahunanggaran')
                ]
            );
        } else {
            T_realisasi_rkkl::updateOrCreate(
                ['id' => $request->product_id],
                [
                    'ref_unitbagian_id' => Auth::user()->unit_kerja,
                    'nomor_surat_tugas' => $request->nomor_surat_tugas,
                    'tanggal_surat_tugas' => $request->tanggal_surat_tugas,
                    // 'tempat_pelaksana' => $request->tempat_pelaksana,
                    // 'id_kode_uraian_kegiatan' => $request->id_kode_uraian_kegiatan,
                    // 'nilai_pagu_realisasi' => $request->nilai_pagu_realisasi,
                    'tanggal_pelaksana_dari' => $request->tanggal_pelaksana_dari,
                    'tanggal_pelaksana_sampai' => $request->tanggal_pelaksana_sampai,
                    'verifikasi_kelengkapan' => $request->verifikasi_kelengkapan,
                    'user_penginput_data' => Auth::user()->id,
                    'tahun_anggaran' => Session::get('tahunanggaran')
                ]
            );
        }
        return response()->json(['success' => 'success.']);
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
            'tempat_pelaksana' => $request->tempat_pelaksana,
            'user_penginput_data' => Auth::user()->id,
            'tahun_anggaran' => Session::get('tahunanggaran')


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


        return response()->json(['success' => 'success.']);
    }


    public function storez(Request $request)
    {
        DB::table('t_pembuat_laporan')->insert([
            't_realisasi_rkkl_id' => $request->product_id,
            'nama_pelaksana' => $request->user,
            'no_surat_tugas' => $request->nomor_surat_tugas,
            'user_penginput_data' => Auth::user()->id,
            'tahun_anggaran' => Session::get('tahunanggaran')


        ]);
        return response()->json(['success' => 'success.']);
    }



    public function storey(Request $request)
    {

        // $this->validate($request, [
        //     'file' => 'required|mimes:pdf',
        //     'keterangan' => 'required',
        // ]);

        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:pdf',
            'keterangan' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'error.']);
        } else {
            // $fileName = time() . '.' . $request->file->extension();
            // $request->file->move(public_path('file'), $fileName);

            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('file');

            $nama_file = time() . "_" . $file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'storage/laporan_kegiatan';
            $file->move($tujuan_upload, $nama_file);

            // T_coba::create([
            //     'file' => $nama_file,
            //     'keterangan' => $request->keterangan,
            //     't_realisasi_rkkl_id' => $request->product_id,
            // ]);

            DB::table('t_pengirim_laporan')->insert([
                'ref_unitbagian_id' => Auth::user()->unit_kerja,
                'pengirim_laporan' => Auth::user()->name,
                't_realisasi_rkkl_id' => $request->t_realisasi_rkkl_id,
                'no_surat_tugas' => $request->no_surat_tugas,
                'file' => $nama_file,
                'keterangan' => $request->keterangan,
                'user_penginput_data' => Auth::user()->id,
                'tahun_anggaran' => Session::get('tahunanggaran')

            ]);

            return response()->json(['success' => 'success.']);
        }



        // return redirect()->back();

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

    public function storev(Request $request)
    {
        // deklarasi pagu anggaran
        $pagu_anggaran = DB::table('ref_keuangan_uraian_kegiatan')
            ->selectRaw("round(replace(pagu_anggaran, '.','')) as pagu_anggaran")
            ->where('id', '=', $request->ref_keuangan_uraian_kegiatan_id)
            ->get();
        $pagu_anggaran_tanpa_titik = $pagu_anggaran[0]->pagu_anggaran;

        // deklarasi nilai pagu telah ter-realisasi
        $realisasi_anggaran = DB::table('t_realisasi_pagu_rkkl')
            ->selectRaw("sum(round(replace(nilai_pagu_realisasi, '.',''))) as realisasi_anggaran")
            ->where('ref_keuangan_uraian_kegiatan_id', '=', $request->ref_keuangan_uraian_kegiatan_id)
            ->get();
        $realisasi_anggaran_tanpa_titik = $realisasi_anggaran[0]->realisasi_anggaran;

        // deklarasi nilai pagu yang baru diinput
        $penginputan_tanpa_titik = str_replace('.', '', $request->nilai_pagu_realisasi);

        $hasil = $pagu_anggaran_tanpa_titik - $realisasi_anggaran_tanpa_titik - $penginputan_tanpa_titik;


        if ($hasil < 0) {
            return response()->json(['failed' => 'failed.']);
        } else {
            DB::table('t_realisasi_pagu_rkkl')->insert([
                'ref_unitbagian_id' => Auth::user()->unit_kerja,
                't_realisasi_rkkl_id' => $request->product_id,
                'ref_keuangan_uraian_kegiatan_id' => $request->ref_keuangan_uraian_kegiatan_id,
                'nilai_pagu_realisasi' => $request->nilai_pagu_realisasi,
                'user_penginput_data' => Auth::user()->id,
                'tahun_anggaran' => Session::get('tahunanggaran')


            ]);
            return response()->json(['success' => 'success.']);
        }
    }


    public function edit($id)
    {
        $product = T_pembuat_laporan::find($id);
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
        T_pembuat_laporan::find($id)->delete();

        return response()->json(['success' => 'success']);
    }
}