<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api_Model extends Model
{
    protected $table = "api_tmp";
    protected $fillable = [
        'id',
        'api_id',
        'node_id'
    ];
}