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

  <!-- font awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- AOS bootstrap and css -->
  <link rel="stylesheet" href="{{asset('/dist/css/aos.css')}}">
  <!-- customize css -->
  <link rel="stylesheet" type="text/css" href="{{asset('/dist/css/index.css')}}">

  <style type="text/css">
  .navbar ul li:nth-child(3) a{
    color: #007bff;
  }
  .navbar.solid ul li:nth-child(3) a{
    color: #007bff;
  }
/*
  .card-horizontal {
    display: flex;
    flex: 1 1 auto;
}*/

body {
  padding-top: 40px;
  background: #eee
}


.icon-container {
    border-radius: 7px
}

.stars i {
    margin-right: 2px;
    color: red;
    font-size: 13px
}

.rating-number {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 2px
}

.number-ratings {
    font-size: 12px
}

.listing-title {
    margin-bottom: -7px
}

.progress-bar {
    background: green
}

.progress {
    height: 16px
}

.tags span {
    margin-right: 9px;
    border: 1px solid green;
    padding-right: 9px;
    padding-left: 9px;
    padding-top: 2px;
    padding-bottom: 4px;
    border-radius: 7px;
    background-color: green;
    color: #fff
}



 /*body {
     background-color: #FFFF8D
 }

 .container {
     margin-top: 250px
 }
*/
 .second a:hover {
     color: rgb(0, 183, 255) !important
 }

 .active-2 {
     color: rgb(0, 183, 255) !important
 }

 .second span:hover {
     padding-bottom: 21px !important;
     border-bottom: 3px solid rgb(0, 183, 255) !important
 }

 .breadcrumb>li+li:before {
     content: "" !important
 }

 .breadcrumb {
     padding: 19px;
     font-size: 14px;
     color: #aaa !important;
     letter-spacing: 2px;
     border-radius: 5px !important
 }


 /*action button color*/
  .tags button{
	color: gray;
}
 .tags .btn-del:hover{
	color: red;
}
.tags .btn-edit:hover{
	color: blue;
}/* end action button color*/


 .fa-angle-double-right {
     color: #aaa !important
 }

 .first {
     background-color: white !important
 }

 .breadcrumb-item a {
     text-decoration: none !important;
     color: #aaa !important
 }

 .breadcrumb-item a:focus,
 .breadcrumb-item a:active {
     outline: none !important;
     box-shadow: none !important
 }

 .fa-caret-right,
 .fa-angle-double-right {
     font-size: 20px !important
 }

 .fa-caret-right {
     vertical-align: middle
 }

 .four ol {
     background-color: rgb(51, 0, 80) !important
 }

 @media (max-width: 767px) {
     .breadcrumb {
         font-size: 10px
     }

     .breadcrumb-item+.breadcrumb-item {
         padding-left: 0
     }

     .fa {
         font-size: 9px !important
     }

     .breadcrumb {
         letter-spacing: 1px !important
     }

     .breadcrumb>* div {
         max-width: 60px
     }
 }
</style>
 
