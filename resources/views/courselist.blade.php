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


    /*for subject list cat*/
    .align-items-stretch{
      margin-top: 7%;
    }
    .unit-4 {
  padding: 30px;
  background: #f1f1f1;
  border-radius: 5px;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  position: relative;
  top: 0;
  margin-bottom: 4em;
  text-align: center;
  padding-top: 50px; }
  .unit-4 .unit-4-icon {
    position: absolute;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    left: 50%;
    top: -50px; }
    .unit-4 .unit-4-icon .icon-wrap {
      width: 80px;
      height: 80px;
      position: relative;
      border-radius: 50%;
      display: inline-block;
      background-color: #4285f4;
      -webkit-box-shadow: 0 4px 20px -5px rgba(66, 133, 244, 0.4);
      box-shadow: 0 4px 20px -5px rgba(66, 133, 244, 0.4); }
      .unit-4 .unit-4-icon .icon-wrap span {
        font-size: 2rem;
        position: absolute;
        top: 50%;
        color: #fff !important;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); }
  .unit-4 h3 {
    font-size: 18px;
    color: #000;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
  .unit-4 p {
    font-weight: 300;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
  .unit-4 *:last-child {
    margin-bottom: 0; }
  .unit-4:hover {
    background: #4285f4;
    -webkit-box-shadow: 0 4px 20px -5px rgba(66, 133, 244, 0.4);
    box-shadow: 0 4px 20px -5px rgba(66, 133, 244, 0.4);
    top: -7px; }
    .unit-4:hover .icon-wrap {
      background-color: #fff; }
      .unit-4:hover .icon-wrap span {
        color: #4285f4 !important; }
    .unit-4:hover h3 {
      color: #fff; }
    .unit-4:hover p {
      font-weight: 300;
      color: rgba(255, 255, 255, 0.7); }
      .unit-4:hover p a {
        color: #fff; }
  </style>

 
</head>
<body>

	<nav id="nav" class="navbar fixed-top navbar-expand-sm" data-spy="affix">
	  <div class="container">
	    <a href="home" class="navbar-brand">Company Logo</a>
	    <a class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse" style="color: red;">☰</a>
	    <div class="navbar-collapse collapse">
	        <ul class="ml-auto navbar-nav">
	            <li class="nav-item"><a href="../home" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="../course" class="nav-link">Courses</a></li>
              <li class="nav-item"><a href="../my-booklist/" class="nav-link">Booklist</a></li>
              <li class="nav-item"><a href="aboutus" class="nav-link">About Us</a></li>
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
                            {{ Auth::user()->username }}
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


  <!-- courses list -->
  <div class="site-section" id="features-section" style="padding-top:8em;">
    <div class="container">
        <div class="row mb-3 justify-content-center text-center">
          <div class="section_title col-7 text-center">
            <h2 class="section-title">Learning Series</h2>
          </div>
        </div>

      <div class="row align-items-stretch">
        @foreach($courselist as $courselist)
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">          
          <div class="unit-4 d-block">
            <div>
              <h4>{{$courselist->courselist_name}}</h4>
              <p>{{$courselist->courselist_desc}}</p>
              <p>
              <a href='{{ url("/teacher"."/".Str::slug($courselist->courselist_name)) }}/'>Learn More</a></p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- courses list -->


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