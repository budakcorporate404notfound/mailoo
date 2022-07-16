<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class User_Controller extends Controller
{
    //
    public function index(Request $request)
    {
        $users = User::select("*")
            ->whereNotNull('last_seen')
            ->orderBy('last_seen', 'DESC')
            ->paginate(10);

        return view('users', compact('users'));
    }
}