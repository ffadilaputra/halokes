@extends('front.template_blog')

@section('content')
<!--info start -->
<section id="info" class="education">
  <div class="section-heading text-center">
    <h2 class="head-section">Informasi</h2>
  </div>
  <div class="container">
    <div class="experience-content col-lg-12">

      <div class="mau-panel col-lg-12 col-sm-12">
        <div class="panel">
          <div class="panel-heading panel-heading-plus">
            <h3 class="panel-title">{{ $info->title }}</h3>
            <?php
            $date = new DateTime($info->created_at);
            ?>
            <span>By {{ $info->posted_by }} | {{ $date->format('d-m-Y h:m:s') }} WIB</span>
          </div>
          <div class="panel-body">
            {!! $info->description !!}
          </div>
        </div>
      </div>
      <!-- end panel -->

    </div>
    <!--.mauidhoh-content-->
  </div>

</section>
<!--/.info-->

@endsection
