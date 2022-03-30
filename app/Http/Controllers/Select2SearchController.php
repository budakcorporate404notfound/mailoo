<?php

namespace App\Http\Controllers;

use App\Models\Ref_satuankerja;
use Illuminate\Http\Request;

class Select2SearchController extends Controller
{

    public function index()
    {
        return view('realisasi_rkkl');
    }

    public function selectSearch(Request $request)
    {
        $movies = [];

        if ($request->has('q')) {
            $search = $request->q;
            $movies = Ref_satuankerja::select("id", "nama_satuankerja")
                ->where('nama_satuankerja', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($movies);
    }
}