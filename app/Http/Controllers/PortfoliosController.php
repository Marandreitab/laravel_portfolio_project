<?php
namespace App\Http\Controllers;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Session;
use Hash;
use Auth;
use App\Mail\Testmail;

use Illuminate\Support\Facades\Mail;
class PortfoliosController extends Controller
{
      public function homestudent(){
        return view('homestudent');
    }
/*
home statement
*/
    public function home()
    {
        $portinfo = Portfolio::find(1);
        return view('home')->with('portinfo',$portinfo);
    }
/*
login statement
*/
    public function loginUser(Request $request){
        $request->validate([
            'email1'=>'required|email',
            'password'=>'required|min:5|max:22',
           ]);
           
           $tabmat = Portfolio::where('emaillog','=',$request->email1)
           ->first();
           if($tabmat){
             if($request->password==$tabmat->password){
               $request->session()->put('loginId',$tabmat->id);
               return redirect('Editinfo');
             }else{
                return back()->with('fail','Password did not match.');
             }
           }else{
             return back()->with('fail','This email is not Verified.');
           }
      }
      /*
logout statement
*/

      public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/');
        }
    }
         /*
getEdit portfolio statement
*/
    public function editinfo(){
        $data = array();
        if(Session::has('loginId')){
         $data= Portfolio::where('id','=',\Session::get('loginId'))->first();
        }
             return view('Editinfo',compact('data'));
         }

        /*
update portfolio statement
*/        
     public function update(Request $request, $id){
           $request->validate([
            'images'=>'image|mimes:jpeg,png,gif|max:100000',
            'RESUME'=>'file|mimes:doc,docx,pdf,xls,xlsx|max:10240',
            'password'=>'min:5|max:22',

           ]);
            $data = Portfolio::find($id);
            $data->nick=$request->nick;
            $data->intro=$request->Introduction;
            $data->html1=$request->HTML;
            $data->css1=$request->CSS;
            $data->js1=$request->JavaScript;
            $data->boostrap=$request->Bootstrap;
            $data->PHP1=$request->PHP;
            $data->laravel1=$request->Laravel;
            $data->skill1=$request->skill1;
            $data->skill2=$request->skill2;
            $data->skill3=$request->skill3;
            $data->skill4=$request->skill4;
            $data->skill5=$request->skill5;
            $data->skill6=$request->skill6;
            $data->skill7=$request->skill7;
            $data->pinfo=$request->Personal;
            $data->achie=$request->Achievement;
            $data->work1=$request->experience1;
            $data->work2=$request->experience2;
            $data->work3=$request->experience3;
            $data->work4=$request->experience4;
            $data->email1=$request->email;
            $data->fb1=$request->Facebook;
            $data->phone1=$request->mobile;
            $data->emaillog=$request->emaillog;
            $data->password=$request->password;
            if($request->hasFile('images')){
                $destination='images/'.$data->image;
                  if(File::exists($destination)){
                  File::delete($destination);
                  }
                  $file=$request->file('images');
                  $extention = $file->getClientOriginalExtension();
                 $filename = time().'.'.$extention;
                 $file->move('images/',$filename);
                 $data->image = $filename;
              }
              if($request->hasFile('RESUME')){
                $destination='images/'.$data->docu;
                  if(File::exists($destination)){
                  File::delete($destination);
                  }
                  $file=$request->file('RESUME');
                  $extention = $file->getClientOriginalExtension();
                 $filename = time().'.'.$extention;
                 $file->move('images/',$filename);
                 $data->docu = $filename;
              }
                $data->update();
                if($data){
                  return back()->with('success','INFORMATION UPDATED');
                 }else{
                  return back()->with('fail','Something wrong');
                 }

          }
      
}


