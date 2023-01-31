<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_menu_sub extends Model
{
    use HasFactory;

    protected $table = "ref_menu_sub";
    protected $fillable = [
        'id',
        'ref_menu_id',
        'slug',
        'controller'
    ];

    public function ref_menu()
    {
        return $this->belongsTo('App\Models\ref_menu');
    }
}