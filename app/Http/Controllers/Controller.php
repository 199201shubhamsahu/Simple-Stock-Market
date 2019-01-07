<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function displayUserStocks()
    {
    	$userstocks['userstocks'] = DB::table('usersreg.users')->get();
    	
    		return view('profile',$userstocks);
    }

    public function displayAllStocks()
    {
        $allstocks['allstocks'] = DB::table('usersreg.stocks')->get();
        
            return view('buysell',$allstocks);
    }

   


}
