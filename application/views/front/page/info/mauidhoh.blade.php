@extends('front.template_blog')

@section('content')
<!--info start -->
<section id="info" class="education">
  <div class="section-heading text-center">
    <h2 class="head-section">Mauidhoh</h2>
  </div>
  <div class="container">
    <div class="experience-content col-lg-12">

      @foreach($mauidhoh as $data)
      <div class="mau-panel col-lg-4 col-sm-12">
        <div class="panel">
          <div class="panel-heading panel-heading-plus">
              <h3 class="panel-title"><a href="{{base_url()}}blog/mauidhoh/show/{{$data->id}}">{{ $data->title }}</a></h3>
              <?php
              $date = new DateTime($data->created_at);
              ?>
              <span>{{ $date->format('d-m-Y h:m:s') }} WIB</span>
          </div>
          <div class="panel-body">
            {!! $data->description !!}
          </div>
        </div>
      </div>
      @endforeach
      <!-- end panel -->

    </div>
    <!--.mauidhoh-content-->
  </div>

</section>
<!--/.info-->

@endsection
