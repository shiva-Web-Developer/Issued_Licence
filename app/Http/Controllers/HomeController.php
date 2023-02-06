<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// MODEL --- 
use App\Models\Orgnization\Trade;
use App\Models\Orgnization\Ward;
use App\Models\Orgnization\Firm;
use App\Models\Orgnization\Shop;
use App\Models\Application;
use App\Models\Payment;




class HomeController extends Controller
{

    // Login Page View
    public function adminlogin(){
        return view('admin-login');
    }

        // Login Page View
        public function applicationformview(){
            return view('application-form');
        }

        
        // FETCH ONLOAD SHOP YEAR DATA NAME 
        public function getthedatgaof(Request $request)
        {   
            $data['getdataggg'] = Shop::where('org_id', $request->getunicorgid)
                                        ->where('finencial_year',$request->getshopdatatype)
                                        ->where('is_Deleted', 'N')
                                        ->get();
            return response()->json($data);
        }

             // FETCH
             public function gewtdatataype(Request $request)
             {   
                 $data['getdataamount'] = Shop::where('org_id', $request->getunicorgid)
                                            ->where('finencial_year',$request->getshopdatatype)
                                             ->where('shop_type',$request->shoptypee)
                                             ->where('is_Deleted', 'N')
                                             ->first();
                 return response()->json($data);
             }


        // FETCH ONLOAD TRADE NAME 
        public function gettradedata(Request $request)
        {   
            $data['feththesub'] = Trade::where('org_id', $request->getunicorgid)->where('is_Deleted', 'N')->get();
            return response()->json($data);
        }
 
        
        // FETCH ONLOAD WARD NAME 
        public function getwarddata(Request $request)
        {   
            $data['fetcthwardname'] = Ward::where('org_id', $request->getunicorgid)->where('is_Deleted', 'N')->get();
            return response()->json($data);
        }


               // FETCH ONLOAD FIRM NAME 
               public function getfirmdata(Request $request)
               {   
                   $data['fetcthfirmname'] = Firm::where('org_id', $request->getunicorgid)->where('is_Deleted', 'N')->get();
                   return response()->json($data);
               }

               
        
         // Login Page View
         public function llldata(){
            return view('first-page');
        }
        
        function subbbdata(Request $request)
      {

        // echo $request->trade_type;
        // die();

          $saveorgdata = new Application;
          $saveorgdata->org_id = $request->org_id;
          $saveorgdata->appi_id = rand('654763','776764');
          $saveorgdata->legecy_type = $request->legecy_type;
          $saveorgdata->trade_type = $request->trade_type;
          $saveorgdata->ward = $request->ward;
          $saveorgdata->applicant_name_f = $request->applicant_name_f;
          $saveorgdata->applicant_name_l = $request->applicant_name_l;
          $saveorgdata->fh_f_name = $request->fh_f_name;
          $saveorgdata->fh_l_name = $request->fh_l_name;
          $saveorgdata->city = $request->city;
          $saveorgdata->zone = $request->zone;
          $saveorgdata->mobile_number = $request->mobile_number;
          $saveorgdata->email = $request->email;
          $saveorgdata->property_id = $request->property_id;
          $saveorgdata->application_date = $request->application_date;
          $saveorgdata->firm_name = $request->firm_name;
          $saveorgdata->firm_type = $request->firm_type;
          $saveorgdata->plot_number = $request->plot_number;
          $saveorgdata->road = $request->road;
          $saveorgdata->pincode = $request->pincode;
          $saveorgdata->district = $request->district;
          $saveorgdata->countary = $request->countary;
          $saveorgdata->join_partner = $request->join_partner;
          $saveorgdata->shop_type = $request->shop_type;

        // upload swami image
        $file = $request->swami_img;
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('assets/file/swami-image/', $filename);
        $saveorgdata->swami_img = $filename;

        // upload officer image
        $filee = $request->officer_img;
        $extenstionn = $filee->getClientOriginalExtension();
        $filenamee = time().'.'.$extenstionn;
        $filee->move('assets/file/officer-image/', $filenamee);
        $saveorgdata->officer_img = $filenamee;

        // upload property image
        $fileee = $request->property_img;
        $extenstionnn = $fileee->getClientOriginalExtension();
        $filenameee = time().'.'.$extenstionnn;
        $fileee->move('assets/file/property-slip/', $filenameee);
        $saveorgdata->property_img = $filenameee;

        // upload tax_img image
        $fileeee = $request->tax_img;
        $extenstionnnn = $fileeee->getClientOriginalExtension();
        $filenameeee = time().'.'.$extenstionnnn;
        $fileeee->move('assets/file/property-tax/', $filenameeee);
        $saveorgdata->tax_img = $filenameeee;

        // upload id_proof_img image
        $fileeeee = $request->id_proof_img;
        $extenstionnnnn = $fileeeee->getClientOriginalExtension();
        $filenameeeee = time().'.'.$extenstionnnnn;
        $fileeeee->move('assets/file/idproof/', $filenameeeee);
        $saveorgdata->id_proof_img = $filenameeeee;

        // upload affidevit_img image
        $fileeeeee = $request->affidevit_img;
        $extenstionnnnnn = $fileeeeee->getClientOriginalExtension();
        $filenameeeeee = time().'.'.$extenstionnnnnn;
        $fileeeeee->move('assets/file/affidevet/', $filenameeeeee);
        $saveorgdata->affidevit_img = $filenameeeeee;

          $saveorgdata->status = 'pending';
          $saveorgdata->role = 'applicant';
          $saveorgdata->current_timee = date( 'd-m-Y h:i:s', time ());
          $saveorgdata->is_Deleted = 'N';
          if($saveorgdata->save())

          return redirect()->route('llldata')->with('message',"Your Application Registration Number: $saveorgdata->appi_id " );

      }

