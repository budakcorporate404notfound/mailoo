<?php

namespace App\Http\Controllers;

use App\Models\Ref_kodewilayah;
use App\Models\Ref_Menimbang;
use App\Models\Ref_satuankerja;
use App\Models\Ref_unitbagian;
use Illuminate\Http\Request;
use App\Models\Referensi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

use DataTables;

class SatuanKerja_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $autofills = Ref_kodewilayah::all();


        if ($request->ajax()) {
            $data = Ref_satuankerja::select(
                'ref_satuankerja.id',
                'ref_satuankerja.kode_wilayah',
                'ref_satuankerja.nama_wilayah',
                'ref_satuankerja.nama_satuankerja',
                'ref_satuankerja.locked'
            );

            return Datatables::eloquent($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-dark btn-sm editProduct" title="edit satuan kerja"><i class="las la-pen-alt"></i></a>';

                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct" title="delete satuan kerja"><i class="las la-trash-alt"></i></a>';

                    return $btn;
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

        return view('satuankerja', compact('autofills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Ref_satuankerja::updateOrCreate(
            ['id' => $request->product_id],
            [
                'nama_satuankerja' => $request->nama_satuankerja,
                'nama_wilayah' => $request->nama_wilayah,
                'kode_wilayah' => $request->kode_wilayah,
                'locked' => $request->locked

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
        $product = Ref_satuankerja::find($id);
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
        Ref_satuankerja::find($id)->delete();

        return response()->json(['success' => 'success']);
    }

    public function getDetailAutofillSatuankerjas($id = 0)
    {
        $data = Ref_satuankerja::where('kode_wilayah', $id)->first();
        return response()->json($data);
    }
}