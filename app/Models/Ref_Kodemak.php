<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_Kodemak extends Model
{
    protected $table = "ref_kodemak";
    protected $fillable = [
        'id_unitbagian',
        'text_kodemak',
        'user_penginput_data',
        'tahun_anggaran',
        'locked'
    ];
}