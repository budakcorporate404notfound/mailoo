<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\T_realisasi_tempatpelaksanaan;

class T_realisasi_rkkl extends Model
{
    use HasFactory;

    protected $table = "t_realisasi_rkkl";
    protected $fillable = [
        'ref_unitbagian_id',
        'nomor_surat_tugas',
        'tanggal_surat_tugas',
        'tanggal_pelaksana_dari',
        'tanggal_pelaksana_sampai',
        'verifikasi_kelengkapan',
        'user_penginput_data',
        'tahun_anggaran'
    ];

    public function T_realisasi_tempatpelaksanaans()
    {
        return $this->hasMany('App\Models\T_realisasi_tempatpelaksanaan');
    }


    public function T_pengirim_laporans()
    {
        return $this->hasMany('App\Models\T_pengirim_laporan');
    }

    public function T_pembuat_laporans()
    {
        return $this->hasMany('App\Models\T_pembuat_laporan');
    }

    public function T_realisasi_pagu_rkkls()
    {
        return $this->hasMany('App\Models\T_realisasi_pagu_rkkl');
    }

    public function Ref_satuankerjas()
    {
        return $this->belongsTo('App\Models\Ref_satuankerja');
    }
}