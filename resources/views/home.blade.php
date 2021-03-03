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

  <!-- Courses links -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

  <!-- AOS bootstrap and css -->
  <link rel="stylesheet" href="{{asset('/dist/css/aos.css')}}">
  <!-- customize css -->
  <link rel="stylesheet" type="text/css" href="{{asset('/dist/css/index.css')}}">

  <style type="text/css">
  .navbar ul li a{
    color: #fff;
    text-shadow: 1px 1px 1px black;
  }
  .navbar ul li:hover a{
    color: #007bff;
  }
  .navbar ul li:nth-child(1) a{
    color: #007bff;
   /* border-bottom: solid 4px #007bff;*/
  }
  .navbar.solid ul li:nth-child(1) a{
    color: #007bff;
  }
  .navbar .nav-item .dropdown-item{
    text-shadow: none;
    color: grey;
  }

  /*for parallax in contact form*/
    .bg-image2 {
      background-size: cover;
      background-attachment: fixed;
      position: relative; }
      .bg-image2.overlay:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: .7; }
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
              <li class="nav-item">
                <a href="/my-booklist/" class="nav-link">Booklist
                  @if (Auth::check())
                    @if($count > 0)
                      <span class="badge badge-success" style="text-shadow: none; font-size: 8px;
                      position: absolute;">{{$count}}</span>
                    @endif
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

  <div class="site-blocks-cover overlay" style="background-image: linear-gradient(
      rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.2)), url(images/background/bg/edited2.jpg);background-size: cover; background-repeat: no-repeat; background-position: center;" data-aos="fade">

    <div class="container">

      <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-6 mr-auto" style="margin-top: 18%;">
          <h1 style="color: #fff; font-weight: normal; text-shadow: 1px 1px 1px black;font-family: cursive;">Expand your knowledge with us</h1>
          <p class="mb-5" style="color: #fff;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p>
          <div>
            <a href="" class="boxed-btn6">Get Started</a>
          </div>
        </div>
      </div>

    </div>
  </div>  


    <div class="service_area gray_bg">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-4">
                  <div class="single_service d-flex align-items-center" style="background: linear-gradient(to right, #016cec, #00b5f7);">
                    <div>
                      <img style="width:70px;height:70px;border-radius: 50%;" src="{{asset('images/offer/bookcourse.png')}}" alt="">
                    </div>
                    <div class="service_info" style="margin-left: 6%; ">
                        <h4>Book a course</h4>
                        <p>Available</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="single_service d-flex align-items-center" style="background: linear-gradient(to right, #016cec, #00b5f7);">
                    <div>
                      <img style="width:70px;height:70px;border-radius: 50%;" src="{{asset('images/offer/pickinstructor.png')}}" alt="">
                    </div>
                    <div class="service_info" style="margin-left: 6%; ">
                        <h4>Pick Instructor</h4>
                        <p>Choose the best</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="single_service d-flex align-items-center" style="background: linear-gradient(to right, #016cec, #00b5f7);">
                    <div>
                      <img style="width:70px;height:70px;border-radius: 50%;" src="{{asset('images/offer/paysafely.png')}}" alt="">
                    </div>
                    <div class="service_info" style="margin-left: 6%; ">
                        <h4>Pay Safely</h4>
                        <p>Secured</p>
                    </div>
                  </div>
                </div>

            </div>
        </div>
    </div>
    <!--/ service_area_start  -->

<style type="text/css">

.section-team {
  font-family: "Poppins", sans-serif;
  padding: 80px 0;
}

.section-team .single-person {
  margin-top: 30px;
  padding: 30px;
  background-color: #f6f9ff;
  border-radius: 5px;
}

