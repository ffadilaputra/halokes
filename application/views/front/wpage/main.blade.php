@extends('front.template')

@section('content')
<div class="wrap">
  <section class="site-section pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="owl-carousel owl-theme home-slider">
            <div>
              <a href="#" class="a-block d-flex align-items-center height-lg" style="background-image: url('{{'assets/images/img1-min.jpg'}}'); ">
              </a>
            </div>
            <div>
              <a href="#" class="a-block d-flex align-items-center height-lg" style="background-image: url('{{'assets/images/img2-min.jpg'}}'); ">
              </a>
            </div>
            <div>
              <a href="#" class="a-block d-flex align-items-center height-lg" style="background-image: url('{{'assets/images/img3-min.jpg'}}'); ">
              </a>
            </div>
          </div>

        </div>
      </div>

    </div>


  </section>
  <!-- END section -->

  <section class="site-section py-sm">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="mb-4">Berita Terbaru</h2>
        </div>
      </div>
      <div class="row blog-entries">
        <div class="col-md-12 col-lg-12 main-content">
          <div class="row">
            @foreach($article as $data)
            <div class="col-md-4">
              <a href="{{ base_url('blog/detail/').$data->id_news }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="{{ base_url('assets/uploads/').$data->thumb }}" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2">
                      {!! $data->detailNews->nama_lengkap !!}</span>&bullet;
                      <span class="mr-2">{!! $data->created_at !!}</span> &bullet;
                      <span class="ml-2"><span class="fa fa-tag"> {!!$data->id_news_category !!}</span></span>
                    </div>
                    <h2>{!! $data->title !!}</h2>
                  </div>
                </a>
              </div>
              @endforeach
            </div>
          </div>

          <!-- END main-content -->


        </div>
      </div>

      <ul class="pagination">
          <li class="page-item">
            <a class="page-link">{!! $pagination !!}</a>
          </li>
        </ul>
      </div>

    </section>
    <!-- END section -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>
  @endsection
