@extends('front.template')
@section('content')

<div class="wrap">
<section class="site-section pt-5">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-6">
          <h2 class="mb-4">Mauidhoh</h2>
        </div>
      </div>
      <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
          <div class="row mb-5 mt-5">
            @foreach($article as $data)
            <div class="col-md-12">
              <div class="post-entry-horzontal">
                <a href="#">
                <div class="image element-animate fadeIn element-animated" data-animate-effect="fadeIn" style="background-image: url({{ base_url('assets/wordify/') }}images/img_10.jpg);"></div>
                  <span class="text">
                    <div class="post-meta">
                    <span class="author mr-2"><img src="#">{{ $data->detailNews->nama_lengkap }}</span>•
                      <span class="mr-2">{{ $data->created_at }}</span>
                      <span class="mr-2">{{ $data->id_news_category }}</span>
                    </div>
                    <h2>{{ $data->title }}</h2>
                  </span>
                </a>
              </div>
              <!-- END post -->
            </div>
          </div>
        </div>
          @endforeach
        <!-- END main-content -->
      </div>
    </div>
  </section>
</div>
@endsection
