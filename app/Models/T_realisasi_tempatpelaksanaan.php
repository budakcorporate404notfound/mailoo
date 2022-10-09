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
        'eselon',
        'jabatan',
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
        return $this->hasMany('App\Models\T_realisasi_pagu_rkkl', 't_realisasi_tempatpelaksanaan_id', 'id');
    }

    public function Ref_satuankerjas()
    {
        return $this->belongsTo('App\Models\Ref_satuankerja');
    }

    public function T_realisasi_rkkl()
    {
        return $this->belongsTo('App\Models\T_realisasi_rkkl', 't_realisasi_rkkl_id', 'id');
    }
}