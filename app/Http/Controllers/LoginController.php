<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// MODEL --- 
use App\Models\Admin\Admin;
use App\Models\Orgnization\Orgnization;

class LoginController extends Controller
{
    public function loginquerypost(Request $request){

        $request->validate([
            'username' => 'required',
            'password' => 'required|min:5|max:12',
        ]);

        // getting user login role 
        $userInfo = Admin::where('username','=',$request->username)->where('password','=',$request->password)->first();
            if($userInfo==true){
                $ff = $userInfo->role;
            }
            else{
                $userInfo = Orgnization::where('username','=',$request->username)->where('password','=',$request->password)->first();
                    if($userInfo==true){
                    $ff = $userInfo->role;
                    }
                }

         if($userInfo){
            if($ff=='admin'){
                    $userInfo = Admin::where('username','=',$request->username)->first();
            
                    if(!$userInfo){
                        return redirect()->back()->with('wrongmessage','we do not recognise your username !');
                
                    }else{
                        if($request->password == $userInfo->password){
                            $request->session()->put('loginid', $userInfo->id);
                            $request->session()->put('userrole', $userInfo->role);
                         return redirect('/Admin/Dashboard');
                        }else{
                            return redirect()->back()->with('wrongmessage','Incorrect Password !');
                        }
                    }
                }


                elseif($ff=='orgnization'){
                   $userInfo = Orgnization::where('username','=',$request->username)->first();

            if(!$userInfo){
                return back()->with('wrongmessage','we do not recognise your username !');
                        }
        
             if($userInfo->status == '0'){
                return back()->with('wrongmessage','your profile not approved by admin !.');
                        }

                        if($userInfo->is_Deleted == 'Y'){
                            return back()->with('wrongmessage','Your Profile is Deleted !.');
                                    }

            else{
                if($request->password == $userInfo->password){
                    $request->session()->put('loginid', $userInfo->id);
                    $request->session()->put('userrole', $userInfo->role);
                 return redirect('/Orgnization/Dashboard');
                }else{
                    return back()->with('wrongmessage','Incorrect Password !');
                }
            } 
                }
         }

        else{
            return redirect()->back()->with('wrongmessage',"Yuor Login Detail are not Correct !");
        }        
    }


    public function logout(Request $request)
    {
         if(session('loginid')){
             session()->pull('loginid');
             session()->pull('userrole');
         }
         else
         {
             return redirect('/')->with('wrongmessage','Admin Logout Successfully !'); 
         }
          if(!session('loginid') && !session('userrole'))
          {
    
             return redirect('/')->with('wrongmessage','Admin Logout Successfully !'); 
          }
  
    }

}
