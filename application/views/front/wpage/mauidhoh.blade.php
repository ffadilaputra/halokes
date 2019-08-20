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
        <div class="col-md-12 col-lg-12 main-content">
          <div class="row">
            @foreach($article as $data)
            <div class="col-md-12">
                <div class="post-entry-horzontal">
                    <a href="#">
                    <div class="image element-animate fadeIn element-animated" data-animate-effect="fadeIn" style="background-image: url({{ base_url('assets/images/ARABIAN_NIGHTS.svg') }});"></div>
                    <span class="text">
                    <div class="post-meta">
                      <span class="mr-2">{{ $data->created_at }}</span>
                      <span class="mr-2"> {{ $data->id_news_category }}</span>
                    <span class="ml-2"><span class="fa fa-user"></span> {{ $data->detailNews->nama_lengkap }}</span>
                    </div>
                      <h2> {{ $data->title }}</h2>
                    </span>
                    </a>
                    </div>
            </div>
            @endforeach
          </div>
        </div>
        <!-- END main-content -->
      </div>
      <ul class="pagination">
          <li class="page-item">
            <a class="page-link">{!! $pagination !!}</a>
          </li>
        </ul>
    </div>
  </section>
</div>
@endsection
