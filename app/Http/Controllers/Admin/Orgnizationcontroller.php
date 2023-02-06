<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Orgnization\Orgnization;

class Orgnizationcontroller extends Controller
{
    public function orgadd(){
        return view('admin.orgnization-add');
    }

    public function orgadddata(Request $request){

        $saveorgdata = new Orgnization;

        $file = $request->org_logo;
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('assets/orglogo/', $filename);
        $saveorgdata->org_logo = $filename;

        $saveorgdata->org_name = $request->org_name;
        $saveorgdata->address = $request->org_address;
        $saveorgdata->mobile_number = $request->mobile_number;
        $saveorgdata->email = $request->email;
        $saveorgdata->username = $request->username;
        $saveorgdata->password = $request->password;
        // showing current date and time of INDIA;
        $saveorgdata->current_timee = date( 'd-m-Y h:i:s', time ());

        $saveorgdata->org_id = random_int(99999,999999);
        $saveorgdata->status = '0';
        $saveorgdata->role = 'orgnization';
        $saveorgdata->is_Deleted = 'N';
        if($saveorgdata->save()){
            return redirect()->back()->with('message',"Orgnization Details Successfully Uploded !");
        }else{
            return redirect()->back()->with('wrongmessage',"Something went wrong !");
        }   
    }

    public function orglist(){
        $getorgdata  = Orgnization::where('is_Deleted','N')->get();
        return view('admin.orgnization-list')->with('getorgdata',$getorgdata);
    }

    public function orgapproved($orgapproved)
    {
        $saveorgdata = Orgnization::find($orgapproved);
        $saveorgdata->status = '1';
        $saveorgdata->save();
        return redirect('/Admin/Orgnization-List')->with('message',"Orgnization Approved Successfully !");
    }

    public function orgnotapproved($orgnotapproved)
    {
        $saveorgdata = Orgnization::find($orgnotapproved);
        $saveorgdata->status = '0';
        $saveorgdata->save();
        return redirect('/Admin/Orgnization-List')->with('wrongmessage',"Orgnization Not Approved !");
    }

    public function ddorgdata($ddorgdata)
    {
        $saveorgdata = Orgnization::find($ddorgdata);
        if($saveorgdata->status=='1')
        {
            return redirect('/Admin/Orgnization-List')->with('wrongmessageeeshoew',"Orgnization Dactivated First !");  
        }else{
            $saveorgdata->is_Deleted = 'Y';
            $saveorgdata->save();
            return redirect('/Admin/Orgnization-List')->with('wrongmessageee',"Orgnization Deleted Successfully !");
        }
      
    }


    public function trashorglist(){
        $getorgdata  = Orgnization::where('is_Deleted','Y')->get();
        return view('admin.trash-orgnization')->with('getorgdata',$getorgdata);
    }


    public function orgrestore($orgrestore)
    {
        $saveorgdata = Orgnization::find($orgrestore);
        $saveorgdata->is_Deleted = 'N';
        $saveorgdata->save();
        return redirect('/Admin/Trash-Orgnization')->with('message',"Orgnization Restored Successfully !");
    }

    public function perddorgdata($perddorgdata)
    {
        $saveorgdata = Orgnization::find($perddorgdata);
        $saveorgdata->delete();
        return redirect('/Admin/Trash-Orgnization')->with('wrongmessage',"Orgnization Deleted Successfully !");
    }
    

}
