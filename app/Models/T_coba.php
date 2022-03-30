<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_coba extends Model
{
    use HasFactory;



    protected $table = "t_coba";
    protected $fillable = [
        't_realisasi_rkkl_id',
        'file',
        'keterangan'
    ];
}