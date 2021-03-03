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

  <!-- customize css -->
  <link rel="stylesheet" type="text/css" href="{{asset('/dist/css/index.css')}}">
	<link rel="stylesheet" href="{{asset('/dist/css/register.css')}}">
</head>
<body>
<!-- navbar -->
	<nav id="nav" class="navbar fixed-top navbar-expand-sm" data-spy="affix">
	  <div class="container">
	    <a href="#" class="navbar-brand">Company Logo</a>
	    <a class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse" style="color: red;">☰</a>
	    <div class="navbar-collapse collapse">
	        <ul class="ml-auto navbar-nav">
	            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	            <li class="nav-item"><a href="course" class="nav-link">Courses</a></li>
	            <li class="nav-item"><a href="aboutus" class="nav-link">About Us</a></li>
	            <a href="register" style="margin-left: 10px;"><button type="button" class="btn btn-primary" >Login</button></a>
	        </ul>
	    </div>
	  </div>
	</nav>


	<div class="wrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
		<div class="inner">
			<form action="">
				<h3>Registration Form</h3>
				<div class="form-group">
					<div class="form-wrapper">
						<label for="">First Name</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="">Last Name</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="form-wrapper">
					<label for="">Email</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-wrapper">
					<label for="">Password</label>
					<input type="password" class="form-control">
				</div>
				<div class="form-wrapper">
					<label for="">Confirm Password</label>
					<input type="password" class="form-control">
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox"> I caccept the Terms of Use & Privacy Policy.
						<span class="checkmark"></span>
					</label>
				</div>
				<button>Register Now</button>
			</form>
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