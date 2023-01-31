<?php

namespace App\Providers;

use App\Models\Ref_menu;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;


class ComposerServiceProvider  extends ServiceProvider
{

    public function boot()
    {
        return View::composer('layouts.app', function ($view) {
            // $val = 'bar';

            $val = Ref_menu::with('ref_menu_subs')
                ->get();
            $view->with('menu', $val);
        });
    }


    public function register()
    {
        //
    }
}