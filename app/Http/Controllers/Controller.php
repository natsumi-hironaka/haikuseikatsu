<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function counts($user) {
        $count_haikus = $user->haikus()->count();
        $count_likings = $user->likings()->count();
       
        return [
            'count_haikus' => $count_haikus,
            'count_likings' => $count_likings,
            
        ];
    }
    
}
