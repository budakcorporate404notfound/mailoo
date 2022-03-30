<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\ReferensiUraianKegiatan;
use App\Models\Ref_keuangan_uraian_kegiatan;

class DatatableRealisasiRKKL extends Component
{




    public function render()
    {
        return view('livewire.datatable-realisasi-r-k-k-l');
    }
}