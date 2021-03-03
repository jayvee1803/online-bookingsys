<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- creative design for our courses -->
  <link rel="stylesheet" type="text/css" href="{{asset('/dist/courses/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/dist/courses/style.css')}}">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.1/css/font-awesome.min.css">
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

  <!-- customize css -->
  <link rel="stylesheet" type="text/css" href="{{asset('/dist/css/index.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/dist/css/profile.css')}}">

  <style type="text/css">
    .navbar ul li a{
    color: #fff;
    text-shadow: 1px 1px 1px black;
  }
  .navbar ul li:hover a{
    color: #007bff;
  }
  .navbar ul li:nth-child(2) a{
    color: #007bff;
   /* border-bottom: solid 4px #007bff;*/
  }
  .navbar.solid ul li:nth-child(2) a{
    color: #007bff;
  }
  .navbar .nav-item .dropdown-item{
    text-shadow: none;
    color: grey;
  }


    .owl-buttons {
  display: none;
}
.owl-carousel:hover .owl-buttons {
  display: block;
}

.owl-item {
  text-align: center;
}

.owl-theme .owl-controls .owl-buttons div {
  background: transparent;
  color: #869791;
  font-size: 40px;
  line-height: 30px;
  margin-top: 10%;
  position: absolute;
  top: 0;
}
.owl-theme .owl-controls .owl-buttons .owl-prev {
  left: 0;
  padding-left: 20px;
}
.owl-theme .owl-controls .owl-buttons .owl-next {
  right: 0;
  padding-right: 20px;
}

  </style>
</head>
<body>
<!-- navbar -->
  <nav id="nav" class="navbar fixed-top navbar-expand-sm" data-spy="affix">
    <div class="container">
      <a href="../home" class="navbar-brand">Company Logo</a>
      <a class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse" style="color: red;">☰</a>
      <div class="navbar-collapse collapse">
          <ul class="ml-auto navbar-nav">
              <li class="nav-item"><a href="../../home" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="../../course" class="nav-link">Courses</a></li>
              <li class="nav-item"><a href="../../my-booklist/" class="nav-link">Booklist</a></li>
              <li class="nav-item"><a href="../../aboutus" class="nav-link">About Us</a></li>
              <!-- <a href="register" style="margin-left: 10px;"><button type="button" class="btn btn-primary" >Login</button></a> -->
              @guest
                    <li class="nav-item">
                        <a href="../../login" style="margin-left: 10px;" class="nav-link">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="../../register" style="margin-left: 10px;"><button type="button" class="btn btn-primary">Sign up</button></a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->username }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="../profile">My Profile</a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                        </div>
                    </li>
                @endguest
          </ul>
      </div>
    </div>
  </nav>



<div class="main-content" style="background-color: #fff;">
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 500px;background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url({{asset('images/background/bg/web_dev.jpg')}}); background-size: cover; background-repeat: no-repeat; background-position: center;">

      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center" style="width: 90%;">
        <div class="row">
          <div class="col-lg-7 col-md-10 mt-5 pt-3">
            <h1 class="display-2 text-white">{{ $title }} course</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <!-- <a href="#!" class="btn btn-info">Edit profile</a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7" style="width: 90%;">
      <div class="row">
        <!-- second card -->
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile" style="background-color: #f8f9fe;">
            <div class="card-body pt-2 pt-md-4">
              <div>
                <h3>
                  This course includes:
                </h3>
                @foreach($course_inclusion as $course_inclusion)
                <div>
                  <i class="fa fa-tasks fa-fw"></i>
                  {{$course_inclusion->course_inclusion}}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <!--closing second card -->
        <!-- 1st card -->
        <div class="col-xl-8 order-xl-1 mb-4">
          <div class="card" style="background-color: #f8f9fe;">
            <div class="card-body">
              <h6 class="heading-small text-muted mb-4">What you'll learn</h6>
              <div class="row">
              @foreach($course_learning as $course_learning)
                <fieldset class="col-sm-6">
                  <label>
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <span>{{$course_learning->course_learning}}</span>
                  </label>
                </fieldset>
              @endforeach          
              </div><!-- closing row -->  
            </div><!-- closing cardbody div -->
          </div>
        </div>
        <!-- end 1st card -->

      </div>
    </div><!-- closing cards/page content -->
</div>


