<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | By Kuya tabs</title>
  <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="{{asset('bootstrap/css/astustyle.css')}}" rel="stylesheet">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
@include('sweetalert::alert')

  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="images/andrei1.jpg" alt="">
          <span class="nav-item">DashBoard</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-user"></i>
          <span class="nav-item">Profile</span>
        </a></li>
        <li><a href="">
        <i class="fab fa-rocketchat"></i>
          <span class="nav-item">Chats</span>
        </a></li>
        <li><a href="">
        <i class="fas fa-bullhorn"></i>
          <span class="nav-item">Announcement</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-tasks"></i>
          <span class="nav-item">Tasks</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Settings</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Help</span>
        </a></li>
        <li><a class="logout" href="{{ url('logout/')}}">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      <div class="main-top">
        <h1>GRADES</h1>
        <i class="fas fa-user-cog"></i>
      </div>

      <div class="main-skills">
        <div class="card">
          <h3>First year</h3>
          <p>Your journey beggins here!</p>
          <button>See Grades</button>
        </div>
        <div class="card" style="background-color: hsla(50, 33%, 25%, .75); color:white;">
          <h3>Second Year</h3>
          <p>Enrolled as 2nd Year</p>
          <p>Keep it up!</p>
          <button>See Grades</button>
        </div>
        <div class="card">
          <h3>Third Year</h3>
          <p>Almost There!</p>
          <button>See Grades</button>
        </div>
        <div class="card">
          <h3>fourth Year</h3>
          <p>Finally Congrats!</p>
          <button>See Grades</button>
        </div>
      </div>

      <section class="main-course">
        <h1>My Credentials</h1>
        <div class="course-box">
          <ul>
            <li class="active">Request</li>
            
          </ul>
          <div class="course">
            <div class="box">
              <h3>Subjects</h3>
              <p>27 Units</p>
              <button>continue</button>
              <i class="fa fa-book"></i>
            </div>
            <div class="box">
              <h3>Evaluation</h3>
              <p>as of now 86.90%</p>
              <button>continue</button>
              <i class="fa fa-percent"></i>
            </div>
            <div class="box">
              <h3>Requirements</h3>
              <p>Incomplete</p>
              <button>continue</button>
              <i class="fa fa-folder"></i>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>
</body>
</html>







