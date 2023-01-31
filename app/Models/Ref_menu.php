<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_menu extends Model
{
    use HasFactory;

    protected $table = "ref_menu";
    protected $fillable = [
        'id',
        'slug',
        'controller'
    ];

    public function ref_menu_subs()
    {
        return $this->hasMany('App\Models\Ref_menu_sub');
    }
}