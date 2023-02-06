<?php

namespace App\Http\Controllers\Orgnization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// MODEL --- 
use App\Models\Orgnization\Orgnization;
use App\Models\Orgnization\Ward;

class Wardcontroller extends Controller
{
         // orgnization dashboard 
         public function addward(){

            $getorgdataa  = Orgnization::where('id',session('loginid'))->where('is_Deleted','N')->first();
            $getorgward  = Ward::where('org_id',$getorgdataa->org_id)->where('is_Deleted','N')->get();

            return view('Orgnization.add-ward')->with('getorgdataa',$getorgdataa)
                                                ->with('getorgward',$getorgward)
                                                ->with('getorgaddress',$getorgdataa->address);
        }


        public function wardaddsum(Request $request){

            $getorgdataa  = Orgnization::where('id',session('loginid'))->where('is_Deleted','N')->first();

            $saveorgdata = new Ward;
            $saveorgdata->city = $request->city;
            $saveorgdata->ward_name = $request->ward_name;
            // showing current date and time of INDIA;
            $saveorgdata->current_timee = date( 'd-m-Y h:i:s', time ());
            $saveorgdata->org_id = $getorgdataa->org_id;
            $saveorgdata->is_Deleted = 'N';
            if($saveorgdata->save()){
                return redirect()->back()->with('message',"Ward Successfully Uploded !");
            }else{
                return redirect()->back()->with('wrongmessage',"Something went wrong !");
            }   
        }

        public function orgwarddelete($orgwarddelete)
        {
            $deleteorgdata = Ward::find($orgwarddelete);
            $deleteorgdata->delete();
            return redirect()->back()->with('wrongmessage',"Ward Deleted Successfully !");
        }
}
