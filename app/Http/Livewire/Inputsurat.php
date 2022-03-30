<?php

namespace App\Http\Livewire;

use App\Models\Ref_unitbagian_4_surat_masuk;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component as ViewComponent;


use Livewire\Component;


class Inputsurat extends Component
{

    public function test()
    {
        dd("test");
    }

    public function render()
    {
        $referensi_unitbagian_4_surat_masuk = Ref_unitbagian_4_surat_masuk::pluck('name', 'id');
        $selectedID_unitbagian_4_surat_masuk = 0;
        $referensi_unitbagian = DB::table("ref_unitbagian")->pluck("name", "id");

        return view('livewire.inputsurat', compact('referensi_unitbagian', 'selectedID_unitbagian_4_surat_masuk', 'referensi_unitbagian_4_surat_masuk'))
            ->extends('layouts.app')
            ->section('konten');
    }
}