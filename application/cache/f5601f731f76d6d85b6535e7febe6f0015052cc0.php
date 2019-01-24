  <?php $__env->startSection('content'); ?>
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
                    <h3>NIS</h3>
                    <input name="nis" type="text" class="form-control">
                    <?php if($errors->has('nis')): ?>
                      <small class="text-danger"><?php echo e($errors->first('nis')); ?></small>
                    <?php endif; ?>
                  </div>
                  <div class="single-about-add-info">
                    <h3>Nama Lengkap</h3>
                    <input name="nama_lengkap" type="text" class="form-control">
                      <?php if($errors->has('nama_lengkap')): ?>
                        <small class="text-danger"><?php echo e($errors->first('nama_lengkap')); ?></small>
                      <?php endif; ?>
                  </div>
                  <div class="single-about-add-info">
                      <h3>Panggilan</h3>
                      <input name="panggilan" type="text" class="form-control">
                        <?php if($errors->has('panggilan')): ?>
                          <small class="text-danger"><?php echo e($errors->first('panggilan')); ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="single-about-add-info">
                        <h3>NIK</h3>
                        <input name="nik" type="text" class="form-control">
                          <?php if($errors->has('nik')): ?>
                            <small class="text-danger"><?php echo e($errors->first('nik')); ?></small>
                          <?php endif; ?>
                    </div>
                    <div class="single-about-add-info">
                        <h3>Tepat Lahir</h3>
                        <input name="tempat_lahir" type="text" class="form-control">
                          <?php if($errors->has('tempat_lahir')): ?>
                            <small class="text-danger"><?php echo e($errors->first('tempat_lahir')); ?></small>
                          <?php endif; ?>
                    </div>
                    <div class="single-about-add-info">
                        <h3>Tangal Lahir</h3>
                        <input name="tgl_lahir" type="date" class="form-control">
                          <?php if($errors->has('tgl_lahir')): ?>
                            <small class="text-danger"><?php echo e($errors->first('tgl_lahir')); ?></small>
                          <?php endif; ?>
                    </div>
                    <div class="single-about-add-info">
                        <h3>Alamat</h3>
                        <textarea name="alamat" type="text" class="form-control"></textarea>
                          <?php if($errors->has('alamat')): ?>
                            <small class="text-danger"><?php echo e($errors->first('alamat')); ?></small>
                          <?php endif; ?>
                    </div>
                    <div class="single-about-add-info">
                        <h3>Kelurahan</h3>
                        <input name="kelurahan" type="text" class="form-control">
                          <?php if($errors->has('kelurahan')): ?>
                            <small class="text-danger"><?php echo e($errors->first('kelurahan')); ?></small>
                          <?php endif; ?>
                    </div>
                    <div class="single-about-add-info">
                        <h3>Kecamatan</h3>
                        <input name="kecamatan" type="text" class="form-control">
                          <?php if($errors->has('kecamatan')): ?>
                            <small class="text-danger"><?php echo e($errors->first('kecamatan')); ?></small>
                          <?php endif; ?>
                    </div>
                    <div class="single-about-add-info">
                        <h3>Kota</h3>
                        <input name="kota" type="text" class="form-control">
                          <?php if($errors->has('kota')): ?>
                            <small class="text-danger"><?php echo e($errors->first('kota')); ?></small>
                          <?php endif; ?>
                    </div>
                    <div class="single-about-add-info">
                        <h3>Profinsi</h3>
                        <input name="provinsi" type="text" class="form-control">
                          <?php if($errors->has('provinsi')): ?>
                            <small class="text-danger"><?php echo e($errors->first('provinsi')); ?></small>
                          <?php endif; ?>
                    </div>
                    <div class="single-about-add-info">
                        <h3>Kodepos</h3>
                        <input name="kode_pos" type="text" class="form-control" maxlength="5">
                          <?php if($errors->has('kode_pos')): ?>
                            <small class="text-danger"><?php echo e($errors->first('kode_pos')); ?></small>
                          <?php endif; ?>
                    </div>
                    <div class="single-about-add-info">
                        <h3>Telepon</h3>
                        <input name="telepon" type="text" class="form-control">
                          <?php if($errors->has('telepon')): ?>
                            <small class="text-danger"><?php echo e($errors->first('telepon')); ?></small>
                          <?php endif; ?>
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
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('front.no_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>