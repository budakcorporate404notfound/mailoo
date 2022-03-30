<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_pembuat_laporan extends Model
{

    use HasFactory;

    protected $table = "t_pembuat_laporan";
    protected $fillable = [
        't_realisasi_rkkl_id',
        'nama_pelaksana'
    ];
}