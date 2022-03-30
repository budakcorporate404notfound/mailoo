<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_mainsurat extends Model
{
    use HasFactory;


    protected $table = "t_mainsurat";
    protected $fillable = [
        'asal_surat',
        'nomor_surat',
        'tanggal_surat',
        'perihal_surat',
        'pejabat_pengirim_surat',
        'surat_ditujukan_kepada',
        'pdf_surat'
    ];
}