      public function checknekay(Request $request){

        $data['states'] = Application::
                where('appi_id',$request->regnum)
                ->orWhere('firm_name',$request->regnum)
                ->get();
        return response()->json($data);
    }


    public function getdataprice(Request $request){

        $data['states'] = Shop::
                where('shop_type',$request->text1)
                ->Where('finencial_year',$request->finencial_year)
                ->get();
        return response()->json($data);
    }

    


    public function paymentpost(Request $request){


        $getdataoffirst = Payment::where('appi_id',$request->appi_id)->where('finencial_year',$request->finencial_year)->first();
        if(!$getdataoffirst){
        $saveorgdata = new Payment;
        $saveorgdata->appi_id = $request->appi_id;
        $saveorgdata->payment_id = rand('298437','465349');
        $saveorgdata->org_id = $request->orgnization_id;
        $saveorgdata->finencial_year = $request->finencial_year;
        $saveorgdata->payment = $request->payment;
        // showing current date and time of INDIA;
        $saveorgdata->current_timee = date( 'd-m-Y h:i:s', time ());
        $saveorgdata->is_Deleted = 'N';
        $saveorgdata->created_by = 'applicant';
        if($saveorgdata->save()){
            $request->session()->put('payment_id', $saveorgdata->payment_id);
            return redirect()->route('onovicedata')->with('message',"Firm Successfully Uploded !");
           
        }else{
            return redirect()->back()->with('wrongmessage',"Something went wrong !");
        }   
    }else{
        return redirect()->route('llldata')->with('message',"Already Payment Exits !" );
    }

    } 


    

    public function onovicedata(){

        // $getreiptdata = Payment::where('payment_id', session('payment_id'))->first();

        $getreiptdata = DB::table('payments')->
                    leftjoin('applications','payments.appi_id','=','applications.appi_id')
                    ->where('payments.payment_id', session('payment_id'))
                    ->select('payments.*', 'applications.applicant_name_f','applications.firm_name',
                    'applications.city','applications.plot_number','applications.district','applications.email',
                    'applications.mobile_number','applications.applicant_name_l','applications.firm_name')
                    ->get();

              

        return view('inovice')->with('getreiptdata',$getreiptdata)
                             ;
    }
    

}
