@extends ('layouts.frontend')

@section('content')

<!-- Start Slider Area -->
<div id="home" class="slider-area">
  <div class="bend niceties preview-2">
    <div id="ensign-nivoslider" class="slides">
      <img src="{{asset('/ebusiness')}}/img/slider/slider2.jpg" alt="" title="#slider-direction-1" />
      <img src="{{asset('/ebusiness')}}/img/slider/slider3.jpg" alt="" title="#slider-direction-2" />
      <img src="{{asset('/ebusiness')}}/img/slider/slider1.jpg" alt="" title="#slider-direction-3" />
    </div>

    <!-- direction 1 -->
    <div id="slider-direction-1" class="slider-direction slider-one">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content">
              <!-- layer 1 -->
              <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
              </div>
              <!-- layer 2 -->
              <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                <h1 class="title2">Sering Melihat Kerusakan di Cagar Budaya?</h1>
              </div>
              <!-- layer 3 -->
              <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <a class="ready-btn right-btn page-scroll" href="/laporan">Laporkan Segera!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- direction 2 -->
    <div id="slider-direction-2" class="slider-direction slider-two">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <!-- layer 1 -->
              <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
              </div>
              <!-- layer 2 -->
              <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                <h1 class="title2">Cagar Budaya yang Anda Kunjungi Tidak Bersih?</h1>
              </div>
              <!-- layer 3 -->
              <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <a class="ready-btn right-btn page-scroll" href="/laporan">Laporkan Segera!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- direction 3 -->
    <div id="slider-direction-3" class="slider-direction slider-two">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content">
              <!-- layer 1 -->
              <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
              </div>
              <!-- layer 2 -->
              <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                <h1 class="title2">Sering Mendapati Serpihan dari Kerusakan Cagar Budaya?</h1>
              </div>
              <!-- layer 3 -->
              <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <a class="ready-btn right-btn page-scroll" href="/laporan">Laporkan Segera!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Slider Area -->

<!-- Start About area -->
<div id="about" class="about-area area-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>About</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- single-well start-->
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="well-left">
          <div class="single-well">
            <a href="#">
                <img src="{{asset('/ebusiness')}}/img/about/6.jpg" alt="">
              </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="well-middle">
          <div class="single-well">
            <a href="#">
              <h4 class="sec-head">PECABS</h4>
            </a>
            <p>
              Sebuah sistem yang bertujuan untuk mengedukasi dan mengajak masyarakat berperan aktif dalam pelestarian Cagar Budaya yang ada di Yogyakarta.
            </p>
            <ul>
              <li>
                <i class="fa fa-check"></i> Kebersihan Cagar Budaya Terjaga
              </li>
              <li>
                <i class="fa fa-check"></i> Kelestarian Cagar Budaya Terjaga
              </li>
              <li>
                <i class="fa fa-check"></i> Wawasan Mengenai Cagar Budaya Bertambah
              </li>
              <li>
                <i class="fa fa-check"></i> Kerusakan Cagar Budaya Semakin Berkurang
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End col-->
    </div>
  </div>
</div>
<!-- End About area -->

<!-- Start team Area -->
<div id="team" class="our-team-area area-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>Team</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="team-top">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                  <img src="{{asset('/ebusiness')}}/img/team/1.jpg" alt="">
                </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                  </li>
                  <li>
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                  </li>
                  <li>
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h4>Bayu Herdianto</h4>
              <p>18523278</p>
              <p>Developer</p>
            </div>
          </div>
        </div>
        <!-- End column -->
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                  <img src="{{asset('/ebusiness')}}/img/team/2.jpg" alt="">
                </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                  </li>
                  <li>
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                  </li>
                  <li>
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h4>Rizqi Edining. W</h4>
              <p>18523117</p>
              <p>Tester</p>
            </div>
          </div>
        </div>
        <!-- End column -->
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                  <img src="{{asset('/ebusiness')}}/img/team/3.jpg" alt="">
                </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                  </li>
                  <li>
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                  </li>
                  <li>
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h4>Reza Cahya Nugraha</h4>
              <p>18523024</p>
              <p>Project Manager</p>
            </div>
          </div>
        </div>
        <!-- End column -->
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                  <img src="{{asset('/ebusiness')}}/img/team/4.jpg" alt="">
                </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                  </li>
                  <li>
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                  </li>
                  <li>
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h4>Fauzan Ananda. H</h4>
              <p>18523293</p>
              <p>Dokumenter</p>
            </div>
          </div>
        </div>
        <!-- End column -->
      </div>
    </div>
  </div>
</div>
<!-- End Team Area -->

<!-- Start Testimonials -->
<div class="testimonials-area">
  <div class="testi-inner area-padding">
    <div class="testi-overly"></div>
    <div class="container ">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <!-- Start testimonials Start -->
          <div class="testimonial-content text-center">
            <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
            <!-- start testimonial carousel -->
            <div class="testimonial-carousel">
              <div class="single-testi">
                <div class="testi-text">
                  <p>
                    Aplikasi yang sangat membantu dalam menyalurkan keresahan masyarakat tentang kerusakan cagar budaya melalui fitur laporan.<br>Proses penanggulangan masalahnya cukup cepat.
                  </p>
                  <h6>Bayu</h6>
                </div>
              </div>
              <!-- End single item -->
              <div class="single-testi">
                <div class="testi-text">
                  <p>
                    Fitur laporannya sangat mudah untuk digunakan.<br>Proses verifikasi laporan yang kita kirim juga lumayan cepat.
                  </p>
                  <h6>Rizqi</h6>
                </div>
              </div>
              <!-- End single item -->
              <div class="single-testi">
                <div class="testi-text">
                  <p>
                    Aplikasi ini sangat membantu dalam menambah wawasan mengenai cagar budaya yang ada di Yogyakarta.<br>Penjelasan mengenai setiap cagar budaya sudah cukup jelas.
                  </p>
                  <h6>Reza</h6>
                </div>
              </div>
              <div class="single-testi">
                <div class="testi-text">
                  <p>
                    Ternyata banyak sekali cagar budaya yang belum dikenal oleh masyarakat.<br>Namun dengan aplikasi ini, masyarakat pun tau lebih banyak cagar budaya.
                  </p>
                  <h6>Fauzan</h6>
                </div>
              </div>
              <!-- End single item -->
            </div>
          </div>
          <!-- End testimonials end -->
        </div>
        <!-- End Right Feature -->
      </div>
    </div>
  </div>
</div>
<!-- End Testimonials -->
<!-- Start blog Area -->
      <section class="blog-area section-gap" id="blog">
      <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
        <div class="container">
          <div class="row d-flex justify-content-center">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
                <h1 class="mb-10">Cagar Budaya</h1>
              </div>
            </div>
          </div>          
          <div class="row">
            @foreach($cagaralams as $cagaralam)
            <div class="col-lg-3 col-md-6 single-blog">
              <div class="thumb">
                <img src="{{asset('storage/cagaralams/' . $cagaralam->image)}}" alt="">               
              </div>
              <p class="meta">{{$cagaralam->created_at->diffForHumans()}} | {!!$cagaralam->category->name!!}
              <div>
              <a href="blog-single.html">
                <h5>{{$cagaralam->name}}</h5>
              </a>
            </div>
              <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span>
                  <a href="{{route('cagaralams.view',$cagaralam->slug)}}" class="ready-btn">Read more</a>
                </span>    
            </div>
            @endforeach            
          </div>
        </div> 
        </div> 
      </section>
      <!-- End blog Area -->    
      </div>
    </div>
  </div>
</div>
<!-- End Contact Area -->
@stop
