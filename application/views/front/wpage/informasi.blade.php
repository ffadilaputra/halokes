@extends('front.template')

@section('content')
<div class="wrap">

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
              <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="{{ base_url('assets/wordify') }}/images/img_5.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2"><img src="{{ base_url('assets/wordify') }}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">{{ $data->created_at }}</span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> {{ $data->detailNews->nama_lengkap }}</span>
                  </div>
                  <h2>{{ $data->title }}</h2>
                </div>
              </a>
            </div>
            @endforeach
          </div>
        </div>
        <!-- END main-content -->
      </div>
    </div>
  </section>
  <!-- END section -->
</div>

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>
@include('front.partials.modal')
@endsection
