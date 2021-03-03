<style type="text/css">
    .navbar ul li:nth-child(3) a{
      color: #007bff;
    }
    .navbar.solid ul li:nth-child(3) a{
      color: #007bff;
    }
</style>

@extends('layouts.app')
@section('title')
  About Us
@endsection

@section('content')
  <div class="site-blocks-cover overlay" style="background-image: url(images/logo1.jpg);" data-aos="fade">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">                
          <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center">
              <h1 style="color: #fff; font-weight: normal;">
                About Us
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 


  <section class="intro py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="intro-box w-100 d-flex">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="fa fa-phone"></span>
              </div>
              <div class="text pl-3">
                <h4 class="mb-0">Call us: +12 234 456 7890</h4>
                <span> 198 West 21th Street, Suite 721 New York NY 10016</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="intro-box w-100 d-flex">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="fa fa-clock-o"></span>
              </div>
              <div class="text pl-3">
                <h4 class="mb-0">Opening Hours</h4>
                <span>Mon - Sat 7:00 AM - 8:00 PM / Sundays closed</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="intro-box w-100">
              <p class="mb-0"><a href="#" class="btn btn-primary">Make an Appointment</a></p>
            </div>
          </div>
        </div>
      </div>  
    </section>
    
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Why coaching work?</h2>
            <span class="subheading">Other Services</span>
          </div>
        </div>
        <div class="row d-flex no-gutters">
          <div class="col-md-6 d-flex">
            <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end mb-4 mb-sm-0" style="background-image:url(images/about_1.jpg);">
              <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                <span class="fa fa-play"></span>
              </a>
            </div>
          </div>
          <div class="col-md-6 pl-md-5 py-md-5">
            <div class="services-2 w-100 d-flex">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-account"></span></div>
              <div class="text pl-4">
                <h4>Accountability</h4>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
              </div>
            </div>
            <div class="services-2 w-100 d-flex">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-skills"></span></div>
              <div class="text pl-4">
                <h4>Expertise</h4>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
              </div>
            </div>
            <div class="services-2 w-100 d-flex">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-performance"></span></div>
              <div class="text pl-4">
                <h4>Speed</h4>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
              </div>
            </div>
            <div class="services-2 w-100 d-flex">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-event"></span></div>
              <div class="text pl-4">
                <h4>Delivery</h4>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter" id="section-counter">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="50">0</strong>
              </div>
              <div class="text">
                <span>Years of Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="8500">0</strong>
              </div>
              <div class="text">
                <span>Successful Entrepreneurs</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="378">0</strong>
              </div>
              <div class="text">
                <span>Companies Founded</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="1200">0</strong>
              </div>
              <div class="text">
                <span>Book, DVD's and Podcasts</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Our Life Coach</h2>
            <span class="subheading">Team &amp; Staff</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(images/staff-1.jpg);"></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>Lloyd Wilson</h3>
                <span class="position mb-2">Life Coach</span>
                <div class="faded">
                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(images/staff-2.jpg);"></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>Rachel Parker</h3>
                <span class="position mb-2">Life &amp; Business Coach</span>
                <div class="faded">
                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(images/staff-3.jpg);"></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>Ian Smith</h3>
                <span class="position mb-2">Executive Coach</span>
                <div class="faded">
                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(images/staff-4.jpg);"></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>Alicia Henderson</h3>
                <span class="position mb-2">Health Coach</span>
                <div class="faded">
                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(images/staff-5.jpg);"></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>Lloyd Wilson</h3>
                <span class="position mb-2">Executive Coach</span>
                <div class="faded">
                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(images/staff-6.jpg);"></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>Rachel Parker</h3>
                <span class="position mb-2">Life Coach</span>
                <div class="faded">
                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(images/staff-7.jpg);"></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>Ian Smith</h3>
                <span class="position mb-2">Health Coach</span>
                <div class="faded">
                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(images/staff-8.jpg);"></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>Fred Henderson</h3>
                <span class="position mb-2">Executive Coach</span>
                <div class="faded">
                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection