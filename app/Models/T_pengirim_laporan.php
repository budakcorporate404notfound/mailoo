<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_pengirim_laporan extends Model
{
    use HasFactory;



    protected $table = "t_pengirim_laporan";
    protected $fillable = [
        'ref_unitbagian_id',
        'pengirim_laporan',
        't_realisasi_rkkl_id',
        'no_surat_tugas',
        'file',
        'keterangan',
        'user_penginput_data',
        'tahun_anggaran'
    ];
}