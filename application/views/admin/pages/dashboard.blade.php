 @extends('admin.template') @section('content')

<!-- Page Heading -->
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      Laman Utama
      <small>Pondok Pesantren Darun Najah</small>
    </h1>
    <ol class="breadcrumb">
      <li class="active">
        <i class="fa fa-dashboard"></i> Dashboard
      </li>
    </ol>
  </div>
</div>
<!-- /.row -->

<div class="row">
  <div class="col-lg-12">
  </div>
</div>
<!-- /.row -->

<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-green">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-users fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">{!! $santri !!}</div>
            <div>Total data santri terverivikasi</div>
          </div>
        </div>
      </div>
    <a href="{{ base_url('admin/santri/all') }}">
        <div class="panel-footer">
          <span class="pull-left">Selengkapnya</span>
          <span class="pull-right">
            <i class="fa fa-arrow-circle-right"></i>
          </span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-green">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-paperclip fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">{{ $post }}</div>
            <div>Total postingan berita</div>
          </div>
        </div>
      </div>
    <a href="{{ base_url('admin/berita') }}">
        <div class="panel-footer">
          <span class="pull-left">Selengkapnya</span>
          <span class="pull-right">
            <i class="fa fa-arrow-circle-right"></i>
          </span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-yellow">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-money fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">{{ $tanggungan }}</div>
            <div>Tanggungan Santri</div>
          </div>
        </div>
      </div>
    <a href="{{ base_url('admin/tanggungan')}}">
        <div class="panel-footer">
          <span class="pull-left">View Details</span>
          <span class="pull-right">
            <i class="fa fa-arrow-circle-right"></i>
          </span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>
</div>
<!-- /.row -->
@stop
