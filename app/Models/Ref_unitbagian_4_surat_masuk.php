<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_unitbagian_4_surat_masuk extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $table = "ref_unitbagian_4_surat_masuk";
    protected $fillable = [
        'id',
        'name',
    ];
}