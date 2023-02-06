<?php

namespace App\Http\Controllers\Orgnization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Orgnization\Orgnization;

class Applicationcontroller extends Controller
{
    public function orgprofile(){

        $getorgdata  = Orgnization::where('id',session('loginid'))->where('is_Deleted','N')->get();
        $getorgdataa  = Orgnization::where('id',session('loginid'))->where('is_Deleted','N')->first();
        return view('Orgnization.orgnization-profile')->with('getorgdata',$getorgdata)
                                                    ->with('orgname',$getorgdataa->org_name);
    }
}
