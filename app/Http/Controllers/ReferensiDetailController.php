<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Referensi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use DataTables;

class ReferensiDetailController extends Controller
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
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Referensi::select(
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
            ->where('ref_keuangan_uraian_kegiatan.id', '=', $id)
            ->where('ref_keuangan_uraian_kegiatan.tahun_anggaran', '=', Session::get('tahunanggaran'))
            ->first();
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
}