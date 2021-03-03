<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="backend/img/apple-icon.png">
  <link rel="icon" type="image/png" href="backend/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">

      <div class="logo text-center mt-1">
        <div class="logo-image-small">
          <img src="http://via.placeholder.com/60x60" class="rounded-circle" alt="User Image">
        </div>
        <a href="https://www.creative-tim.com" class="text-center">
          Jayvee Santos
        </a>
        <br>
        <a href="#" style="font-size: 12px;"><i class="fa fa-circle text-succes"></i> Online</a>
      </div>

      <div class="sidebar-wrapper">
        <ul class="nav mt-0">
          <li class="active">
            <a class="pb-0" href="./dashboard.html">
              <i class="fa fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li>
            <a data-toggle="collapse" href="#pagesExamples" class="collapsed pb-0" aria-expanded="false">
              <i class="fa fa-list-alt"></i>
              <p>
                Courses <b class="caret mt-2 mr-2"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <li><a class="pl-5 pb-0 pt-0" href="#"><span class="fa fa-list-alt"><span> &nbsp All courses</a></li>
                <li><a class="pl-5 pb-0 pt-0" href="#"><span class="fa fa-plus-square"></span> &nbsp Add new</a></li>
              </ul>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#users" class="collapsed pb-0" aria-expanded="false">
              <i class="fa fa-user-o"></i>
              <p>
                Users <b class="caret mt-2 mr-2"></b>
              </p>
            </a>
            <div class="collapse" id="users">
              <ul class="nav">
                <li><a class="pl-5 pb-0 pt-0" href="#"><span class="fa fa-user-o"><span> &nbsp Students</a></li>
                <li><a class="pl-5 pb-0 pt-0" href="#"><span class="fa fa-user-o"></span> &nbsp Instructors</a></li>
              </ul>
            </div>
          </li>

          <li>
            <a class="pb-0" href="./map.html">
              <i class="fa fa-bookmark-o"></i>
              <p>Booklist</p>
            </a>
          </li>

          <li>
            <a class="pb-0" href="./tables.html">
              <i class="fa fa-comments-o"></i>
              <p>Chat support</p>
            </a>
          </li>
          <li>
            <a class="pb-0" href="./typography.html">
              <i class="fa fa-cogs"></i>
              <p>Settings</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="fa fa-sign-out"></i>
              <p>Log out</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<link rel="stylesheet" type="text/css" href="{{asset('backend/css/calendar.css')}}">

        <div class="row mb-1">
          <form class="calendar_form" autocomplete="off">
            <div >
              <div class="col-md-12 ml-3 p-0">
                <div class="input-group input-daterange"> 
                  <!-- <p>Filter :</p> -->
                  <input type="text" id="start" class="form-control text-left mr-2"> 
                  <span class="fa fa-calendar" id="fa-1"></span> 
                  <input type="text" id="end" class="form-control text-left ml-2"> 
                  <span class="fa fa-calendar" id="fa-2"></span> 
                </div>
              </div>
            </div>
          </form>
        </div>
<script type="text/javascript">
  $(document).ready(function(){

$('.input-daterange').datepicker({
format: 'dd-mm-yyyy',
autoclose: true,
calendarWeeks : true,
clearBtn: true,
disableTouchKeyboard: true
});

});
</script>


        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-title">{{$count}}<p>
                      <p class="card-category">Booklist</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <!-- <hr> -->
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Update Now
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">                    
                      <p class="card-title">₱{{$totprice}}<p>
                      <p class="card-category">Revenue</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <!-- <hr> -->
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  Last day
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-vector text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-title">{{$instructor}}<p>
                      <p class="card-category">Instructors</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <!-- <hr> -->
                <div class="stats">
                  <i class="fa fa-clock-o"></i>
                  In the last hour
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-favourite-28 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-title">{{$student}}<p>
                      <p class="card-category">Students</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <!-- <hr> -->
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Update now
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Sales Chart</h5>
              </div>
              <div class="card-body">
                <!-- <canvas id=chartHours width="400" height="100"></canvas> -->

                <div>
                  <div class="row pr-4">
                    <div class="col-md-12">
                      <canvas id="multiLineChart" height="110"></canvas>
                    </div>
                    <!-- <div class="col-md-1"></div> -->
                  </div>
                </div>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.min.js"></script>
                <script type="text/javascript">
                  // REF
                  // http://stackoverflow.com/questions/40094194/chart-js-line-graph-multitooltipkey-background-color-issue
                  var canvas = document.getElementById("multiLineChart");
                  var ctx = canvas.getContext('2d');
                    var data = {
                      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"],
                      datasets: [{
                        label: "Sales",
                        data: [5, 12, 14, 30, 15, 37, 19, 20, 35, 8, 25, 40],
                        borderColor: "rgba(0,0,255,0.2)",
                        backgroundColor:"rgba(0,0,255,0.2)"
                      // }, {
                      //   label: "Series B",
                      //   data: [5, 10, 30, 20, 15, 25, 35, 10, 30, 10, 20, 45],
                      //   borderColor: "rgba(255,0,0,0.8)",
                      //   backgroundColor:"rgba(255,0,0,0.5)"
                      }]
                    };

                      var options = {
                        tooltips: {
                         enabled: true, 
                         mode: 'label'
                       },          
                        legend: {
                          display: false,
                        }  
                      };

                  // Chart declaration:
                  var multiLineChart = new Chart(ctx, {
                    type: 'line',
                    data: data,
                    options: options
                  });
                </script>

              </div>
              <div class="card-footer ">
                <!-- <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Email Statistics</h5>
                <p class="card-category">Last Campaign Performance</p>
              </div>
              <div class="card-body ">
                <canvas id="chartEmail"></canvas>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-circle text-primary"></i> Opened
                  <i class="fa fa-circle text-warning"></i> Read
                  <i class="fa fa-circle text-danger"></i> Deleted
                  <i class="fa fa-circle text-gray"></i> Unopened
                </div>
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar"></i> Number of emails sent
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">NASDAQ: AAPL</h5>
                <p class="card-category">Line Chart with Points</p>
              </div>
              <div class="card-body">
                <canvas id="speedChart" width="400" height="100"></canvas>
              </div>
              <div class="card-footer">
                <div class="chart-legend">
                  <i class="fa fa-circle text-info"></i> Tesla Model S
                  <i class="fa fa-circle text-warning"></i> BMW 5 Series
                </div>
                <hr />
                <div class="card-stats">
                  <i class="fa fa-check"></i> Data information certified
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>


  <!--   Core JS Files   -->
  {{-- <script src="{{asset('backend/js/core/jquery.min.js')}}"></script>  --}}
  <script src="{{asset('backend/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('backend/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{asset('backend/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script>

  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
