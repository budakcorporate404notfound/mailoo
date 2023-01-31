<?php

namespace App\Http\Controllers;

use App\Models\Ref_Menimbang;
use App\Models\Ref_pelaksana;
use App\Models\Ref_satuankerja;
use App\Models\Ref_unitbagian;
use Illuminate\Http\Request;
use App\Models\Referensi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use DataTables;

class NamaPelaksana_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Ref_pelaksana::select(
                'ref_pelaksana.id',
                'ref_pelaksana.nama',
                'ref_pelaksana.nip',
                'ref_pelaksana.gol',
                'ref_pelaksana.eselon',
                'ref_pelaksana.jabatan',
                'ref_pelaksana.locked'
            );

            return Datatables::eloquent($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-dark btn-sm editProduct" title="edit satuan kerja"><i class="las la-pen-alt"></i></a>';

                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct" title="delete satuan kerja"><i class="las la-trash-alt"></i></a>';

                    return $btn;
                })
                ->addColumn('checkbox', '<input type="checkbox" name="pengeluaran_checkbox[]" class="pengeluaran_checkbox" value="{{$id}}" />')
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

                ->rawColumns(['action', 'checkbox', 'locked'])
                ->make(true);
        }

        return view('namapelaksana');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Ref_pelaksana::updateOrCreate(
            ['id' => $request->product_id],
            [
                'nama' => $request->nama_pelaksana,
                'nip' => $request->nip,
                'gol' => $request->golongan,
                'eselon' => $request->eselon,
                'jabatan' => $request->jabatan,
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
        $product = Ref_pelaksana::find($id);
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
        Ref_pelaksana::find($id)->delete();

        return response()->json(['success' => 'success']);
    }

    public function massremove(Request $id)
    {
        $pengeluaran_id_array = $id->input('id');
        $rincian_pengeluaran = Ref_pelaksana::whereIn('id', $pengeluaran_id_array);
        if ($rincian_pengeluaran->delete()) {
            echo 'Data Berhasil Terhapus';
        }
    }
}