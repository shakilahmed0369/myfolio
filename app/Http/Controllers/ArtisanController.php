<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ArtisanController extends Controller
{
    public function command(Request $request)
    {
        // Command for cache clear and symlink storage
        if($request->command === 'storage:link'){
            Artisan::call('storage:link');
            dd('artisan command '.$request->command.' successful');
        }elseif($request->command === 'config:cache'){
            dd('artisan command '.$request->command.' successful');
        }else{
            dd('There is no artisan command like '.$request->command);
        }

    }
}
