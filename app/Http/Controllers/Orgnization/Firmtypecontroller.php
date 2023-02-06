<?php

namespace App\Http\Controllers\orgnization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// MODEL --- 
use App\Models\Orgnization\Orgnization;
use App\Models\Orgnization\Firm;



class Firmtypecontroller extends Controller
{
           
                 public function firmtype(){

                    $getorgdataa  = Orgnization::where('id',session('loginid'))->where('is_Deleted','N')->first();
                    $getorgfirm  = Firm::where('org_id',$getorgdataa->org_id)->where('is_Deleted','N')->get();
        
                    return view('Orgnization.firm-type')->with('getorgfirm',$getorgfirm);                             
                }

                public function firmaddsum(Request $request){

                    $getorgdataa  = Orgnization::where('id',session('loginid'))->where('is_Deleted','N')->first();
        
                    $saveorgdata = new Firm;
                
                    $saveorgdata->firm_type = $request->firm_type;
                    // showing current date and time of INDIA;
                    $saveorgdata->current_timee = date( 'd-m-Y h:i:s', time ());
                    $saveorgdata->org_id = $getorgdataa->org_id;
                    $saveorgdata->is_Deleted = 'N';
                    $saveorgdata->created_by = 'orgnization';
                    if($saveorgdata->save()){
                        return redirect()->back()->with('message',"Firm Successfully Uploded !");
                    }else{
                        return redirect()->back()->with('wrongmessage',"Something went wrong !");
                    }   
                } 
    
                public function orgfirmdelete($orgfirmdelete)
                {
                    $deleteorgdata = Firm::find($orgfirmdelete);
                    $deleteorgdata->delete();
                    return redirect()->back()->with('wrongmessage',"Firm Deleted Successfully !");
                }            
                
                  
}
