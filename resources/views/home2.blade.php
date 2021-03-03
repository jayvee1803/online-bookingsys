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


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

 <!-- font awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- AOS bootstrap and css -->
  <link rel="stylesheet" href="{{asset('/dist/css/aos.css')}}">
  <!-- customize css -->
  <link rel="stylesheet" type="text/css" href="{{asset('/dist/css/index.css')}}">

  <style type="text/css">
  .navbar ul li:nth-child(1) a{
    color: #007bff;
  }
  .navbar.solid ul li:nth-child(1) a{
    color: #007bff;
  }
  /*.navbar ul li a{
    color: #fff;
  }*/

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

        .owl-theme .owl-controls .owl-buttons div {
  background: transparent;
  color: #869791;
  font-size: 40px;
  line-height: 300px;
  margin: 0;
  padding: 0 60px;
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

    <nav id="nav" class="navbar fixed-top navbar-expand-sm" data-spy="affix">
      <div class="container">
        <a href="/home" class="navbar-brand">Company Logo</a>
        <a class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse" style="color: red;">☰</a>
        <div class="navbar-collapse collapse">
            <ul class="ml-auto navbar-nav">
                <li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="/course" class="nav-link">Courses</a></li>
              <li class="nav-item"><a href="/my-booklist/" class="nav-link">Booklist</a></li>
              <li class="nav-item"><a href="/aboutus" class="nav-link">About Us</a></li>
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

  <div class="site-blocks-cover overlay" style="background-image: url(images/logo1.jpg);" data-aos="fade">

    <div class="container">

      <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-6 mr-auto" style="margin-top: 15%;">
          <h1>Make Your Business More Profitable</h1>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p>
          <div>
            <a href="" class="boxed-btn5">Get Started</a>
          </div>
        </div>
      </div>

      <!-- <div class="row align-items-center justify-content-center text-center">
        <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">                
          <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center">
              <h1>
                <a href="" class="typewrite" data-period="2000" data-type='[ "Want to boost up learning skill?", "Let us settle this one.", "Come and make us your online tutor!", "We love to enhance your knowledge :)" ]' style="color: #fff; font-weight: normal; font-size: 35px;">
                  <span class="wrap"></span>
                </a>
              </h1>
            </div>
            <div class="program__content" >
                <a href="" class="boxed-btn5">view subjects</a>
              </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>  


  <section class="site-section" style="background-color: #f8fafe; padding: 2em 0;">
    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="p-3 box-with-humber">
            <h3 class="text-primary">Something interesting</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam iste rerum perferendis.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="p-3 box-with-humber">
            <h3 class="text-primary">Something interesting 2</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam iste rerum perferendis.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="p-3 box-with-humber">
            <h3 class="text-primary">Something interesting 3</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam iste rerum perferendis.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- our clients -->
  <section  id="work-section"> 
    <div class="row mb-5 justify-content-center text-center"  data-aos="fade-up">
      <div class="col-7 text-center">
        <h2 class="section-title">Our Clients</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.</p>
      </div>
    </div>

    <div class="image-box" data-aos="fade-up">
      <!-- <h3 class="title">Client 1</h3> -->
      <div class="content">
        <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
          <div class="content-overlay"></div>
          <img class="content-image" src="images/new/client1.jpg">
          <div class="content-details fadeIn-bottom fadeIn-left">
            <h3>This is a title</h3>
            <p>This is a short description</p>
          </div>
        </a>
      </div>
    </div>
    <div class="image-box" data-aos="fade-up" data-aos-delay="100">
      <!-- <h3 class="title">Client 2</h3> -->
      <div class="content">
        <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
          <div class="content-overlay"></div>
          <img class="content-image" src="images/new/client2.jpg">
          <div class="content-details fadeIn-bottom fadeIn-left">
            <h3>This is a title</h3>
            <p>This is a short description</p>
          </div>
        </a>
      </div>
    </div>
    <div class="image-box" data-aos="fade-up" data-aos-delay="200">
      <!-- <h3 class="title">Client 3</h3> -->
      <div class="content">
        <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
          <div class="content-overlay"></div>
          <img class="content-image" src="images/new/client3.jpg">
          <div class="content-details fadeIn-bottom fadeIn-left">
            <h3>This is a title</h3>
            <p>This is a short description</p>
          </div>
        </a>
      </div>
    </div>
  </section>
  <!-- our clients end -->

  <!-- our courses  -->
  <div class="popular_program_area section__padding program__page" style="padding: 2em 0;">
      <div class="container">
          <div class="row mb-5 justify-content-center text-center"  data-aos="fade-up">
            <div class="section_title col-7 text-center">
              <h2 class="section-title">Our Courses</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.</p>
            </div>
          </div>

          <div class="tab-content" id="nav-tabContent site-section">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="row ">
                
                <!-- <div class="bbb_viewed_slider_container"> -->
                  <div class="owl-carousel owl-theme bbb_viewed_slider">
                      @foreach($course as $course)
                        <!-- <div class="col-lg-4 col-md-6"> -->
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/1.png" alt="">
                                </div>
                                <div class="program__content">
                                    <h4>{{$course->course_name}}</h4>
                                    <p>{{$course->course_desc}}</p>
                                    <a href="course/{{$course->course_name}}" class="boxed-btn5">view subjects</a>
                                </div>
                            </div>
                        <!-- </div> -->
                      @endforeach

                  </div>
              <!-- </div> -->

              </div>           
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="course_all_btn text-center">
                  <a href="course" class="boxed-btn5">View All course</a>
              </div>
            </div>
          </div>

      </div>
  </div>



  <div class="site-section bg-image2 overlay" id="contact-section" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-bold text-black" style="margin-top: 5%; color: #fff;">Contact Us</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, explicabo, quasi. Magni deserunt sunt labore.</p>
          </div>
        </div>
        <!-- <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3 text-white">Contact Us</h2>
          </div>
        </div> -->
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
                  <input type="submit" value="Send Message" class="btn btn-primary mr-2 mb-2">
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
</script>


<script type="text/javascript">
    $(document).ready(function()
{


if($('.bbb_viewed_slider').length)
{
var viewedSlider = $('.bbb_viewed_slider');

viewedSlider.owlCarousel(
{
loop:true,
margin:30,
autoplay:true,
autoplayTimeout:6000,
dots:true,
nav:true,
navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
responsive:
{
0:{items:1},
575:{items:1},
768:{items:1},
991:{items:3},
1199:{items:3}
}
});

/*if($('.bbb_viewed_prev').length)
{
var prev = $('.bbb_viewed_prev');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}

if($('.bbb_viewed_next').length)
{
var next = $('.bbb_viewed_next');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});
}*/
}


});
</script>

</body>
</html>