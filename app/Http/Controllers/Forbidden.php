<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Forbidden extends Controller
{
    public function index()
    {
        return view('forbidden');
    }
}