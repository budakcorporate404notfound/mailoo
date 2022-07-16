<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referensi extends Model
{
    protected $table = "ref_keuangan_uraian_kegiatan";
    protected $fillable = [
        'id_unitbagian',
        'kode_uraian_kegiatan',
        'nama_uraian_kegiatan',
        'nama_sub_menu_uraian_kegiatan',
        'kelompok_pagu',
        'pagu_anggaran',
        'user_penginput_data',
        'tahun_anggaran'
    ];
}