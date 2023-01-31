<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Referensi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use DataTables;

class ReferensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Referensi::select(
                'ref_keuangan_uraian_kegiatan.id',
                // 'ref_keuangan_uraian_kegiatan.id_unitbagian',
                'ref_unitbagian.name as id_unitbagian',
                'ref_keuangan_uraian_kegiatan.kode_uraian_kegiatan',
                'ref_keuangan_uraian_kegiatan.nama_uraian_kegiatan',
                'ref_keuangan_uraian_kegiatan.nama_sub_menu_uraian_kegiatan',
                'ref_keuangan_uraian_kegiatan.kelompok_pagu',
                // 'ref_keuangan_uraian_kegiatan.pagu_anggaran',
                'ref_keuangan_uraian_kegiatan.user_penginput_data',
                'ref_keuangan_uraian_kegiatan.tahun_anggaran',
                'ref_keuangan_uraian_kegiatan.created_at',
                'ref_keuangan_uraian_kegiatan.updated_at'

            )
                ->selectRaw("ROUND(REPLACE(ref_keuangan_uraian_kegiatan.pagu_anggaran,'.','')) as pagu_anggaran")
                ->join('ref_unitbagian', 'ref_unitbagian.id', '=', 'ref_keuangan_uraian_kegiatan.id_unitbagian')
                ->where('id_unitbagian', '=', Auth::user()->unit_kerja)
                ->where('ref_keuangan_uraian_kegiatan.tahun_anggaran', '=', Session::get('tahunanggaran'));


            return Datatables::eloquent($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    switch (Auth::user()->jabatan) {
                        case '5': //super user
                            $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-dark btn-sm editProduct" title="edit referensi"><i class="las la-pen-alt"></i></a>';
                            $btn = $btn . ' <a href="' .  url("ujicobaslug", $row->kelompok_pagu)    . '" target="_blank()" data-toggle="tooltip"  data-original-title="Delete" class="btn btn-secondary btn-sm " title="ujicoba slug"><i class="las la-info"></i></a>';
                            $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct" title="delete referensi"><i class="las la-trash-alt"></i></a>';


                            // $btn = $btn . '<a href="' .  url("ujicobaslug", $row->kelompok_pagu)    . '" class="btn btn-flat pink accent-3 waves-effect waves-light white-text"> <i class="material-icons right"> ujicoba slug</i></a>';
                            // $btn = $btn . ' <a href="{{ url("read", $data->slug_judul) }}" class="btn btn-flat pink accent-3 waves-effect waves-light white-text">Readmore <i class="material-icons right">send</i></a>';

                            return $btn;
                            break;
                        case '6': //bendahara
                            $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-dark btn-sm editProduct" title="edit referensi"><i class="las la-pen-alt"></i></a>';
                            return $btn;
                        default:
                            return;
                            break;
                    }

                    // if (Auth::user()->jabatan == '5') {
                    // } else {
                    //     $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-dark btn-sm editProduct" title="edit referensi"><i class="las la-pen-alt"></i></a>';
                    //     $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct" title="delete referensi"><i class="las la-trash-alt"></i></a>';
                    //     return $btn;
                    // }
                })
                ->editColumn('created_at', function ($data) {
                    return $data->created_at ? with(new Carbon($data->created_at))->format('Y-m-d') : '';
                })
                ->editColumn('updated_at', function ($data) {
                    return $data->updated_at ? with(new Carbon($data->updated_at))->format('Y-m-d') : '';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('referensi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $pagu_anggaran  = $request->pagu_anggaran;

        // deklarasi pagu anggaran
        // $pagu_anggaran = DB::table('ref_keuangan_uraian_kegiatan')
        //     ->selectRaw("round(replace(pagu_anggaran, '.','')) as pagu_anggaran")
        //     ->where('id', '=', $request->ref_keuangan_uraian_kegiatan_id)
        //     ->get();
        // $pagu_anggaran_tanpa_titik = $pagu_anggaran[0]->pagu_anggaran;

        // deklarasi nilai pagu telah ter-realisasi
        $realisasi_anggaran = DB::table('t_realisasi_pagu_rkkl')
            ->selectRaw("sum(round(replace(nilai_pagu_realisasi, '.',''))) as realisasi_anggaran")
            ->where('ref_keuangan_uraian_kegiatan_id', '=', $request->product_id)
            ->get();
        $realisasi_anggaran_tanpa_titik = $realisasi_anggaran[0]->realisasi_anggaran;

        // deklarasi nilai pagu yang baru diinput
        $penginputan_tanpa_titik = str_replace('.', '', $request->pagu_anggaran);

        $hasil = $penginputan_tanpa_titik - $realisasi_anggaran_tanpa_titik;
        //         100.000 - 1.000.000

        if ($hasil < 0) {
            return response()->json(['failed' => 'failed.']);
        } else {
            Referensi::updateOrCreate(
                ['id' => $request->product_id],
                [
                    'id_unitbagian' => Auth::user()->unit_kerja,
                    'kode_uraian_kegiatan' => $request->kode_uraian_kegiatan,
                    'nama_uraian_kegiatan' => $request->nama_uraian_kegiatan,
                    'nama_sub_menu_uraian_kegiatan' => $request->nama_sub_menu_uraian_kegiatan,
                    'kelompok_pagu' => $request->kelompok_pagu,
                    'pagu_anggaran' => $request->pagu_anggaran,
                    'user_penginput_data' => Auth::user()->id,
                    'tahun_anggaran' => Session::get('tahunanggaran')
                ]
            );

            return response()->json(['success' => 'success']);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Referensi::find($id);
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $check_realisasi = DB::table('t_realisasi_pagu_rkkl')
            ->select(DB::raw("count(ref_keuangan_uraian_kegiatan_id) as count"))
            ->where('ref_keuangan_uraian_kegiatan_id', '=', $id)
            ->get();

        $decode_check_realisasi = $check_realisasi;

        $count = $decode_check_realisasi[0]->count;

        if ($count <= 0) {
            Referensi::find($id)->delete();
            return response()->json(['success' => 'success']);
        } else {
            return response()->json(['failed' => 'failed.']);
        }
    }

    public function show($slug)
    {
        $tampilkan = Referensi::where('kelompok_pagu', $slug)->first();
        return dd($tampilkan);
    }
}