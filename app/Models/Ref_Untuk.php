<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_Untuk extends Model
{
    protected $table = "ref_untuk";
    protected $fillable = [
        'id_unitbagian',
        'text_untuk',
        'user_penginput_data',
        'tahun_anggaran',
        'locked'
    ];
}