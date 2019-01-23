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
            <div class="col-md-4">
              <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                @if(is_null($data->thumb))
                  <img src="{{ base_url('assets/wordify') }}/images/img_5.jpg" alt="Image placeholder">
                    @else
                  <img src="{{ base_url('assets/uploads/').$data->thumb }}" alt="Image placeholder">
                @endif
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2">&bullet;
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
</div>
@endsection
