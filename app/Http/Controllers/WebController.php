<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\T_mainsurat;
use Livewire\WithFileUploads;
use Yajra\DataTables\DataTables;
use App\Models\T_realisasi_rkkl;
use App\Models\T_realisasi_tempatpelaksanaan;

use Illuminate\Support\Facades\DB;



class WebController extends Controller
{
    public function index()
    {
        $artikel = T_realisasi_rkkl::all();
        return view('article', ['artikel' => $artikel]);
    }
}

// commit 1st