@extends ('layouts.frontend')

@section('content')
<!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h1 class="title3">Cagar Budaya</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
<div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <!-- search option start -->
              <form action="#">
                <div class="search-option">
                  <input type="text" placeholder="Search...">
                  <button class="button" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                </div>
              </form>
              <!-- search option end -->
            </div>
            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
                <h4>Recent</h4>
                <div class="recent-post">
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
					<img src="{{asset('/ebusiness')}}/img/blog/1.jpg" alt="">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#">Masjid Gedhe Kauman</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
					<img src="{{asset('/ebusiness')}}/img/blog/2.jpg" alt="">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#">Museum Biologi</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
					<img src="{{asset('/ebusiness')}}/img/blog/3.jpg" alt=""></a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#">Museum TNI AD</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
												   <img src="{{asset('/ebusiness')}}/img/blog/4.jpg" alt="">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#">Stasiun Lempuyangan</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                </div>
              </div>
              <!-- recent end -->
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
	        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- single-blog start -->
              <article class="blog-post-wrapper">
                <div class="post-thumbnail">
                  <img src="{{asset('storage/cagaralams/' . $cagaralam->image)}}" alt="" />
                </div>
                <div class="post-information">
                  <h2>{{$cagaralam->name}}</h2>
                  <div class="entry-meta">
                    <span class="author-meta"><i class="fa fa-user"></i> <a href="#">Admin</a></span>
                    <span><i class="fa fa-clock-o"></i>{{$cagaralam->created_at->diffForHumans()}}</span>
                    <span class="tag-meta">
												<i class="fa fa-folder-o"></i>
												<a href="#">{!!$cagaralam->category->name!!}</a>
											</span>
                  </div>
                  <div class="entry-content">
 					{!!$cagaralam->description!!}
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->
  <div class="clearfix"></div>
@stop