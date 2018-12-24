<?php $__env->startSection('content'); ?>
<!--contact start -->
<?= form_open('ppdb/santri/store') ?>
<section id="contact" class="contact">
  <br><br><br><br>
    <div class="section-heading text-center">
      <h2>FORMULIR PENDAFTARAN SANTRI BARU</h2>
    </div>
    <div class="container">
      <div class="contact-content">
        <div class="row">
          <div class="col-md-offset-1 col-md-5 col-sm-6">
            <div class="single-contact-box">
              <div class="contact-form">
                  <!-- nis -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="">NIS</label>
                        <input type="number" class="form-control" name="nis" value="<?php echo e(old('nis')); ?>">
                        <?php if($errors->has('nis')): ?>
                        <small class="text-danger"><?php echo e($errors->first('nis')); ?></small>
                        <?php endif; ?>
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
                        <input type="text" class="form-control" name="nama_lengkap" value="<?php echo e(old('nama_lengkap')); ?>">
                        <?php if($errors->has('nama_lengkap')): ?>
                        <small class="text-danger"><?php echo e($errors->first('nama_lengkap')); ?></small>
                        <?php endif; ?>
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
                        <input type="text" class="form-control" name="panggilan" value="<?php echo e(old('panggilan')); ?>">
                        <?php if($errors->has('panggilan')): ?>
                        <small class="text-danger"><?php echo e($errors->first('panggilan')); ?></small>
                        <?php endif; ?>
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
                        <input type="number" class="form-control" name="nik" value="<?php echo e(old('nik')); ?>">
                        <?php if($errors->has('nik')): ?>
                        <small class="text-danger"><?php echo e($errors->first('nik')); ?></small>
                        <?php endif; ?>
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
                        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo e(old('tempat_lahir')); ?>">
                        <?php if($errors->has('tempat_lahir')): ?>
                        <small class="text-danger"><?php echo e($errors->first('tempat_lahir')); ?></small>
                        <?php endif; ?>
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" value="<?php echo e(old('tgl_lahir')); ?>">
                        <?php if($errors->has('tgl_lahir')): ?>
                        <small class="text-danger"><?php echo e($errors->first('tgl_lahir')); ?></small>
                        <?php endif; ?>
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
                              <input type="number" name="telepon" class="form-control" maxlength="10" value="<?php echo e(old('telepon')); ?>">
                              <?php if($errors->has('telepon')): ?>
                              <small class="text-danger"><?php echo e($errors->first('telepon')); ?></small>
                              <?php endif; ?>
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
                        <textarea name="alamat" class="form-control" rows="3" id="comment" placeholder="Message"><?php echo e(old('alamat')); ?></textarea>
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
                        <input type="text" class="form-control" name="kelurahan" value="<?php echo e(old('kelurahan')); ?>">
                        <?php if($errors->has('kelurahan')): ?>
                        <small class="text-danger"><?php echo e($errors->first('kelurahan')); ?></small>
                        <?php endif; ?>
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label for="">Kecamatan</label>
                        <input type="text" class="form-control"  name="kecamatan" value="<?php echo e(old('kecamatan')); ?>">
                        <?php if($errors->has('kecamatan')): ?>
                        <small class="text-danger"><?php echo e($errors->first('kecamatan')); ?></small>
                        <?php endif; ?>
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
                        <input type="text" class="form-control" name="kota" value="<?php echo e(old('kota')); ?>">
                        <?php if($errors->has('kota')): ?>
                        <small class="text-danger"><?php echo e($errors->first('kota')); ?></small>
                        <?php endif; ?>
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label for="">Provinsi</label>
                        <input type="text" class="form-control"  name="provinsi" value="<?php echo e(old('provinsi')); ?>">
                        <?php if($errors->has('provinsi')): ?>
                        <small class="text-danger"><?php echo e($errors->first('provinsi')); ?></small>
                        <?php endif; ?>
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
                        <input type="number" name="kode_pos" class="form-control" maxlength="5" value="<?php echo e(old('kodepos')); ?>">
                        <?php if($errors->has('kode_pos')): ?>
                          <small class="text-danger"><?php echo e($errors->first('kode_pos')); ?></small>
                        <?php endif; ?>
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->
                  <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-success">Submit</button>
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
        </div>
        <!--/.row-->
      </div>
      <!--/.contact-content-->
    </div>
    <!--/.container-->
  </section>
  <?= form_close() ?>
  <!--/.contact-->
  <!--contact end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.no_header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>