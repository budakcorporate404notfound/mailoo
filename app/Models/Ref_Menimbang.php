<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_Menimbang extends Model
{
    protected $table = "ref_menimbang";
    protected $fillable = [
        'id_unitbagian',
        'urutan',
        'text_menimbang',
        'user_penginput_data',
        'tahun_anggaran',
        'locked'
    ];
}