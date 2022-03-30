<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ref_satuankerja;
use App\Models\Ref_keuangan_uraian_kegiatan;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class Select2SearchController3 extends Controller
{
    public function index()
    {
        return view('realisasi_rkkl');
    }

    public function selectSearch3(Request $request)
    {
        $movies = [];

        if ($request->has('q')) {
            $search3 = $request->q;
            $movies = Ref_keuangan_uraian_kegiatan::select("id", "nama_sub_menu_uraian_kegiatan")
                ->where('id_unitbagian', '=',  Auth::user()->unit_kerja)
                ->where('nama_sub_menu_uraian_kegiatan', 'LIKE', "%$search3%")
                ->get();
        }
        return response()->json($movies);
    }
}