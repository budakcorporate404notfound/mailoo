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

class Wilayah_Controller extends Controller
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
            $data = Ref_kodewilayah::select(
                'ref_kodewilayah.id',
                'ref_kodewilayah.kode_wilayah',
                'ref_kodewilayah.nama_wilayah',
                // 'ref_satuankerja.nama_satuankerja',
                'ref_kodewilayah.sbu_uangharian_luarkota',
                'ref_kodewilayah.sbu_uangharian_dalamkota',
                'ref_kodewilayah.sbu_uangharian_diklat',
                'ref_kodewilayah.sbu_penginapan_eselon',
                'ref_kodewilayah.sbu_penginapan_golongan',
                'ref_kodewilayah.sbu_taksi_tempat_asal',
                'ref_kodewilayah.sbu_taksi_tempat_tujuan',
                'ref_kodewilayah.sbu_pesawat_bisnis',
                'ref_kodewilayah.sbu_pesawat_ekonomi',
                // 'ref_kodewilayah.locked'
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

        return view('wilayah', compact('autofills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Ref_kodewilayah::updateOrCreate(
            ['id' => $request->product_id],
            [
                // 'nama_satuankerja' => $request->nama_satuankerja,
                'nama_wilayah' => $request->nama_wilayah,
                'kode_wilayah' => $request->kode_wilayah,
                'sbu_uangharian_luarkota' => $request->sbu_uangharian_luarkota,
                'sbu_uangharian_dalamkota' => $request->sbu_uangharian_dalamkota,
                'sbu_uangharian_diklat' => $request->sbu_uangharian_diklat,
                'sbu_penginapan_eselon' => $request->sbu_penginapan_eselon,
                'sbu_penginapan_golongan' => $request->sbu_penginapan_golongan,
                'sbu_taksi_tempat_asal' => $request->sbu_taksi_tempat_asal,
                'sbu_taksi_tempat_tujuan' => $request->sbu_taksi_tempat_tujuan,
                'sbu_pesawat_bisnis' => $request->sbu_pesawat_bisnis,
                'sbu_pesawat_ekonomi' => $request->sbu_pesawat_ekonomi,
                // 'locked' => $request->locked
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
        $product = Ref_kodewilayah::find($id);
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
        Ref_kodewilayah::find($id)->delete();

        return response()->json(['success' => 'success']);
    }

    public function getDetailAutofillKodeWilayahs($id = 0)
    {
        $data = Ref_kodewilayah::where('kode_wilayah', $id)->first();
        return response()->json($data);
    }
    public function massremove(Request $id)
    {
        $pengeluaran_id_array = $id->input('id');
        $rincian_pengeluaran = Ref_kodewilayah::whereIn('id', $pengeluaran_id_array);
        if ($rincian_pengeluaran->delete()) {
            echo 'Data Berhasil Terhapus';
        }
    }
}