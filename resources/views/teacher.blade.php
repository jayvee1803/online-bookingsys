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

  <!-- AOS bootstrap and css -->
  <link rel="stylesheet" href="{{asset('/dist/css/aos.css')}}">
  <!-- customize css -->
  <link rel="stylesheet" type="text/css" href="{{asset('/dist/css/index.css')}}">

  
<style type="text/css">
    .navbar ul li:nth-child(2) a{
      color: #007bff;
    }
    .navbar.solid ul li:nth-child(2) a{
      color: #007bff;
    }

    .person:hover img {
      -webkit-transform: scale(1.05);
      -ms-transform: scale(1.05);
      transform: scale(1.05); }
      .site-section {
        padding: 2.5em 0; }
        @media (min-width: 768px) {
          .site-section {
            padding: 5em 0; } }

  </style>

 
</head>
<body>

	<nav id="nav" class="navbar fixed-top navbar-expand-sm" data-spy="affix">
	  <div class="container">
	    <a href="home" class="navbar-brand">Company Logo</a>
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
                        <a href="login" style="margin-left: 10px;"><button type="button" class="btn btn-primary" >Login</button></a>
                    </li>
                    <!-- @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="register" style="margin-left: 10px;"><button type="button" class="btn btn-primary" >Register</button></a>
                        </li>
                    @endif -->
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

    <div class="site-section border-bottom" id="team-section" style="padding-top:8em;">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
          <!-- if no available techer for course -->
          @if ($subject2->isEmpty())
            <h1>No Teacher Found</h1>
          @else
          <!-- if has available techer for course -->
          @foreach($subject2 as $subject2)
            <h2 class="text-black h1 site-section-heading">{{$subject2->subject}} Available Teacher</h2>
          </div>
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

        <div class="row">  
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
              <div class="person text-center">
                <img src="{{asset('/images/person_2.jpg')}}" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
                <form method="post" role="form">
                  @csrf
                  @if(Auth::check())
                  <input type="hidden" name="booker_email" value="{{ Auth::user()->email }}"/> 
                  @else
                  <input type="hidden" name="booker_email" value="null"/> 
                  @endif
                  <input type="text" name="name" value="{{$subject2->teacher_name}}" style="border:none;text-align:center; font-size:23px;"/> 
                  <input type="text" name="time" value="{{$subject2->time_range}}" style="border:none;text-align:center; color:grey;"/> 
                  <input type="hidden" name="subject" value="{{$subject2->subject}}" style="border:none;text-align:center;"/> 
                  <input type="hidden" name="courselist_name" value="{{$subject2->courselist_name}}"/>
                  <input type="hidden" name="courselist_desc" value="{{$subject2->courselist_desc}}"/>
                  
                  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem deserunt tenetur.</p>
                  <input type="submit" name="submit" value="Book Now" class="boxed-btn5">
                </form>
              </div>
            </div>
          @endforeach
          @endif
          <!-- end of getting available teacher for course -->
          <!-- end getting data -->
        </div>
      </div>
    </div>


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
  


<!-- AOS scripts -->
<script src="{{asset('/dist/js/aos.js')}}"></script>
<script src="{{asset('/dist/js/main.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<script type="text/javascript">
	$(document).ready(function() {
    $('.navbar').addClass('solid');  
  });
</script>
</body>
</html>