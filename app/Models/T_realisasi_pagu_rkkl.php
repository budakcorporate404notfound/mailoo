<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\T_realisasi_rkkl;

class T_realisasi_pagu_rkkl extends Model
{
    use HasFactory;


    //  protected $visible = ['tempat_pelaksana'];

    protected $table = "T_realisasi_pagu_rkkl";
    protected $fillable = [
        'ref_unitbagian_id',
        't_realisasi_rkkl_id',
        'ref_keuangan_uraian_kegiatan_id',
        'nilai_pagu_realisasi',
        'user_penginput_data',
        'tahun_anggaran'

    ];

    public function T_realisasi_rkkl()
    {
        return $this->belongsTo('App\Models\T_realisasi_rkkl', 't_realisasi_rkkl_id', 'id');
    }
}