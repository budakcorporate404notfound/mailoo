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
        'nomor_surat_tugas',
        'tanggal_surat_tugas',
        'tempat_pelaksana',
        'id_kode_uraian_kegiatan',
        'nilai_pagu_realisasi',
        'tanggal_pelaksana_dari',
        'tanggal_pelaksana_sampai'
    ];

    public function T_realisasi_tempatpelaksanaans()
    {
        return $this->hasMany('App\Models\T_realisasi_tempatpelaksanaan');
    }

    public function T_cobas()
    {
        return $this->hasMany('App\Models\T_coba');
    }

    public function T_pembuat_laporans()
    {
        return $this->hasMany('App\Models\T_pembuat_laporan');
    }

    public function Ref_satuankerjas()
    {
        return $this->belongsTo('App\Models\Ref_satuankerja');
    }
}