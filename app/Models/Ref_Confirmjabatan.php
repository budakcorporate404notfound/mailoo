<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ref_Confirmjabatan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $table = "ref_confirmjabatan";
    protected $fillable = [
        'id',
        'name',
    ];
}