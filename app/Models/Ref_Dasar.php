<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_Dasar extends Model
{
    protected $table = "ref_dasar";
    protected $fillable = [
        'id_unitbagian',
        'text_dasar',
        'user_penginput_data',
        'tahun_anggaran',
        'locked'
    ];
}