<style type="text/css">
.course-item img{
  width: 95%;
  height: 250px; 
}
.myprogress .circle,
.myprogress .bar {
display: inline-block;
background: #fff;
width: 30px; 
height: 30px;
border-radius: 80px;
border: 1px solid #d5d5da;
}
.myprogress .bar {
position: relative;
width: 85%;
height: 2px;
top: -5px;
border: 0px solid #d5d5da;
background:gray;
}
.myprogress .circle .title {
color: #b5b5ba;
font-size: 14px;
line-height: 30px;
}
</style>

    <div style="background-color:#f8f9fe;">
    <div class="container">
      <div class="mt-4 ml-2">
        <h1 class="mb-4">Learn series: Web development from fundamentals to advanced</h1>
      </div>
    
      <div id="owl-example" class="owl-carousel owl-theme">
        @foreach($courselist as $courselist)
        <div class="course-item">
          <div class="myprogress">
            <div class="circle">
              <span class="title">{{$loop->iteration}}</span>
            </div>
            <span class="bar"></span>
          </div>
          <img class="mt-1" src="//placehold.it/300x300/936/c69/?text=1" alt="">
          {{$courselist->courselist_name}}
        </div>
        @endforeach        
      </div>
    </div>
    </div>



    <style type="text/css">
    .comment-section {
        display: block;
        border:solid 1px #dcdacb;
        border-radius: 11px;
        margin-top: 5%;
        margin-bottom: 5%;
        width: 95%;
        max-width: 700px;
        margin: auto;
    }
    .comment-section:hover {
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1), 0 2px 4px 0 rgba(0, 0, 0, 0.1);
    }
    .name {
        font-size: 20px
    }
    .comment-content {
        font-size: 14px
    }
    .comments {
        color: blue
    }
    .owl-theme2 .owl-controls .owl-buttons div {
      background: transparent;
      color: #869791;
      font-size: 40px;
      line-height: 30px;
      margin-top: 6%;
      position: absolute;
      top: 0;
    }

    </style>

    <div id="con_instructor" class="mt-4" style="background-color: #fff;">
    <div class="container">

      <div class="pt-4 ml-2">
        <h1>Available Instructor:</h1>
      </div>
      <!-- if success booking --> 
      @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
      @endif
      @if(session()->has('warning'))
        <div class="alert alert-warning">
            {{ session()->get('warning') }}
        </div>
      @endif
      @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
      @endif
      @if ($teacherlist->isEmpty())
      <div class="alert alert-success text-center">
        <h1>No available instructor found</h1>
      </div>
      @else
      <div class="row">
        <div id="owl-example2" class="owl-carousel owl-theme2">
          @foreach($teacherlist as $teacherlist)
          <form id="form" method="post" role="form">
            @csrf
            @if(Auth::check())
            <input type="hidden" name="booker_email" value="{{ Auth::user()->email }}"/> 
            @else
            <input type="hidden" name="booker_email" value="null"/> 
            @endif
            <div class="bg-white comment-section mt-2 mb-2">
              <div class="d-flex flex-row user p-2"><img class="rounded-circle" src="https://i.imgur.com/EQk6lCz.jpg" width="50">
                  <!-- <div class="d-flex flex-column ml-2"><span class="name font-weight-bold">{{$teacherlist->teacher_name}}</span><span>10:30 PM, May 25</span></div> -->
                  <div class="d-flex flex-column ml-2">
                    <input type="text" name="name" value="{{$teacherlist->teacher_name}}" style="border:none; font-size:23px;"/>
                  </div>
                  <input type="hidden" name="course_name" value="{{$teacherlist->course_name}}"/> 
              </div>
              <div class="p-2">
                  <p class="comment-content pl-2 text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
              </div>
              <div class="d-flex p-2 border-top">
                  <input class="btn btn-primary btn-sm ml-2" type="submit" name="submit" value="Book Now">
                  <input class="btn btn-default btn-sm ml-2" type="submit" name="" value="View Profile">
              </div>
            </div>
          </form>
          @endforeach
      @endif
        </div>
      </div>
    </div>
    </div>



<!-- </div> --><!-- closing main content -->


  <footer class="footer">
      <div class="footer_top">
          <div class="container">
              <div class="row">              
                  <div class="col-xl-3 col-md-6 col-lg-3">
                      <div class="footer_widget">
                          <h3 class="footer_title">
                              Company
                          </h3>
                          <ul>
                              <li><a href="#">Our Plans</a></li>
                              <li><a href="#">Academic Solutions</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6 col-lg-3">
                      <div class="footer_widget">
                          <h3 class="footer_title">
                              About Us
                          </h3>
                          <ul>
                              <li><a href="#">Online Learning</a></li>
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">Careers</a></li>
                              <li><a href="#">Become an Instructor</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6 col-lg-3">
                      <div class="footer_widget">
                          <h3 class="footer_title">
                              Study
                          </h3>
                          <ul>
                              <li><a href="#">Admissions Policy</a></li>
                              <li><a href="#">Getting Started</a></li>
                              <li><a href="#">Information</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6 col-lg-3">
                      <div class="footer_widget">
                          <h3 class="footer_title">
                              Support
                          </h3>
                          <ul>
                              <li><a href="#">Support</a></li>
                              <li><a href="#">Contact Us</a></li>
                              <li><a href="#">Register Activation Key</a></li>
                              <li><a href="#">Site feedback</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>

  
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<script type="text/javascript">
    $(document).ready(function() {
    $(window).scroll(function() {
      if($(this).scrollTop() > 40) { 
        $('.navbar').addClass('solid');
      } else {
        $('.navbar').removeClass('solid');
      }
    });
  });

$(document).ready(function () {
  $("#owl-example").owlCarousel({
    itemsDesktop: [1499, 3],
    itemsDesktopSmall: [1199, 3],
    itemsTablet: [899, 2],
    itemsMobile: [599, 1],
    navigation: true,
    navigationText: [
      '<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-left fa-stack-1x fa-inverse"></i></span>',
      '<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-right fa-stack-1x fa-inverse"></i></span>'
    ]
  });
});
$(document).ready(function () {
  $("#owl-example2").owlCarousel({
    itemsDesktop: [1499, 3],
    itemsDesktopSmall: [1199, 3],
    itemsTablet: [899, 2],
    itemsMobile: [599, 1],
    navigation: true,
    navigationText: [
      '<span class="fa-stack instructor"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-left fa-stack-1x fa-inverse"></i></span>',
      '<span class="fa-stack instructor"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-right fa-stack-1x fa-inverse"></i></span>'
    ]
  });
});

//return to current scroll position after booking an instructor
$(document).ready(function () {
  @if(session()->has('error') || session()->has('success') || session()->has('warning'))
      $('html, body').animate({
        scrollTop: 1100
          //scrollTop: $('#con_instructor').offset().top
      }, 'slow');
  @endif
});

</script>
</body>
</html> 
