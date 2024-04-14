<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>EDIT PORTFOLIO </title>
  <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="{{asset('bootstrap/css/infoedit.css')}}" rel="stylesheet">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
<div class="container">
        <div class="title">
            <p>EDIT PORTFOLIO</p>
        </div>
       
        <form enctype='multipart/form-data' action="{{url('update-student/'.$data->id)}}" method="post">
        @csrf
        @method('PUT')
        @if(Session::has('success'))
        <div class="alert alert-sucess">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}} </div>
        @endif
        <span class="text-danger">@error('images'){{$message}} @enderror</span>
        <span class="text-danger">@error('RESUME'){{$message}} @enderror</span>
        <span class="text-danger">@error('password'){{$message}} @enderror</span>

            <div class="user_details">
            <div class="input_box">
                <img src="{{asset('images/'.$data->image)}}"alt="user picture" id="output"/>
                     <input class="fileimg" type="file" name="images" onchange="loadFile(event)">
                </div>
               
                <div class="input_box">
                    <label for="message">Introduction</label>
                     <textarea id="message" name="Introduction"  required placeholder="Enter your Introduction">{{$data->intro}}</textarea>
                </div>
                <div class="input_box">
                    <label for="message">HTML</label>
                     <textarea id="message" name="HTML"  required placeholder="Enter your HTML means">{{$data->html1}}</textarea>
               
                </div>
                <div class="input_box">
                    <label for="message">CSS</label>
                     <textarea id="message" name="CSS" required placeholder="Enter your CSS means">{{$data->css1}}</textarea>
                </div>
                <div class="input_box">
                    <label for="message">JavaScript</label>
                     <textarea id="message" name="JavaScript"  required placeholder="Enter your JavaScript means">{{$data->js1}}</textarea>
                </div>
                <div class="input_box">
                    <label for="message">Bootstrap</label>
                     <textarea id="message" name="Bootstrap" required placeholder="Enter your Bootstrap means">{{$data->boostrap}}</textarea>
                </div>
                <div class="input_box">
                    <label for="message">PHP</label>
                     <textarea id="message" name="PHP" required placeholder="Enter your PHP means">{{$data->PHP1}}</textarea>
                </div>
                <div class="input_box">
                    <label for="message">Laravel</label>
                     <textarea id="message" name="Laravel" required placeholder="Enter your Laravel means">{{$data->laravel1}}</textarea>
                </div>
                <div class="input_box">
                    <label for="skill1">skill 1</label>
                    <input type="text" name="skill1" id="skill1" placeholder="Enter your skills" required value="{{$data->skill1}}">
                </div>
                <div class="input_box">
                    <label for="skill2">skill 2</label>
                    <input type="text" name="skill2" id="skill2" placeholder="Enter your skills" required value="{{$data->skill2}}">
                </div>
                <div class="input_box">
                    <label for="skill3">skill 3</label>
                    <input type="text" name="skill3" id="skill3" placeholder="Enter your skills" required value="{{$data->skill3}}">
                </div>
                <div class="input_box">
                    <label for="skill4">skill 4 </label>
                    <input type="text" name="skill4" id="skill4" placeholder="Enter your skills" required value="{{$data->skill4}}">

                </div>
                <div class="input_box">
                    <label for="skill5">skill 5</label>
                    <input type="text" name="skill5" id="skill5" placeholder="Enter your skills" required value="{{$data->skill5}}">

                </div>
                <div class="input_box">
                    <label for="skill6">skill 6</label>
                    <input type="text" name="skill6" id="skill6" placeholder="Enter your skills" required value="{{$data->skill6}}">

                </div>
                <div class="input_box">
                    <label for="skill7">skill 7</label>
                    <input type="text" name="skill7" id="skill7" placeholder="Enter your skills" required value="{{$data->skill7}}">

                </div>
                <div class="input_box">
                    <label for="message">Personal information</label>
                     <textarea id="message" name="Personal" required placeholder="Enter your Personal information">{{$data->pinfo}}</textarea>
                </div>
                <div class="input_box">
                    <label for="message">Achievement</label>
                     <textarea id="message" name="Achievement" required placeholder="Enter your Achievements statement">{{$data->achie}}</textarea>
                </div>
                <div class="input_box">
                    <label for="message">Work experience 1</label>
                     <textarea id="message" name="experience1" required placeholder="Enter your experience 1">{{$data->work1}}</textarea>
                </div>
                <div class="input_box">
                    <label for="message">Work experience 2</label>
                     <textarea id="message" name="experience2" required placeholder="Enter your experience 2">{{$data->work2}}</textarea>
                </div>
                <div class="input_box">
                    <label for="message">Work experience 3</label>
                     <textarea id="message" name="experience3" required placeholder="Enter your experience 3">{{$data->work3}}</textarea>
                </div>
                <div class="input_box">
                    <label for="message">Work experience 4</label>
                     <textarea id="message" name="experience4" required placeholder="Enter your experience 4">{{$data->work4}}</textarea>
                </div>
                <div class="input_box">
                    <label for="skill3">Email</label>
                    <input type="Email" name="email" id="Email" placeholder="Enter your Email" required value="{{$data->email1}}">
                </div>
                <div class="input_box">
                    <label for="Facebook">Facebook</label>
                    <input type="text" name="Facebook" id="Facebook" placeholder="Enter your Facebook" required value="{{$data->fb1}}">
                </div>
                <div class="input_box">
                    <label for="Mobile">Mobile number</label>
                    <input type="text" name="mobile" id="Mobile" placeholder="Enter your Mobile number" required value="{{$data->phone1}}">
                </div>
                <div class="input_box">
                    <label for="nick">Nick name</label>
                    <input name="nick"type="text" id="nick" placeholder="Enter your Nick name" value="{{$data->nick}}" required>
                </div>
                <div class="input_box">
                     <label for="RESUME">RESUME {{$data->docu}}</label>
                     <input class="fileimg" type="file" name="RESUME" onchange="loadFile(event)">
                </div>
                <div class="input_box">
                    <label for="LOG">EMAIL LOG </label>
                    <input type="email" name="emaillog" id="emaillog" placeholder="Enter your skills" required value="{{$data->emaillog}}">

                </div>
                <div class="input_box">
                    <label for="password">PASSWORD "min:5|max:22"</label>
                    <input type="text" name="password" id="password" placeholder="Enter your skills" required value="{{$data->password}}">

                </div>
            </div>
            <div class="buttons">
                <a href="{{ url('logout/')}}" type="button" class="btnlogClose">LOGOUT</a>
                <button type="submit" class="btnlog btn-primary" value="save" >Update</button>
              </div>
        </form>
    </div>
</body>
</html>