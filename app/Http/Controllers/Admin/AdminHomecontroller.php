<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// MODEL --- 
use App\Models\Orgnization\Orgnization;

class AdminHomecontroller extends Controller
{
            // admin dashboard 
            public function adminpage(){

                $getorgcount  = Orgnization::where('is_Deleted','N')->get();
    
                return view('admin.dashboard')->with('getorgcount',$getorgcount);
                      
            }
}
