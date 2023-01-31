<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeteranganAnggaran extends Model
{
    protected $table = "ref_keterangan";
    protected $fillable = [
        'id_unitbagian',
        'keterangan',
        'locked',
        'user_penginput_data',
        'tahun_anggaran'
    ];
}