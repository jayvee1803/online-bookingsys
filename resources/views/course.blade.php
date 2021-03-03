<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- creative design for our courses -->
  <link rel="stylesheet" type="text/css" href="{{secure_asset('/dist/courses/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{secure_asset('/dist/courses/style.css')}}">

  <!-- AOS bootstrap and css -->
  <link rel="stylesheet" href="{{secure_asset('/dist/css/aos.css')}}">
  <!-- customize css -->
  <link rel="stylesheet" type="text/css" href="{{secure_asset('/dist/css/index.css')}}">

  <style type="text/css">
  .navbar ul li:nth-child(2) a{
    color: #007bff;
  }
  .navbar.solid ul li:nth-child(2) a{
    color: #007bff;
  }
</style>
 
</head>
<body>

	<nav id="nav" class="navbar fixed-top navbar-expand-sm" data-spy="affix">
		<div class="container">
		  <a href="/home" class="navbar-brand"><img src="images/background/logo.png" style="width: 200px; height: 70px;"></a>
		  <a class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse" style="color: red;">☰</a>
		  <div class="navbar-collapse collapse">
			  <ul class="ml-auto navbar-nav">
				<li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="/course" class="nav-link">Courses</a></li>
				<li class="nav-item"><a href="/my-booklist/" class="nav-link">Booklist
				  <span class="badge badge-success" style="text-shadow: none; font-size: 8px;
				  position: absolute;">2</span></a>
				</li>
				<li class="nav-item"><a href="/aboutus" class="nav-link">About Us</a></li>
				  <!-- <a href="register" style="margin-left: 10px;"><button type="button" class="btn btn-primary" >Login</button></a> -->
				  @guest
					  <li class="nav-item">
						  <a href="login" style="margin-left: 10px;" class="nav-link">Login</a>
					  </li>
					  @if (Route::has('register'))
						  <li class="nav-item">
							  <a href="register" style="margin-left: 10px;"><button type="button" class="btn btn-primary">Sign up</button></a>
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

  <!-- our courses  -->
  <div class="popular_program_area section__padding program__page" style="padding-top:10em;">
      <div class="container">
          <div class="row mb-3 justify-content-center text-center">
            <div class="section_title col-7 text-center">
              <h2 class="section-title">Our Courses</h2>
              <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.</p> -->
            </div>
          </div>

          <div class="tab-content" id="nav-tabContent site-section">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="row">
              	@foreach($course as $course)
                  <div class="col-lg-4 col-md-6 mt-3">
                      <div class="single__program">
                          <div class="program_thumb">
                              <img src="img/program/1.png" alt="">
                          </div>
                          <div class="mt-3">
                              <h4>{{$course->course_name}}</h4>
                              <p>{{$course->course_desc}}</p>
                              <a href='{{ url("/course"."/".Str::slug($course->course_name)) }}/' class="boxed-btn5">View courses</a>
                          </div>
                      </div>
                  </div>
                @endforeach
              </div>           
            </div>
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
<script src="{{secure_asset('/dist/js/aos.js')}}"></script>
<script src="{{secure_asset('/dist/js/main.js')}}"></script>

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
