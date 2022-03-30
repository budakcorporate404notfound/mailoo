<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Ref_satuankerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Select2SearchController2 extends Controller
{

    public function index()
    {
        return view('realisasi_rkkl');
    }

    public function selectSearch2(Request $request)
    {
        $movies = [];

        if ($request->has('q')) {
            $search2 = $request->q;
            $movies = User::select("id", "name")
                ->where('unit_kerja','=',  Auth::user()->unit_kerja)
                ->where('name', 'LIKE', "%$search2%")
                ->get();
        }
        return response()->json($movies);
    }
}