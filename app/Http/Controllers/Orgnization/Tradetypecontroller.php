<?php

namespace App\Http\Controllers\Orgnization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// MODEL --- 
use App\Models\Orgnization\Orgnization;
use App\Models\Orgnization\Trade;

class Tradetypecontroller extends Controller
{
             // orgnization dashboard 
             public function tradetypeaddview(){

                $getorgdataa  = Orgnization::where('id',session('loginid'))->where('is_Deleted','N')->first();
                $getorgtrade  = Trade::where('org_id',$getorgdataa->org_id)->where('is_Deleted','N')->get();
    
                return view('Orgnization.add-trade')->with('getorgtrade',$getorgtrade);                             
            }

            public function tradeaddsum(Request $request){

                $getorgdataa  = Orgnization::where('id',session('loginid'))->where('is_Deleted','N')->first();
    
                $saveorgdata = new Trade;
            
                $saveorgdata->trade_type = $request->trade_type;
                // showing current date and time of INDIA;
                $saveorgdata->current_timee = date( 'd-m-Y h:i:s', time ());
                $saveorgdata->org_id = $getorgdataa->org_id;
                $saveorgdata->is_Deleted = 'N';
                if($saveorgdata->save()){
                    return redirect()->back()->with('message',"Trade Successfully Uploded !");
                }else{
                    return redirect()->back()->with('wrongmessage',"Something went wrong !");
                }   
            }

            public function orgtradedelete($orgtradedelete)
            {
                $deleteorgdata = Trade::find($orgtradedelete);
                $deleteorgdata->delete();
                return redirect()->back()->with('wrongmessage',"Trade Deleted Successfully !");
            }


}
