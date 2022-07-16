<?php

namespace App\Http\Controllers;

use App\Models\Ref_Dasar;
use App\Models\Ref_Kodemak;
use App\Models\Ref_Menimbang;
use Illuminate\Http\Request;
use App\Models\Referensi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use DataTables;

class KodemakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Ref_Kodemak::select(
                'ref_kodemak.id',
                // 'ref_keuangan_uraian_kegiatan.id_unitbagian',
                'ref_unitbagian.name as id_unitbagian',
                'ref_kodemak.text_kodemak',
                'ref_kodemak.user_penginput_data',
                'ref_kodemak.tahun_anggaran',
                'ref_kodemak.locked',
                'ref_kodemak.created_at',
                'ref_kodemak.updated_at'
            )
                ->join('ref_unitbagian', 'ref_unitbagian.id', '=', 'ref_kodemak.id_unitbagian')
                ->where('id_unitbagian', '=', Auth::user()->unit_kerja);

            return Datatables::eloquent($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    switch (Auth::user()->jabatan) {
                        case '5':
                            $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-dark btn-sm editProduct" title="edit referensi kodemak"><i class="las la-pen-alt"></i></a>';
                            $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct" title="delete referensi kodemak"><i class="las la-trash-alt"></i></a>';
                            return $btn;
                            break;

                        case '6':
                            $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-dark btn-sm editProduct" title="edit referensi kodemak"><i class="las la-pen-alt"></i></a>';
                            return $btn;
                            break;

                        default:
                            return;
                            break;
                    }
                })
                ->editColumn('created_at', function ($data) {
                    return $data->created_at ? with(new Carbon($data->created_at))->format('Y-m-d') : '';
                })
                ->editColumn('updated_at', function ($data) {
                    return $data->updated_at ? with(new Carbon($data->updated_at))->format('Y-m-d') : '';
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
                ->rawColumns(['action', 'locked'])
                ->make(true);
        }

        return view('kodemak');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Ref_Kodemak::updateOrCreate(
            ['id' => $request->product_id],
            [
                'id_unitbagian' => Auth::user()->unit_kerja,
                'text_kodemak' => $request->text_kodemak,
                'user_penginput_data' => Auth::user()->id,
                'tahun_anggaran' => Session::get('tahunanggaran'),
                'locked' => $request->locked,
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
        $product = Ref_Kodemak::find($id);
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
        Ref_Kodemak::find($id)->delete();

        return response()->json(['success' => 'success']);
    }
}