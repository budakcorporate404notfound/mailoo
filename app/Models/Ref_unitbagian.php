<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ref_unitbagian extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $table = "ref_unitbagian";
    protected $fillable = [
        'id',
        'nama_unitbagian',
    ];
}