.section-team .single-person:hover {
  background: linear-gradient(to right, #016cec, #00b5f7);
  cursor: pointer;
}

.section-team .single-person .person-image {
    position: relative;
    margin-bottom: 5%;
    border-radius: 50%;
    border: 4px dashed transparent;
    transition: padding .3s;
}

.section-team .single-person:hover .person-image {
  padding: 12px;
}

.section-team .single-person .person-image img {
  width: 100%;
  border-radius: 50%;
}

.section-team .single-person .person-info{
  text-align: center;
}
.section-team .single-person .person-info .full-name {
  font-size: 18px;
}

.section-team .single-person .person-info .speciality {
    text-transform: uppercase;
    font-size: 14px;
    color: #016cec;
}

.section-team .single-person:hover .full-name,
.section-team .single-person:hover .speciality {
  color: #fff;
}
</style>
  <section class="section-team">
    <div class="container">
      <!-- Start Header Section -->
      <div class="row justify-content-center text-center" data-aos="fade-up">
        <div class="col-md-8 col-lg-6">
          <div class="header-section">
            <h2 class="title">Popular Instructor</h2>
          </div>
        </div>
      </div>
      <!-- / End Header Section -->
      <div class="row" data-aos="fade-up">
        <!-- Start Single Person -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="single-person">
            <div class="person-image">
              <img src="https://i.ibb.co/G2CBWvb/person1.jpg" alt="">
            </div>
            <div class="person-info">
              <h3 class="full-name">John Doe</h3>
              <span class="speciality">Web Developer</span>
            </div>
          </div>
        </div>
        <!-- / End Single Person -->
        <!-- Start Single Person -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="single-person">
            <div class="person-image">
              <img src="https://i.ibb.co/nbpNr4r/person2.jpg" alt="">
            </div>
            <div class="person-info">
              <h3 class="full-name">Robert Smith</h3>
              <span class="speciality">WordPress Developer</span>
            </div>
          </div>
        </div>
        <!-- / End Single Person -->
        <!-- Start Single Person -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="single-person">
            <div class="person-image">
              <img src="https://i.ibb.co/25zdRMr/person3.jpg" alt="">
            </div>
            <div class="person-info">
              <h3 class="full-name">John Doe</h3>
              <span class="speciality">Angular Developer</span>
            </div>
          </div>
        </div>
        <!-- / End Single Person -->
        <!-- Start Single Person -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="single-person">
            <div class="person-image">
              <img src="https://i.ibb.co/w0ynr2Q/person4.jpg" alt="">
            </div>
            <div class="person-info">
              <h3 class="full-name">John Smith</h3>
              <span class="speciality">Javascript Developer</span>
            </div>
          </div>
        </div>
        <!-- / End Single Person -->
      </div>
    </div>
  </section>


  <!-- our courses  -->
  <div class="popular_program_area section__padding program__page" style="padding: 2em 0; background-color: #f8fafe;">
      <div class="container">
          <div class="row mb-5 justify-content-center text-center" data-aos="fade-up">
            <div class="section_title col-7 text-center">
              <h2 class="section-title">Our Courses</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.</p>
            </div>
          </div>

          <div class="tab-content" id="nav-tabContent site-section">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="row">
                <div class="owl-carousel owl-theme bbb_viewed_slider">
                  @foreach($courses as $course)
                    <div class="single__program" data-aos="fade-up">
                        <div class="program_thumb">
                            <img src="img/program/1.png" alt="">
                        </div>
                        <div class="mt-3">
                            <h4>{{$course->course_name}}</h4>
                            <p>{{$course->course_desc}}</p>
                            <a href='{{ url("/course"."/".Str::slug($course->course_name)) }}/' class="boxed-btn5">View Courses</a>
                        </div>
                    </div>
                  @endforeach
                  </div>
              </div>           
            </div>
          </div>

      </div>
  </div>



  <div class="container mt-5 mb-5" data-aos="fade-up">
    <!--  image left  -->
    <div class="row">
      <div class="col-md-6" data-aos="fade-right">
        <img src="https://res.cloudinary.com/mhmd/image/upload/v1556834139/img-1_e25nvh.jpg" alt="" style="height: 280px;border-radius: 5px; width: 75%; margin-left: 10%;"/>
      </div>
      <div class="col-md-6" data-aos="fade-up">
        <div class="row align-items-center h-100">
          <div class="col">
            <h1 class="display-6">Become an instructor</h1>
            <p>Top instructors from around the world teach millions of students on Udemy. We provide the tools and skills to teach what you love.
              <br /><br />
              <a href="instructor/register" class="boxed-btn5">Start teaching</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!--  image right  -->
    <div class="row mt-5">
      <div class="col-md-6 order-md-6" data-aos="fade-left">
        <img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/img-2_vdgqgn.jpg" alt="" style="height: 280px;border-radius: 5px; width: 75%; margin-left: 5%;" />
      </div>
      <div class="col-md-6 order-md-1">
        <div class="row align-items-center h-100" data-aos="fade-up">
          <div class="col">
            <h1 class="display-6">Become an student</h1>
            <p>Push and pull classes were added to change the order on desktop but still have the image before the text on mobile.
              <br /><br />
              <a href="register" class="boxed-btn5">Start learning</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>




  <div class="site-section bg-image2 overlay" id="contact-section" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-bold text-black" style="margin-top: 5%; color: #fff;">Contact Us</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, explicabo, quasi. Magni deserunt sunt labore.</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-7 mb-5">
            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Contact Form</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control rounded-0">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control rounded-0" placeholder="Leave your message here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="boxed-btn5">
                </div>
              </div>
            </form>
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
<script src="{{asset('/dist/js/aos.js')}}"></script>
<script src="{{asset('/dist/js/main.js')}}"></script>

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

  //course owl carousel
  $(document).ready(function(){
    if($('.bbb_viewed_slider').length)
    {
      var viewedSlider = $('.bbb_viewed_slider');
      viewedSlider.owlCarousel({
        loop:true,
        margin:30,
        autoplay:true,
        autoplayTimeout:6000,
        nav:false,
        dots:false,
        responsive:
          {
            0:{items:1},
            575:{items:1},
            768:{items:1},
            991:{items:3},
            1199:{items:3}
          }
      });
    }
  });
</script>
</body>
</html>