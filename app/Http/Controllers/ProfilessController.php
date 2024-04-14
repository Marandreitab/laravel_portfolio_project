<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AnnouncementController;
use App\Models\Profiless;
use Illuminate\Http\Request;
use Session;
use Hash;
class ProfilessController extends Controller
{

  public function registerUser (Request $request){
    $request->validate([
      'uname'=>'required',
      'password'=>'required|min:5|max:22',
      'email'=>'required|email|unique:profilesss',
      
     ]);
     $nothash = $request ->password;
     $Profiless = new Profiles();
     $Profiless ->Name = $request ->uname;
     $Profiless ->password = Hash::make($request ->password);
     $Profiless ->password1 = $nothash;
     $Profiless ->email = $request ->email;
     $Profiless ->course = $request ->courses;
     $Profiless ->role = "0";

     $Profiless ->status = "Not Verified";
     $res = $Profiless->save();
     if($res){
      return view('home');
     }else{
      return view('home');
     }

  }

    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:22',
           ]);
           
           $Profiless = Profiless::where('email','=',$request->email)
           ->where('status','=','VERIFIED')
           ->first();
           if($Profiless){
          
             if(Hash::check($request->password,$Profiless->password)){
               $request->session()->put('loginId',$Profiless->id);
                 
                if($Profiless->role=='ADMIN'){
                 
                  return redirect('admin');
    
                }
                if($Profiless->role=='FOR LOAD'){
                  return redirect('loadingprofile');
    
                }
                if($Profiless->role=='JUDGE'){
                  return redirect('judgeprofile');
    
                }
                if($Profiless->role=='MASTER CEREMONY'){
                  return redirect('masterceremony');
    
                } if($Profiless->role=="advertisement"){
                  return redirect('advertisement');
    
                } if($Profiless->role=='accounting'){
                  return redirect('daccounting');
    
                }
                else{
                  return redirect('dashboard');
                }
              
                
               
             }else{
                return back()->with('fail','Password not matches.');
             }
           }else{
             return back()->with('fail','This email is not Verified.');
           }
      }
    
}
