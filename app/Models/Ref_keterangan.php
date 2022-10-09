<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ref_keterangan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $table = "ref_keterangan";
    protected $fillable = [
        'id',
        'keterangan',
        'ref_unitbagian_id',
        'locked',
        'user_penginput_data',
        'tahun_anggaran'
    ];
}