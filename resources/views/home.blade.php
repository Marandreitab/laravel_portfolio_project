<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>MAR ANDREI TABLATIN PORTFOLIO</title>
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link href="{{asset('bootstrap/css/astyle.css')}}" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

<!--fav-icon-->

    <title  >MAR ANDREI TABLATIN PORTFOLIO</title>
</head>

<body>
<section id="header">
    <div class="header container">
 
        <div class="nav-bar"> 
            <div class="brand"> 
            </div>
           <div class="nav-list">
            <div class="hamburger"><div class="bar"></div></div>
             <ul>
                <li><a href="#HOME" data-after="HOME">HOME</a></li>
                <li><a href="#SKILLS" data-after="SKILLS">MY SKILLS</a></li>
                <li><a href="#about" data-after="ABOUT">ABOUT ME</a></li>
                <li><a href="#contact" data-after="CONTACTS">CONTACTS</a></li>
                <li><a class="active" data-bs-toggle="modal" data-bs-target="#exampleedit" style="cursor: pointer;"> EDIT</a></li>

             </ul>
           </div>
        </div>
    </div>


</section>
@csrf
      @if(Session::has('success'))
        <div class="alert alert-sucess">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
    <header id="HOME" class="container">
        <div class="content">
            <h4>Welcome to my online portfolio</h4>
            <H1>Hi, I'm <span>{{$portinfo->nick}}</span>.</H1>
            <p>
            {{$portinfo->intro}}
            </p>
            <a href="/images/{{$portinfo->docu}}" download> <button class="icon-btn"><i class="fa fa-download"></i>resume</button></a>


        </div>
        <div class="image">
        <img src="{{asset('images/'.$portinfo->image)}}" alt="user image" >
        </div>
    </header>
  <!-- Modal html -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background:orange; color:white; font-style:bold;">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
             <img width="48" height="48" src="https://img.icons8.com/color/48/html-5--v1.png" alt="html-5--v1"/>
                   HTML</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h4> {{$portinfo->html1}}</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
  <!-- Modal html end-->
  <!-- Modal css start-->

