@extends('front.template')
@section('content')
<!--about start -->
<section id="profil" class="about" style="background-color:#f9fbfd">
   <!-- <div class="section-heading text-center">
      <h2>Profil</h2>
   </div> -->
   <div class="container">
      <?= form_open('ppdb/santri/store') ?>
      <!-- <div class="row"> -->
      <div class="col-md-offset-1 col-md-5  col-sm-12">
         <div class="single-contact-box">
            <div class="contact-form">
               <div class="single-about-txt">
                  <h3>
                     Daftar
                  </h3>
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="form-group">
                          <!-- nis -->

                           <div class="single-about-add-info">
                              <h3>NIS</h3>
                              <input name="nis" type="text" class="form-control">
                              @if($errors->has('nis'))
                              <small class="text-danger">{{ $errors->first('nis') }}</small>
                              @endif
                           </div>
                        </div>

                        <!-- nama lengkap -->
                        <div class="single-about-add-info">
                           <h3>Nama Lengkap</h3>
                           <input name="nama_lengkap" type="text" class="form-control">
                           @if($errors->has('nama_lengkap'))
                           <small class="text-danger">{{ $errors->first('nama_lengkap') }}</small>
                           @endif
                        </div>

                        <!-- panggilan -->
                        <div class="single-about-add-info">
                           <h3>Panggilan</h3>
                           <input name="panggilan" type="text" class="form-control">
                           @if($errors->has('panggilan'))
                           <small class="text-danger">{{ $errors->first('panggilan') }}</small>
                           @endif
                        </div>

                        <!-- nik -->
                        <div class="single-about-addcd-info">
                           <h3>NIK</h3>
                           <input name="nik" type="text" class="form-control">
                           @if($errors->has('nik'))
                           <small class="text-danger">{{ $errors->first('nik') }}</small>
                           @endif
                        </div>

                        <!-- row start -->
                        <div class="row">
                          <!-- tempat lahir -->
                          <div class="col-sm-6 col-xs-12">
                            <div class="single-about-add-info">
                              <h3>Tempat Lahir</h3>
                              <input name="tempat_lahir" type="text" class="form-control">
                              @if($errors->has('tempat_lahir'))
                              <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                              @endif
                          </div>
                            <!--/.form-group-->
                          </div>
                          <!--/.col-->
                          <!-- tanggal lahir -->
                          <div class="col-sm-6 col-xs-12">
                            <div class="single-about-add-info">
                              <h3>Tangal Lahir</h3>
                              <input name="tgl_lahir" type="date" class="form-control">
                              @if($errors->has('tgl_lahir'))
                              <small class="text-danger">{{ $errors->first('tgl_lahir') }}</small>
                              @endif
                            </div>
                            <!--/.form-group-->
                          </div>
                          <!--/.col-->
                        </div>
                        <!--/.row end-->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- </div> -->

      <!-- <div class="row"> -->
      <div class="col-md-offset-1 col-md-5  col-sm-12">
         <div class="single-contact-box">
            <div class="contact-form">
               <div class="single-about-txt">
                  <h3>
                     Daftar
                  </h3>
                  <div class="row">
                     <div class="col-sm-12">

                        <!-- alamat -->
                        <div class="single-about-add-info">
                           <h3>Alamat</h3>
                           <textarea name="alamat" type="text" class="form-control"></textarea>
                           @if($errors->has('alamat'))
                           <small class="text-danger">{{ $errors->first('alamat') }}</small>
                           @endif
                        </div>

                        <!-- row start -->
                        <div class="row">
                          <!-- kelurahan -->
                          <div class="col-sm-6 col-xs-12">
                            <div class="single-about-add-info">
                              <h3>Kelurahan</h3>
                              <input name="kelurahan" type="text" class="form-control">
                              @if($errors->has('kelurahan'))
                              <small class="text-danger">{{ $errors->first('kelurahan') }}</small>
                              @endif
                            </div>
                            <!--/.form-group-->
                          </div>
                          <!--/.col-->
                          <!-- kecamatan -->
                          <div class="col-sm-6 col-xs-12">
                            <div class="single-about-add-info">
                              <h3>Kecamatan</h3>
                              <input name="kecamatan" type="text" class="form-control">
                              @if($errors->has('kecamatan'))
                              <small class="text-danger">{{ $errors->first('kecamatan') }}</small>
                              @endif
                            </div>
                            <!--/.form-group-->
                            </div>
                          <!--/.col-->
                        </div>
                        <!--/.row end-->

                        <!-- row start -->
                        <div class="row">
                          <!-- kota -->
                          <div class="col-sm-6 col-xs-12">
                            <div class="single-about-add-info">
                              <h3>Kota</h3>
                              <input name="kota" type="text" class="form-control">
                              @if($errors->has('kota'))
                              <small class="text-danger">{{ $errors->first('kota') }}</small>
                              @endif
                            </div>
                            <!--/.form-group-->
                          </div>
                          <!--/.col-->
                          <!-- provinsi -->
                          <div class="col-sm-6 col-xs-12">
                            <div class="single-about-add-info">
                              <h3>Provinsi</h3>
                              <input name="provinsi" type="text" class="form-control">
                              @if($errors->has('provinsi'))
                              <small class="text-danger">{{ $errors->first('provinsi') }}</small>
                              @endif
                            </div>
                            <!--/.form-group-->
                            </div>
                          <!--/.col-->
                        </div>
                        <!--/.row end-->

                        <!-- kodepos -->
                        <div class="single-about-add-info">
                           <h3>Kodepos</h3>
                           <input name="kode_pos" type="text" class="form-control" maxlength="5">
                           @if($errors->has('kode_pos'))
                           <small class="text-danger">{{ $errors->first('kode_pos') }}</small>
                           @endif
                        </div>

                        

                        <!-- telepon -->
                        <div class="single-about-add-info">
                           <h3>Telepon</h3>
                           <div class="form-group input-group">
                                <span class="input-group-addon" value="0">+62</span>
                                <input type="number" name="telepon" class="form-control">
                                @if($errors->has('telepon'))
                                <small class="text-danger">{{ $errors->first('telepon') }}</small>
                                @endif
                           </div>
                        </div>
                        <div class="single-contact-btn">
                           <input type="submit" class="contact-btn" style="background-color:#b636ff">
                           <!-- <a class="contact-btn" href="#" role="button">submit</a> -->
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- </div> -->
      <?= form_close() ?>
   </div>
</section>
<!--/.about-->
<!--about end -->
@endsection