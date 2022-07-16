<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_Tertanda extends Model
{
    protected $table = "ref_tertanda";
    protected $fillable = [
        'id_unitbagian',
        'nama',
        'nip',
        'user_penginput_data',
        'tahun_anggaran',
        'locked'
    ];
}