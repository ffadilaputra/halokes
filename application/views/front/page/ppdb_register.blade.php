@extends('front.template')
@section('content')
<!--contact start -->
<section id="contact" class="contact">
  <br><br><br><br>
    <div class="section-heading text-center">
      <h2>FORMULIR PENDAFTARAN SANTRI BARU</h2>
    </div>
    <div class="container">
      <div class="contact-content">
      
        <div class="row">
          <?= form_open('ppdb/santri/store') ?>
          <div class="col-md-offset-1 col-md-5 col-sm-6">
            <div class="single-contact-box">
              <div class="contact-form">
                
                  <!-- nis -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="">NIS</label>
                        <input type="text" class="form-control" name="nis">
                        @if($errors->has('nis'))
                        <small class="text-danger">{{ $errors->first('nis') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

                  <!-- nama lengkap -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap">
                        @if($errors->has('nama_lengkap'))
                        <small class="text-danger">{{ $errors->first('nama_lengkap') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

                  <!-- panggilan -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="">Nama Panggilan</label>
                        <input type="text" class="form-control" name="panggilan">
                        @if($errors->has('panggilan'))
                        <small class="text-danger">{{ $errors->first('panggilan') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

                  <!-- nik -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="">NIK</label>
                        <input type="text" class="form-control" name="nik">
                        @if($errors->has('nik'))
                        <small class="text-danger">{{ $errors->first('nik') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

                  <!-- ttl -->
                  <div class="row">
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir">
                        @if($errors->has('tempat_lahir'))
                        <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control"  name="tgl_lahir">
                        @if($errors->has('tgl_lahir'))
                        <small class="text-danger">{{ $errors->first('tgl_lahir') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

                  <!-- telp -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="">Telepon</label>
                        <div class="form-group input-group">
                              <span class="input-group-addon" value="0">+62</span>
                              <input type="number" name="telepon" class="form-control">
                              @if($errors->has('telepon'))
                              <small class="text-danger">{{ $errors->first('telepon') }}</small>
                              @endif
                        </div>
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

              </div>
              <!--/.contact-form-->
            </div>
            <!--/.single-contact-box-->
          </div>
          <!--/.col-->

          <div class="col-md-offset-1 col-md-5 col-sm-6">
            <div class="single-contact-box">
              <div class="contact-form">
                  <!-- alamat -->
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="">Alamat</label>
                      <div class="form-group">
                        <textarea class="form-control" rows="3" id="comment" placeholder="Message"></textarea>
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->
               
                  <!-- kecamatan dan kelurahan -->
                  <div class="row">
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label for="">Kelurahan</label>
                        <input type="text" class="form-control" name="kelurahan">
                        @if($errors->has('kelurahan'))
                        <small class="text-danger">{{ $errors->first('kelurahan') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label for="">Kecamatan</label>
                        <input type="text" class="form-control"  name="kecamatan">
                        @if($errors->has('kecamatan'))
                        <small class="text-danger">{{ $errors->first('kecamatan') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

                  <!-- kota dan provinsi -->
                  <div class="row">
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label for="">Kota</label>
                        <input type="text" class="form-control" name="kota">
                        @if($errors->has('kota'))
                        <small class="text-danger">{{ $errors->first('kota') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label for="">Provinsi</label>
                        <input type="text" class="form-control"  name="provinsi">
                        @if($errors->has('provinsi'))
                        <small class="text-danger">{{ $errors->first('provinsi') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

                  <!-- telp -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="">Kodepos</label>
                        <input type="number" name="kode_pos" class="form-control">
                        @if($errors->has('kode_pos'))
                        <small class="text-danger">{{ $errors->first('kode_pos') }}</small>
                        @endif
                      
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="single-contact-btn">
                        <button type="submit" class="contact-btn">Submit</button>
                      </div>
                      <!--/.single-single-contact-btn-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->
              </div>
              <!--/.contact-form-->
            </div>
            <!--/.single-contact-box-->
          </div>
          <!--/.col-->
          <?= form_close() ?>
          
        </div>
        <!--/.row-->
      
      </div>
      <!--/.contact-content-->
    </div>
    <!--/.container-->
    
  </section>
  <!--/.contact-->
  <!--contact end -->
@endsection