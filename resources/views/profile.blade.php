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

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- modal  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <!-- customize css -->
  <link rel="stylesheet" type="text/css" href="{{asset('/dist/css/index.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/dist/css/profile.css')}}">
  <!-- <link rel="stylesheet" href="{{asset('/dist/css/register.css')}}"> -->
  <style>
    .navbar ul li a{
    color: #fff;
    text-shadow: 1px 1px 1px black;
  }
  .navbar ul li:hover a{
    color: #007bff;
  }
  .navbar ul li:nth-child(5) a{
    color: #007bff;
   /* border-bottom: solid 4px #007bff;*/
  }
  .navbar.solid ul li:nth-child(5) a{
    color: #007bff;
  }
  .navbar .nav-item .dropdown-item{
    text-shadow: none;
    color: grey;
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



  <div class="main-content mb-5">
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 550px;background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url(images/background/edited2_1.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
      <!-- Mask -->
      <!-- <span class="mask bg-gradient-default opacity-8"></span> -->
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center" style="width: 90%;">
        <div class="row">
          <div class="col-lg-7 col-md-10 mt-5 pt-3">
            <h1 class="display-2 text-white" style="text-shadow: 1px 1px 1px black;font-family: cursive;">Hello {{ Auth::user()->username }}</h1>
            <p class="text-white mt-0 mb-5" style="text-shadow: 1px 1px 1px black;">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <!-- <a href="#!" class="btn btn-info">Edit profile</a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7" style="width: 90%;">
      <div class="row">

        <div class="col-xl-4 order-xl-1 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image" data-toggle="modal" data-target="#exampleModalCenter">
                  <!-- <a href=""> -->
                    @foreach($profile as $profile)
                      @if($profile->photo==null)
                        <img src="{{asset('/images/avatar.png')}}" class="rounded-circle">
                      @else
                        <img src="images/profile/{{$profile->photo}}" class="rounded-circle">
                      @endif
                    @endforeach
                    <!-- <img src="{{asset('/images/avatar.png')}}" class="rounded-circle"> -->
                  <!-- </a> -->
                </div>

              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <!-- <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div> -->
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <!-- <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading">22</span>
                      <span class="description">Friends</span>
                    </div>
                    <div>
                      <span class="heading">10</span>
                      <span class="description">Photos</span>
                    </div>
                    <div>
                      <span class="heading">89</span>
                      <span class="description">Comments</span>
                    </div>
                  </div> -->
                </div>
              </div>
              <div class="text-center">
                <h3>
                  {{ Auth::user()->name }}<!-- <span class="font-weight-light">, 27</span> -->
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Bucharest, Romania
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>University of Computer Science
                </div>
                <hr class="my-4">
                <p>Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music.</p>
                <a href="#">Show more</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-8 order-xl-2">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Edit</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="{{Auth::user()->name}}">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="{{Auth::user()->email}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="{{Auth::user()->name}}">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Jesse">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="New York">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="United States">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group focused">
                    <label>About Me</label>
                    <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
                  </div>
                </div>
              </form>
            </div>
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

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
</script>
</body>
</html> 



  <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- Form -->
      <form action="{{url('save')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          Select file : 
          <input type='file' name='fileUpload' id='file' class='form-control' onChange="img_pathUrl(this);"><br>
          <!-- <input type='button' class='btn btn-info' value='Upload' id='btn_upload'> -->
          <img id="img_url" src="http://placehold.it/180" alt="your image"><br>
        <!-- Preview-->
        <div id='preview'></div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <!-- <button type="button" class="btn btn-primary">Upload</button> -->
        <input type="submit" class="btn btn-primary" name="" value="Upload">
      </div>
      </form>
    </div>
  </div>
</div>

<style type="text/css">
  #img_url {
  background: #ddd;
  width:80%;
  height: 20em;
  margin: auto;
  display: block;
}
</style>
<script type="text/javascript">
  function img_pathUrl(input){
        $('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
    }
</script>