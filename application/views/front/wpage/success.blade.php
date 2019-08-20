@extends('front.template')
@section('content')
<div class="wrap">
<section class="site-section py-lg">
    <div class="container">
      <div class="row">

      </div>
        <div class="card">
            <div class="card-header">
                Informasi Pendaftaran
            </div>
            <div class="card-body">
                <h5 class="card-title">Untuk informasi lebih lanjut, klik button dibawah ini: </h5>
                <!-- <p class="card-text">Untuk Informasi lebih lanjut dapat dicek.</p> -->
                <!-- <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="well well-sm">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                            <img src="https://via.placeholder.com/120x120?text=Contoh+Gambar" alt="" srcset="">
                            </div>
                            <div class="col-sm-6 col-md-8">
                              <h4> {{ $nomor }}</h4>
                                <small>
                                  <cite>{{ $santri['nama_lengkap'] }}<i class="glyphicon glyphicon-user">
                                </i>
                                </cite>
                              </small>
                              <p>
                                {{ $santri['tempat_lahir'] }}
                              </p>
                                <p>
                                    <i class="glyphicon glyphicon-picture"></i>@if($santri['tingkat_pendidikan'] == 'ma')
                                    {{ 'Madarasah Aliyah' }}
                                @elseif($santri['tingkat_pendidikan'] == 'mt')
                                    {{ 'Madarasah Tsanawiyah' }}
                                @elseif($santri['tingkat_pendidikan'] == 'md')
                                     {{ 'Madarasah Diniyah' }}
                                @endif
                                </p>
                                <a href="{{ base_url() }}" class="btn btn-primary">Cek Disini</a>
                            </div>
                        </div>
                    </div>
                </div> -->
             
                <a href="//google.com" class="btn btn-primary">Cek Disini</a>
                <a href="{{base_url('ppdb/santri/kartu') }}" class="btn" style="background-color:#408ab4; color:white;"><i class="fa fa-download"></i> Kartu Peserta</a>
                <a href="{{base_url('admin/pembayaran') }}" class="btn" style="background-color:#408ab4; color:white;"><i class="fa fa-download"></i> Bukti Pembayaran</a>
            </div>
        </div>
    </div>

</section>
</div>

@endsection
