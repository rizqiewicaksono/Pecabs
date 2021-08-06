<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PECABS - Pelestarian Cagar Budaya</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('/ebusiness')}}/img/favicon.png" rel="icon">
  <link href="{{asset('/ebusiness')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('/ebusiness')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('/ebusiness')}}/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="{{asset('/ebusiness')}}/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="{{asset('/ebusiness')}}/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="{{asset('/ebusiness')}}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{asset('/ebusiness')}}/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{asset('/ebusiness')}}/lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="{{asset('/ebusiness')}}/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('/ebusiness')}}/css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{asset('/ebusiness')}}/css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="/">
                  <h1>PECABS</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="{{asset('/ebusiness')}}/img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="/">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">About</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#team">Team</a>
                  </li>

                  <li>
                    <a class="page-scroll" href="#blog">Cagar Budaya</a>
                  </li>
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Masuk<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      @if (Route::has('login'))
                              @auth
                                  <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                              @else
                                  <li><a href="{{ route('login') }}">Login</a></li>

                                  @if (Route::has('register'))
                                      <li><a href="{{ route('register') }}">Register</a></li>
                                  @endif
                              @endauth
                      @endif
                    </ul>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->
    @yield('content')
  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2>PECABS</h2>
                </div>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Information</h4>
                <p>
                  PECABS merupakan Aplikasi Web yang dibuat oleh Kelompok 11 Kelas A
                </p>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="{{asset('/ebusiness')}}/img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="{{asset('/ebusiness')}}/img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="{{asset('/ebusiness')}}/img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="{{asset('/ebusiness')}}/img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="{{asset('/ebusiness')}}/img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="{{asset('/ebusiness')}}/img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>PECABS</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('/ebusiness')}}/lib/jquery/jquery.min.js"></script>
  <script src="{{asset('/ebusiness')}}/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{asset('/ebusiness')}}/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="{{asset('/ebusiness')}}/lib/venobox/venobox.min.js"></script>
  <script src="{{asset('/ebusiness')}}/lib/knob/jquery.knob.js"></script>
  <script src="{{asset('/ebusiness')}}/lib/wow/wow.min.js"></script>
  <script src="{{asset('/ebusiness')}}/lib/parallax/parallax.js"></script>
  <script src="{{asset('/ebusiness')}}/lib/easing/easing.min.js"></script>
  <script src="{{asset('/ebusiness')}}/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="{{asset('/ebusiness')}}/lib/appear/jquery.appear.js"></script>
  <script src="{{asset('/ebusiness')}}/lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{asset('/ebusiness')}}/contactform/contactform.js"></script>

  <script src="{{asset('/ebusiness')}}/js/main.js"></script>
</body>

</html>
