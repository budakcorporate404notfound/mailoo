<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\T_realisasi_rkkl;

class T_realisasi_tempatpelaksanaan extends Model
{
    use HasFactory;


    //  protected $visible = ['tempat_pelaksana'];

    protected $table = "t_realisasi_tempatpelaksanaan";
    protected $fillable = [
        't_realisasi_rkkl_id',
        'tempat_pelaksana',
        'nama_pelaksana',
        'nip',
        'golongan',
        'jabatan'

    ];

    public function T_realisasi_rkkl()
    {
        return $this->belongsTo('App\Models\T_realisasi_rkkl', 't_realisasi_rkkl_id', 'id');
    }
}