</head>
<body>

	<nav id="nav" class="navbar fixed-top navbar-expand-sm" data-spy="affix">
		<div class="container">
		  <a href="/home" class="navbar-brand"><img src="{{ asset('images/background/logo.png') }}" style="width: 200px; height: 70px;"></a>
		  <a class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse" style="color: red;">☰</a>
		  <div class="navbar-collapse collapse">
			  <ul class="ml-auto navbar-nav">
				<li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="/course" class="nav-link">Courses</a></li>
				<li class="nav-item"><a href="/my-booklist/" class="nav-link">Booklist
					@if($count > 0)
						<span class="badge badge-success" style="text-shadow: none; font-size: 8px;
						position: absolute;">{{$count}}</span>
					@endif
				</a>
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



  <!-- my booklist -->
  	<div class="container mt-5 mb-5">
	    <div class="row">

	    	<div class="container container-md-fluid mt-3">
				<div class="row ">
				    <div class="col-auto col-md-12">
				        <nav aria-label="breadcrumb" class="second">
				            <ol class="breadcrumb indigo lighten-6 first shadow-lg px-md-4" style="border-left: 2px solid rgb(0, 183, 255);">
				                <li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="../home"><span class="mr-md-3 mr-2">home</span></a><i class="fa fa-angle-double-right " aria-hidden="true"></i></li>
				                <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="../course"><span class="mr-md-3 mr-2">Course</span></a><i class="fa fa-angle-double-right text-uppercase " aria-hidden="true"></i></li>
				                <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase active-2" href="#"><span>My Booklist</span></a></li>
				            </ol>
				        </nav>
				    </div>
				</div>
			</div>

	        <div class="col-md-12">
	       	@if ($mybooklist->isEmpty())
	       	  <div class="text-center" style="padding: 10em;">
				<h1>No booklist Found</h1>
              </div>
          	@else
	        @foreach($mybooklist as $mybooklist)
	            <div class="bg-white p-3 rounded mt-2">
	                <div class="row">
	                    <div class="col-md-3">
	                        <div class="d-flex flex-column justify-content-center align-items-center icon-container bg-success text-white mb-2">
                            <img src="{{asset('img/program/1.png')}}" alt="no image" style="width: 250px; height: 200px;">
	                        </div>
	                    </div>
	                    <div class="col-md-6 border-right">
	                        <div class="listing-title">
	                            <h5>Getting started with docker on linux for Azure</h5>
	                        </div>
	                        <div class="d-flex flex-row align-items-center">
	                            <div class="d-flex flex-row align-items-center ratings"><span class="mr-1 rating-number">4</span>
	                                <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span class="mr-2 text-black-50 number-ratings">(12342 ratings)</span>
	                            </div>
	                            <div class="level mr-2"><span>Level:</span><span class="font-weight-bold">Beginner</span></div>
	                            <div class="level mr-1"><span>Time:</span><span class="font-weight-bold">1h 20m</span></div>
	                        </div>
	                        <div class="description">
	                            <!-- <p>{$mybooklist->courselist_desc}<br></p> -->
	                            <p>{{ Carbon\Carbon::parse($mybooklist->created_at)->diffForHumans()}} </p>
	                        </div>
	                        <div class="tags mb-2">
				                @if(Carbon\Carbon::parse($mybooklist->created_at)->diffForHumans()>="1 hour ago")
				                	<button class="btn bg-transparent btn-del" hidden="true"><i class="fa fa-trash fa-sm" aria-hidden="true"></i> Cancel</button>
				                	<button class="btn bg-transparent btn-edit" hidden="true"><i class="fa fa-edit fa-sm" aria-hidden="true"></i> Edit</button>
				                @else
				                	<button class="btn bg-transparent btn-del"><i class="fa fa-trash fa-sm" aria-hidden="true"></i> Cancel</button>
				                	<button class="btn bg-transparent btn-edit"><i class="fa fa-edit fa-sm" aria-hidden="true"></i> Edit</button>
				                @endif
	                        </div>
	                    </div>
	                    <div class="d-flex col-md-3">
	                        <div class="d-flex flex-column justify-content-start user-profile w-100">
	                            <div class="d-flex user"><img class="rounded-circle" src="https://i.imgur.com/6dOWqJu.jpg" width="50">
	                                <div class="about ml-1"><span class="d-block text-black font-weight-bold">{{$mybooklist->teacher_name}}</span><span>Cloud consultant</span></div>
	                            </div>
	                            <div class="progresses"><span>Designing</span>
	                                <div class="progress mt-1">
	                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
	                                </div>
	                            </div>
	                            <div class="progresses"><span>Expertise</span>
	                                <div class="progress mt-1">
	                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
	                                </div>
	                            </div>
	                            <div class="progresses"><span>Awareness</span>
	                                <div class="progress mt-1">
	                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        @endforeach 
	        @endif   
	            <!--  -->
	        </div>
	    </div>
	</div>
	  	
  <!-- end of my booklist -->
  

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



	       $(document).ready(function(){

       $('.second ol li a.active-2 span').css({ 'border-bottom': '3px solid rgb(0, 183, 255) ' , 'padding-bottom': ' 21px ' });

       $('.second ol li a').click(function() {
       $('.second ol li a.active-2 span').css( 'padding-bottom', '0px' );
       $('.second ol li a.active-2 span').css( 'border-bottom', 'none' );
       $('.second ol li a.active-2').removeClass('active-2');
       $(this).closest('a').find('span').css( 'padding-bottom', ' 21px ' );
       $(this).closest('a').find('span').css( 'border-bottom', '3px solid rgb(0, 183, 255) ' );
       $(this).closest('a').addClass('active-2');
       });


       });
</script>
</body>
</html>