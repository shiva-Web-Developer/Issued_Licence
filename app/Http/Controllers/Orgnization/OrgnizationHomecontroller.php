<?php

namespace App\Http\Controllers\Orgnization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// MODEL --- 
// use App\Models\Admin\Admin;
use App\Models\Orgnization\Orgnization;

class OrgnizationHomecontroller extends Controller
{
          // orgnization dashboard 
          public function orgpage(){

            $getorgdata  = Orgnization::where('id',session('loginid'))->where('is_Deleted','N')->get();
            $getorgdataa  = Orgnization::where('id',session('loginid'))->where('is_Deleted','N')->first();

            return view('Orgnization.dashboard')->with('getorgdata',$getorgdata)
                                                ->with('orgname',$getorgdataa->org_name);
        }

        public function orgprofile(){

          $getorgdata  = Orgnization::where('id',session('loginid'))->where('is_Deleted','N')->get();
          $getorgdataa  = Orgnization::where('id',session('loginid'))->where('is_Deleted','N')->first();
          return view('Orgnization.orgnization-profile')->with('getorgdata',$getorgdata)
                                                      ->with('orgname',$getorgdataa->org_name);
      }

      function orgdataedit(Request $request)
      {
          $saveorgdata = Orgnization::where('id',$request->id)->where('is_Deleted','N')->first();
          $saveorgdata->org_name = $request->org_name;
          $saveorgdata->mobile_number = $request->mobile_number;
          $saveorgdata->email = $request->email;
          $saveorgdata->password = $request->password;
          if($saveorgdata->save())
          return redirect('/Orgnization/Profile')->with('message',"Profile Updated Successfully !");
      }


      
}
