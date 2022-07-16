<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Ref_Confirmjabatan;
use App\Models\T_realisasi_rkkl;
use App\Models\T_realisasi_tempatpelaksanaan;
use App\Models\T_realisasi_rkkl_dummy;
use App\Models\Ref_satuankerja;
// use Yajra\DataTables\DataTables;
use App\Models\T_coba;
use App\Models\T_pengirim_laporan;
use App\Models\T_realisasi_pagu_rkkl;
use App\Models\Ref_keuangan_uraian_kegiatan;
use App\Models\Ref_unitbagian;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DataTables;
use Illuminate\Support\Facades\Cache;

class Status_UserController extends Controller
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

        $bagians = Ref_unitbagian::all();

        $jabatans = Ref_Confirmjabatan::all();

        $laporans = User::select('id', 'name')
            ->where('unit_kerja', '=', Auth::user()->unit_kerja)
            ->get();

        if ($request->ajax()) {
            // $data = T_realisasi_rkkl::with('T_realisasi_tempatpelaksanaans', 'Ref_satuankerjas', 'T_pengirim_laporans', 'T_pembuat_laporans', 'T_realisasi_pagu_rkkls')
            //     ->orderBy('verifikasi_kelengkapan', 'DESC');

            // $data = T_realisasi_pagu_rkkl::select(
            //     't_realisasi_pagu_rkkl.id',
            //     'ref_unitbagian.name as bagian',
            //     't_realisasi_pagu_rkkl.t_realisasi_rkkl_id',
            //     'ref_keuangan_uraian_kegiatan.id as kode_anggaran',
            //     'ref_keuangan_uraian_kegiatan.kode_uraian_kegiatan as kode_uraian_kegiatan',
            //     'ref_keuangan_uraian_kegiatan.nama_uraian_kegiatan as nama_uraian_kegiatan',
            //     'ref_keuangan_uraian_kegiatan.nama_sub_menu_uraian_kegiatan as nama_sub_menu_uraian_kegiatan',
            //     'ref_keuangan_uraian_kegiatan.kelompok_pagu as kelompok_pagu',
            //     't_realisasi_pagu_rkkl.nilai_pagu_realisasi',
            //     't_realisasi_pagu_rkkl.user_penginput_data',
            //     't_realisasi_pagu_rkkl.created_at',
            //     't_realisasi_pagu_rkkl.updated_at'
            // )


            //     ->join('ref_unitbagian', 'ref_unitbagian.id', '=', 't_realisasi_pagu_rkkl.ref_unitbagian_id')
            //     ->join('ref_keuangan_uraian_kegiatan', 'ref_keuangan_uraian_kegiatan.id', '=', 't_realisasi_pagu_rkkl.ref_keuangan_uraian_kegiatan_id')
            //     ->where('t_realisasi_pagu_rkkl.ref_unitbagian_id', '=', Auth::user()->unit_kerja);



            $data = User::select(
                'users.id',
                'users.name',
                'users.nip',
                'ref_unitbagian.name as unit_bagian',
                'ref_confirmjabatan.name as jabatan',
                'users.email',
                'users.locked',
                'users.last_seen'
            )
                ->join('ref_unitbagian', 'ref_unitbagian.id', '=', 'users.unit_kerja')
                ->join('ref_confirmjabatan', 'ref_confirmjabatan.id', '=', 'users.jabatan')
                ->whereNotNull('last_seen')
                ->orderBy('last_seen', 'DESC');


            return Datatables::eloquent($data)

                ->addIndexColumn()

                ->addColumn('action', function ($row) {

                    switch ([Auth::user()->jabatan, Auth::user()->locked]) {
                        case ['5', '1']:
                            $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-dark btn-sm editProduct" title="edit status user"><i class="las la-pen-alt"></i></a>';
                            $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct" title="hapus user"><i class="las la-trash-alt"></i></a>';
                            return $btn;
                            break;

                        default:
                            return;
                            break;
                    }
                })
                ->editColumn('created_at', function ($data) {
                    return $data->created_at ? with(new Carbon($data->created_at))->format('m-d-Y') : '';
                })
                ->editColumn('updated_at', function ($data) {
                    return $data->updated_at ? with(new Carbon($data->updated_at))->format('m-d-Y') : '';
                })
                ->editColumn(
                    'locked',
                    function ($data) {
                        if ($data->locked == 1) {
                            return '<span class="badge badge-success">terbuka</span>';
                        } elseif ($data->locked == 0) {
                            return '<span class="badge badge-danger">terkunci</span>';
                        }
                    }
                )

                ->editColumn(
                    'last_seen',
                    function ($data) {
                        return Carbon::parse($data->last_seen)->diffForHumans();
                    }
                )
                ->addColumn('status', function ($data) {
                    //   @if(Cache::has('user-is-online-' . $user->id))
                    //                 <span class="text-success">Online</span>
                    //             @else
                    //                 <span class="text-secondary">Offline</span>
                    //             @endif

                    if (Cache::has('user-is-online-' . $data->id)) {
                        return '<span class="dot-success"></span> <span class="text-success">online</span>';
                    } else {
                        return '<span class="dot-danger"></span> <span class="text-danger">offline</span>';
                    }
                })
                // ->toJson()
                ->rawColumns(['status', 'last_seen', 'locked', 'created_at', 'updated_at', 'action', 'nama_pelaksana', 'nip', 'gol', 'jabatan', 'tempat_pelaksana', 'pembuat_laporan', 'ref_keuangan_uraian_kegiatan_id', 'nilai_pagu_realisasi',  'file_pdf'])
                ->make(true);
        }

        return view('statususer', compact('datas', 'tempats', 'laporans', 'bagians', 'jabatans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::updateOrCreate(
            ['id' => $request->product_id],
            [
                'name' => $request->name,
                'nip' => $request->nip,
                'unit_kerja' => $request->unit_kerja,
                'jabatan' => $request->jabatan,
                'email' => $request->email,
                'locked' => $request->locked
            ]
        );

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
            'user_penginput_data' => Auth::user()->id


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
        DB::table('t_realisasi_tempatpelaksanaan')->insert([
            't_realisasi_rkkl_id' => $request->product_id,
            'nama_pelaksana' => $request->user,
            'no_surat_tugas' => $request->nomor_surat_tugas,
            'user_penginput_data' => Auth::user()->id


        ]);
        return response()->json(['success' => 'success.']);
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

        DB::table('t_pengirim_laporan')->insert([
            't_realisasi_rkkl_id' => $request->product_id,
            'file' => $nama_file,
            'keterangan' => $request->keterangan

        ]);

        // return response()->json(['success' => 'success.']);

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

    public function storev(Request $request)
    {
        // deklarasi pagu anggaran
        $pagu_anggaran = DB::table('t_realisasi_tempatpelaksanaan')
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
                'user_penginput_data' => Auth::user()->id


            ]);
            return response()->json(['success' => 'success.']);
        }
    }


    public function edit($id)
    {
        $product = User::find($id);
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
        User::find($id)->delete();

        return response()->json(['success' => 'success']);
    }
}