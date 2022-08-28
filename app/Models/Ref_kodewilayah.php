<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ref_kodewilayah extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $table = "ref_kodewilayah";
    protected $fillable = [
        'id',
        'kode_wilayah',
        'nama_wilayah'
    ];
}