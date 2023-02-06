<?php

namespace App\Http\Controllers\Orgnization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// MODEL --- 
use App\Models\Orgnization\Orgnization;
use App\Models\Orgnization\Shop;

class Shopcontroller extends Controller
{
    public function shoptype(){

        $getorgdataa  = Orgnization::where('id',session('loginid'))->where('is_Deleted','N')->first();
        $getorgshop  = Shop::where('org_id',$getorgdataa->org_id)->where('is_Deleted','N')->get();
        return view('Orgnization.add-shoptype')->with('getorgshop',$getorgshop);                             
    }

    public function shopaddsum(Request $request){
        $getorgdataa  = Orgnization::where('id',session('loginid'))->where('is_Deleted','N')->first();
        $saveorgdata = new Shop;
        $saveorgdata->shop_type = $request->shop_type;
        $saveorgdata->charge_amount = $request->charge_amount;
        $saveorgdata->finencial_year = $request->finencial_year;
        // showing current date and time of INDIA;
        $saveorgdata->current_timee = date( 'd-m-Y h:i:s', time ());
        $saveorgdata->org_id = $getorgdataa->org_id;
        $saveorgdata->is_Deleted = 'N';
        $saveorgdata->created_by = 'orgnization';
        if($saveorgdata->save()){
            return redirect()->back()->with('message',"Shop Type Successfully Uploded !");
        }else{
            return redirect()->back()->with('wrongmessage',"Something went wrong !");
        }   
    }
    
    public function orgshopdelete($orgshopdelete)
    {
        $deleteorgdata = Shop::find($orgshopdelete);
        $deleteorgdata->delete();
        return redirect()->back()->with('wrongmessage',"Shop Type Deleted Successfully !");
    }     
}
