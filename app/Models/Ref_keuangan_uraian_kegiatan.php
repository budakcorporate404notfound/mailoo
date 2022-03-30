<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_keuangan_uraian_kegiatan extends Model
{
    use HasFactory;

    protected $table = "ref_keuangan_uraian_kegiatan";
    protected $fillable = [
        'id',
        'id_unitbagian',
        'nama_unitbagian',
        'kode_uraian_kegiatan',
        'nama_uraian_kegiatan',
        'nama_sub_menu_uraian_kegiatan',
        'pagu_anggaran'
    ];
}