<div class="modal fade" id="exampleModalcss" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background:#1e40af; color:white; font-style:bold;">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
             <img width="48" height="48" src="https://img.icons8.com/stickers/100/css3.png" alt="css3"/>
        CSS</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
      <h4 > {{$portinfo->css1}}</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
  <!-- Modal css end-->
  <!-- Modal JS start-->
  <div class="modal fade" id="exampleModaljs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background: #a1970c; color:white; font-style:bold;">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
             <img width="48" height="58"  src="https://img.icons8.com/color/100/javascript--v1.png" alt="javascript--v1"/>
        JavaScript</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
      <h4 >  {{$portinfo->js1}}  </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
 <!-- Modal js end-->
  <!-- Modal boot start-->
  <div class="modal fade" id="exampleModalboot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background:#5d138f; color:white; font-style:bold;">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
             <img width="48" height="48" src="https://img.icons8.com/color/100/bootstrap--v1.png" alt="bootstrap--v1"/>
        Bootstrap</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
      <h4 > {{$portinfo->boostrap}}  </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
 <!-- Modal boot end-->
  <!-- Modal php start-->
  <div class="modal fade" id="exampleModalphp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background:#5d5dec; color:white; font-style:bold;">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
         <img  width="90" height="90" src="https://img.icons8.com/color/96/php.png" alt="php"/>
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
      <h4 > {{$portinfo->PHP1}} </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal php end-->
  <!-- Modal laravel start-->
  <div class="modal fade" id="exampleModallara" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background: linear-gradient(#00ccff, #d500f9); color:white; font-style:bold;">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
            <img width="64" height="64" src="https://img.icons8.com/nolan/64/laravel.png" alt="laravel"/>
        LARAVEL</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
      <h4 > {{$portinfo->laravel1}}</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal laravel end-->
  <!-- Modal editloging start-->
  <div class="modal fade" id="exampleedit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background:  rgb(65, 55, 71); color:white; font-style:bold;">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
        LOG IN FIRST</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
      <form action="{{route('login-user')}}" class="sign-in-form" method="post">
      @csrf
      @if(Session::has('success'))
        <div class="alert alert-sucess">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
      
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email1"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text">Enter email and password </div>
        <div class="mb-3">
        <label for="exampleInputPassword" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="togglePassword">
                
        <label for="exampleCheck1" >Check me out</label><br><br>
        
       <a class="active" data-bs-toggle="modal" data-bs-target="#forgotpass">Forgot password</a>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btnlogClose btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btnlog btn-secondary" value="Log In">

        
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal edit end-->
<!-- Modal password starts-->
<div class="modal fade" id="forgotpass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background:  rgb(65, 55, 71); color:white; font-style:bold;">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
        Click "SEND" </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
      <form action="{{route('send-email')}}"  class="sign-in-form" method="get">
      @csrf
        <label for="exampleInputEmail1" class="form-label">We will send the password to MAR ANDREI email</label>
        <input value="{{$portinfo->email1}}"name="email1"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" hidden>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btnlogClose btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btnlog btn-secondary" value="SEND">

        
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal forgot end-->

    <section class="container" id="SKILLS">
        <h2 class="header">My Skills</h2>
        <div class="skills">
            <div class="card" >
                <span><i class="ri-money-dollar-box-line"></i></span>
                <h4>FRONT END</h4>
                <div class="logo">
                   <!-- Modal HTML-->
                   <a class="active" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer;"> 
                        <img width="48" height="48" src="https://img.icons8.com/color/48/html-5--v1.png" alt="html-5--v1"/>
                        HTML 
                    </a></div>
                   <div class="logo" style="display:center;">
                    <!-- Modal css-->
                   <a class="active" data-bs-toggle="modal" data-bs-target="#exampleModalcss" style="cursor: pointer;"> 
                       <img width="100" height="100" src="https://img.icons8.com/stickers/100/css3.png" alt="css3"/>
                   CSS </a></div>
                    <div class="logo" style="display:center;">
                     <!-- Modal js-->
                    <a class="active" data-bs-toggle="modal" data-bs-target="#exampleModaljs" style="cursor: pointer;"> 
                       <img  width="10" height="10 " src="https://img.icons8.com/color/100/javascript--v1.png" alt="javascript--v1"/>
                    JS</a></div>
                    <div class="logo" style="display:center;">
                     <!-- Modal bootstrap-->
                    <a class="active" data-bs-toggle="modal" data-bs-target="#exampleModalboot" style="cursor: pointer;"> 
                     <img width="100" height="100" src="https://img.icons8.com/color/100/bootstrap--v1.png" alt="bootstrap--v1"/>
                     BS  </a>
                    </div>

                
      
            </div>
            <div class="card">
                <span><i class="ri-bug-line"></i></span>
                <h4> BACK END</h4>
                <div class="logo" style="display:center;">
                    <!-- Modal php-->
                <a class="active" data-bs-toggle="modal" data-bs-target="#exampleModalphp" style="cursor: pointer;"> 
                        <img  width="96" height="96" src="https://img.icons8.com/color/96/php.png" alt="php"/>   
               PHP </a>
                </div>
                <div class="logo" style="display:center;">
                     <!-- Modal js-->
                    <a class="active" data-bs-toggle="modal" data-bs-target="#exampleModaljs" style="cursor: pointer;"> 
                       <img  width="10" height="10 " src="https://img.icons8.com/color/100/javascript--v1.png" alt="javascript--v1"/>
                    JS</a>
                </div>
                <h4>FRAMEWORK</h4>
                <div class="logo" style="display:center;">
                     <!-- Modal js-->
                    <a class="active" data-bs-toggle="modal" data-bs-target="#exampleModallara" style="cursor: pointer;"> 
                        <img width="64" height="64" src="https://img.icons8.com/nolan/64/laravel.png" alt="laravel"/>
                   Laravel </a>
                </div>
                
                 
            </div>
            <div class="card">
                <span><i class="ri-history-line"></i></span>
                <h4>DATABASES</h4>
                
                <p>
                    MYSQL
                </p>
                <p>
                    Microsoft Access
                </p>
                <h4>Webhosting</h4>
                <p>
                    HOSTINGER
                </p>
                <p>
                000webhost
                </p>
                <h4>ADDITION</h4>
                <p>
                    VISUAL BASIC
                </p>
                
                
            </div>
            <div class="card">
                <span><i class="ri-shake-hands-line"></i></span>
                
                <p>
                •	 {{$portinfo->skill1}}
                </p>
                <p>
                •	 {{$portinfo->skill2}}
                </p>
                <p>
                •	 {{$portinfo->skill3}}
                </p>
                <p>
                •	 {{$portinfo->skill4}}
                </p>
                <p>
                •	 {{$portinfo->skill5}}
                </p>
                <p>
            	•	 {{$portinfo->skill6}}
                </p>
                <p>
            	•	 {{$portinfo->skill7}}
                </p>

            </div>
        </div>
    </section>

  <section class="container" id="about">
        <h2 class="header">ABOUT ME</h2>
        <div class="aboutncontact">
            <div class="card">
                <div class="content">
                    <h4>PERSONAL INFO</h4>
                    <span><i class="ri-history-line"></i></span>

                    <p>
                     "{{$portinfo->pinfo}}"  </p>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h4>ACHIEVEMENTS</h4>
                    <span><i class="ri-history-line"></i></span>
                    <p>
                        CUM LAUDE: GPA: 1.75<br>
                    LEADERSHIP AWARD<br>
                    LOYALTY AWARD<br>
                    SERVICE AWARD<br>
                    PROGRAMMER OF THE YEAR<br>
                    BEST IN THESIS<br><br>
                   
                     "{{$portinfo->achie}}"  </p>
                    
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h4>WORK EXPERIENCE</h4>
                    <span><i class="ri-history-line"></i></span>

                    <p>
                    {{$portinfo->work1}}<i class="ri-history-line span2"></i>
                    </p>
                    <p>
                    {{$portinfo->work2}}
                    <i class="ri-history-line span2"></i>

                    </p>
                    <p>
                      
                    {{$portinfo->work3}} <i class="ri-history-line span2"></i>

                    </p>
                    <p>
                    {{$portinfo->work4}}
                    <i class="ri-history-line span2"></i>

                    </p>
                  
                   
                </div>
            </div>
        </div>
    </section>
 <footer>
    <section class="container"id="contact">
        <h2 class="header">CONTACTS</h2>
        <i class="ri-history-line span2"></i>

        <div class="aboutncontact">
            <div class="card">
                <div class="content">
                    <h4>EMAIL</h4>
                    <span><i class="ri-history-line"></i></span>
                    <div class="icon" >  <a   href="mailto:{{$portinfo->email1}}"><img src="https://img.icons8.com/bubbles/50/000000/new-post.png" alt="EMAIL IMG"/></a> 
                    <p> {{$portinfo->email1}}</p>
                </div>
            </div></div>
            <div class="card">
                <div class="content">
                    <h4>FACEBOOK</h4>
                   <span><i class="ri-history-line"></i></span>
                   <div class="icon" > <a  href="https://www.facebook.com/profile.php?id=100055861144721"><img src="https://img.icons8.com/bubbles/50/000000/facebook.png"alt="FACEBOOK IMG"/></a>
                   <p>{{$portinfo->fb1}}</p>
               
                   </div>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h4>MOBILE/VIBER NUMBER</h4>
                    <span><i class="ri-history-line"></i></span>
                    <div class="icon" ><a  href="tel: +63 956 946 6433"><img src="https://img.icons8.com/bubbles/50/000000/phone--v1.png"alt="PHONE IMG"></a>
                    <p>{{$portinfo->phone1}}</p>

                    </div>
                    
                   
                </div>
            </div>
            
        </div>
    </section>
    </footer>
    <div class="copyright">
    <p id="date-today"></p>
    </div>

    <script src="{{asset('bootstrap/js/apps.js')}}"></script>
    <script src="script.js"></script>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
        <script>
     var jfam = "MAT Portfolio. All Rights Reserved";
    var copyrigth = "Copyright";
    let dateToday = document.getElementById
    ("date-today");
    let today = new Date();
    let year = today.getFullYear();
    dateToday.textContent = `${copyrigth} ${year} ${jfam}`;
</script>
</body>

</html>