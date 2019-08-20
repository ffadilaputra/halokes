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
            <div class="huge">{!! $belum_lunas !!}</div>
            <div>Data santri belum lunas</div>
          </div>
        </div>
      </div>
    <a href="{{ site_url('admin/santri/all') }}">
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
    <a href="{{ site_url('admin/berita') }}">
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
    <a href="{{ site_url('admin/tanggungan')}}">
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
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-yellow">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-money fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">{{ $lunas }}</div>
            <div>Total santri Lunas</div>
          </div>
        </div>
      </div>
    <a href="{{ site_url('admin/tanggungan')}}">
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
<ol class="breadcrumb">
  <li class="active">
    <i class="fa fa-user"></i> Rekap jumlah santri baru terverifikasi
  </li>
</ol>
<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-green">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-users fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">{!! $mt !!}</div>
            <div>Santri baru Madarasah Tsanawiyah</div>
          </div>
        </div>
      </div>
    <a href="{{ site_url('admin/santri/mts') }}">
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
            <i class="fa fa-users fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">{!! $ma !!}</div>
            <div>Santri baru Madarasah Aliyah</div>
          </div>
        </div>
      </div>
    <a href="{{ site_url('admin/santri/ma') }}">
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
            <i class="fa fa-users fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">{!! $md !!}</div>
            <div>Santri baru Madarasah Diniyah</div>
          </div>
        </div>
      </div>
    <a href="{{ site_url('admin/santri/md') }}">
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
</div>

<ol class="breadcrumb">
  <li class="active">
    <i class="fa fa-user"></i> Rekap jumlah Aktif
  </li>
</ol>

<div class="col-lg-3 col-md-6">
  <div class="panel panel-green">
    <div class="panel-heading">
      <div class="row">
        <div class="col-xs-3">
          <i class="fa fa-users fa-5x"></i>
        </div>
        <div class="col-xs-9 text-right">
          <div class="huge">{!! $ma_putra !!}</div>
          <div>Jumlah santri MA putra aktif</div>
        </div>
      </div>
    </div>
  <a href="{{ site_url('admin/santri/ma') }}">
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
          <i class="fa fa-users fa-5x"></i>
        </div>
        <div class="col-xs-9 text-right">
          <div class="huge">{!! $ma_putri !!}</div>
          <div>Jumlah santri MA putri aktif</div>
        </div>
      </div>
    </div>
  <a href="{{ site_url('admin/santri') }}">
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
          <i class="fa fa-users fa-5x"></i>
        </div>
        <div class="col-xs-9 text-right">
          <div class="huge">{!! $mt_putra !!}</div>
          <div>Jumlah santri MT putra aktif</div>
        </div>
      </div>
    </div>
  <a href="{{ site_url('admin/santri') }}">
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
          <i class="fa fa-users fa-5x"></i>
        </div>
        <div class="col-xs-9 text-right">
          <div class="huge">{!! $mt_putri !!}</div>
          <div>Jumlah santri MT putri aktif</div>
        </div>
      </div>
    </div>
  <a href="{{ site_url('admin/santri') }}">
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
          <i class="fa fa-users fa-5x"></i>
        </div>
        <div class="col-xs-9 text-right">
          <div class="huge">{!! $belum_aktif !!}</div>
          <div>Jumlah santri belum aktif</div>
        </div>
      </div>
    </div>
  <a href="{{ site_url('admin/santri') }}">
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
</div>
<!-- /.row -->
@stop
