@extends('front.template')
@section('content')
<div class="wrap">
<section class="site-section py-lg">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Informasi Pendaftaran
            </div>
            <div class="card-body">
                <h5 class="card-title">Untuk informasi lebih lanjut, klik button dibawah ini: </h5>
                <!-- <p class="card-text">Untuk Informasi lebih lanjut dapat dicek.</p> -->
                <a href="//google.com" class="btn btn-primary">Cek Disini</a>
                <a href="{{base_url('ppdb/santri/kartu') }}" class="btn" style="background-color:#408ab4; color:white;"><i class="fa fa-download"></i> Kartu Peserta</a>
            </div>
        </div>
    </div>

</section>
</div>

@endsection