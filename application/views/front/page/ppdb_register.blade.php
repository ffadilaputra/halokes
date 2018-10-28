@extends('front.no_header')

  @section('content')
        <!--about start -->
  <section id="profil" class="about">
    <div class="section-heading text-center">
      <h2>Profil</h2>
    </div>
    <div class="container">
      <div class="about-content">
        <div class="row">
          <div class="col-sm-6">
            <div class="single-about-txt">
              <h3>
                Daftar
              </h3>
              <div class="row">
                <?= form_open('ppdb/santri/store') ?>
                <div class="col-md-8">
                  <div class="single-about-add-info">
                        <h3>ID</h3>
                        <input name="id_santri" type="text" class="form-control">
                        @if($errors->has('id_santri'))
                          <small class="text-danger">{{ $errors->first('id_santri') }}</small>
                        @endif
                  </div>
                  <div class="single-about-add-info">
                    <h3>NIS</h3>
                    <input name="nis" type="text" class="form-control">
                    @if($errors->has('nis'))
                      <small class="text-danger">{{ $errors->first('nis') }}</small>
                    @endif
                  </div>
                  <div class="single-about-add-info">
                    <h3>Nama Lengkap</h3>
                    <input name="nama_lengkap" type="text" class="form-control">
                      @if($errors->has('nama_lengkap'))
                        <small class="text-danger">{{ $errors->first('nama_lengkap') }}</small>
                      @endif
                  </div>
                  <div class="single-about-add-info">
                      <h3>Panggilan</h3>
                      <input name="panggilan" type="text" class="form-control">
                        @if($errors->has('panggilan'))
                          <small class="text-danger">{{ $errors->first('panggilan') }}</small>
                        @endif
                    </div>
                    <div class="single-about-add-info">
                        <h3>NIK</h3>
                        <input name="nik" type="text" class="form-control">
                          @if($errors->has('nik'))
                            <small class="text-danger">{{ $errors->first('nik') }}</small>
                          @endif
                    </div>
                    <div class="single-about-add-info">
                        <h3>Tepat Lahir</h3>
                        <input name="tempat_lahir" type="text" class="form-control">
                          @if($errors->has('tempat_lahir'))
                            <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                          @endif
                    </div>
                    <div class="single-about-add-info">
                        <h3>Tangal Lahir</h3>
                        <input name="tgl_lahir" type="date" class="form-control">
                          @if($errors->has('tgl_lahir'))
                            <small class="text-danger">{{ $errors->first('tgl_lahir') }}</small>
                          @endif
                    </div>
                    <div class="single-about-add-info">
                        <h3>Alamat</h3>
                        <textarea name="alamat" type="text" class="form-control"></textarea>
                          @if($errors->has('alamat'))
                            <small class="text-danger">{{ $errors->first('alamat') }}</small>
                          @endif
                    </div>
                    <div class="single-about-add-info">
                        <h3>Kelurahan</h3>
                        <input name="kelurahan" type="text" class="form-control">
                          @if($errors->has('kelurahan'))
                            <small class="text-danger">{{ $errors->first('kelurahan') }}</small>
                          @endif
                    </div>
                    <div class="single-about-add-info">
                        <h3>Kecamatan</h3>
                        <input name="kecamatan" type="text" class="form-control">
                          @if($errors->has('kecamatan'))
                            <small class="text-danger">{{ $errors->first('kecamatan') }}</small>
                          @endif
                    </div>
                    <div class="single-about-add-info">
                        <h3>Kota</h3>
                        <input name="kota" type="text" class="form-control">
                          @if($errors->has('kota'))
                            <small class="text-danger">{{ $errors->first('kota') }}</small>
                          @endif
                    </div>
                    <div class="single-about-add-info">
                        <h3>Profinsi</h3>
                        <input name="provinsi" type="text" class="form-control">
                          @if($errors->has('provinsi'))
                            <small class="text-danger">{{ $errors->first('provinsi') }}</small>
                          @endif
                    </div>
                    <div class="single-about-add-info">
                        <h3>Kodepos</h3>
                        <input name="kode_pos" type="text" class="form-control" maxlength="5">
                          @if($errors->has('kode_pos'))
                            <small class="text-danger">{{ $errors->first('kode_pos') }}</small>
                          @endif
                    </div>
                    <div class="single-about-add-info">
                        <h3>Telepon</h3>
                        <input name="telepon" type="text" class="form-control">
                          @if($errors->has('telepon'))
                            <small class="text-danger">{{ $errors->first('telepon') }}</small>
                          @endif
                    </div>
                  <div class="single-about-add-info">
                      <input type="submit" class="form-control">
                  </div>
                </div>
                <?= form_close() ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/.about-->
  <!--about end -->
  @endsection
