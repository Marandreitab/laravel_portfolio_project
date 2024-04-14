<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Session;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Mail;
use App\Mail\Testmail;

class MailController extends Controller
{
    public function sendEmail(Request $request){
        $request->validate([
            'email1'=>'required',
           ]);
        $data=Portfolio::where('email1','=',$request->email1)->first();
           if($data){
            $details =[
                'title' =>'Mail from MAR ANDREI PORTFOLIO',
                'body' =>'THE PASSWORD is'.$data->password.
                ' ',
            ];
            Mail::to($data->email1)->send(new Testmail($details));
            return back()->with('success','PASSWORD SENT CHECK YOUR EMAIL');
    
           }else{
            return back()->with('fail','SOMETHING WENT WRONG');
           }
     
    }
}
