<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\T_realisasi_rkkl;
use App\Models\Ref_keuangan_uraian_kegiatan;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
// use DataTables;

class Realisasi_rkklControllerx extends Controller
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

        if ($request->ajax()) {
            $data = T_realisasi_rkkl::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="editx btn btn-primary btn-sm editProductx">tambah tempat pelaksana</a>';

                    return $btn;
                })




                ->rawColumns(['action'])
                ->make(true);
        }

        return view('realisasi_rkkl', compact('datas'));
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