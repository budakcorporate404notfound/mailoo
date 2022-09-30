<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ref_satuankerja extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $table = "ref_satuankerja";
    protected $fillable = [
        'id',
        'kode_wilayah',
        'nama_wilayah',
        'nama_satuankerja',
        'sbu_uangharian_luarkota',
        'sbu_uangharian_dalamkota',
        'sbu_uangharian_diklat',
        'sbu_penginapan_eselon',
        'sbu_penginapan_golongan',
        'sbu_taksi_tempat_asal',
        'sbu_taksi_tempat_tujuan',
        'sbu_pesawat_bisnis',
        'sbu_pesawat_ekonomi',
        'locked'
    ];
}