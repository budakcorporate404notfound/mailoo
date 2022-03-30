<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
        'name',
        'detail',
        'nomor_surat_tugas',
        'tanggal_surat_tugas',
        'tempat_pelaksana',
        'id_kode_uraian_kegiatan',
        'nilai_pagu_realisasi',
        'tanggal_pelaksana_dari',
        'tanggal_pelaksana_sampai'
    ];
}