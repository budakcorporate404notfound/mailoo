<?php

namespace App\Http\Controllers;

use App\Models\KeteranganAnggaran;
use App\Models\Ref_keterangan;
use Illuminate\Http\Request;
use App\Models\Referensi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use DataTables;

class KeteranganAnggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = KeteranganAnggaran::select(
                'ref_keterangan.id',
                'ref_unitbagian.name as ref_unitbagian_id',
                'ref_keterangan.keterangan',
                'ref_keterangan.locked',
                'ref_keterangan.user_penginput_data',
                'ref_keterangan.tahun_anggaran',
                'ref_keterangan.created_at',
                'ref_keterangan.updated_at'

            )
                // ->selectRaw("ROUND(REPLACE(ref_keuangan_uraian_kegiatan.pagu_anggaran,'.','')) as pagu_anggaran")
                ->join('ref_unitbagian', 'ref_unitbagian.id', '=', 'ref_keterangan.ref_unitbagian_id')
                ->where('ref_unitbagian_id', '=', Auth::user()->unit_kerja)
                ->where('ref_keterangan.tahun_anggaran', '=', Session::get('tahunanggaran'));


            return Datatables::eloquent($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    switch (Auth::user()->jabatan) {
                        case '5': //super user
                            $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-dark btn-sm editProduct" title="edit referensi"><i class="las la-pen-alt"></i></a>';
                            $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct" title="delete referensi"><i class="las la-trash-alt"></i></a>';
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
                // ->editColumn('created_at', function ($data) {
                //     return $data->created_at ? with(new Carbon($data->created_at))->format('Y-m-d') : '';
                // })
                // ->editColumn('updated_at', function ($data) {
                //     return $data->updated_at ? with(new Carbon($data->updated_at))->format('Y-m-d') : '';
                // })
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
                ->rawColumns(['action', 'locked'])
                ->make(true);
        }

        return view('keterangan_anggaran');
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
        // $realisasi_anggaran = DB::table('t_realisasi_pagu_rkkl')
        //     ->selectRaw("sum(round(replace(nilai_pagu_realisasi, '.',''))) as realisasi_anggaran")
        //     ->where('ref_keuangan_uraian_kegiatan_id', '=', $request->product_id)
        //     ->get();
        // $realisasi_anggaran_tanpa_titik = $realisasi_anggaran[0]->realisasi_anggaran;

        // deklarasi nilai pagu yang baru diinput
        // $penginputan_tanpa_titik = str_replace('.', '', $request->pagu_anggaran);

        // $hasil = $penginputan_tanpa_titik - $realisasi_anggaran_tanpa_titik;
        //         100.000 - 1.000.000

        // if ($hasil < 0) {
        //     return response()->json(['failed' => 'failed.']);
        // } else {
        Ref_keterangan::updateOrCreate(
            ['id' => $request->product_id],
            [
                'ref_unitbagian_id' => Auth::user()->unit_kerja,
                'keterangan' => $request->keterangan,
                'locked' => $request->locked,
                'user_penginput_data' => Auth::user()->id,
                'tahun_anggaran' => Session::get('tahunanggaran')
            ]
        );

        return response()->json(['success' => 'success']);
        // }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Ref_keterangan::find($id);
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

        // $check_realisasi = DB::table('t_realisasi_pagu_rkkl')
        //     ->select(DB::raw("count(ref_keuangan_uraian_kegiatan_id) as count"))
        //     ->where('ref_keuangan_uraian_kegiatan_id', '=', $id)
        //     ->get();

        // $decode_check_realisasi = $check_realisasi;

        // $count = $decode_check_realisasi[0]->count;

        // if ($count <= 0) {
        Ref_keterangan::find($id)->delete();
        return response()->json(['success' => 'success']);
        // } else {
        //     return response()->json(['failed' => 'failed.']);
        // }
    }
}