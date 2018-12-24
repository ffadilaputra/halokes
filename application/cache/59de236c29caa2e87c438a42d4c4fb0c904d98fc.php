<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
          Pembayaran
        </h1>
    </div>
</div>
<div class="panel panel-default">
      <div class="panel-heading">
        <div class="row">
          <div class="col-lg-12">
              <h2>Detail Pembayaran Santri</h2>
              <hr>
              <div class="col-lg-6">
                  <div class="form-group">
                      <label>Nama Lengkap</label>
                      <h2> <?php echo e($santri->pembayaranSantri->nama_lengkap); ?></h2>
                  </div>
                  <div class="form-group">
                    <label>Status Pembayaran</label>
                    <h2> <?php echo e($santri->status_pembayaran); ?></h2>
                </div>
                <div class="form-group">
                    <label>Bukti Pembayaran</label><br>
                    <img alt="<?php echo e($santri->bukti_pembayaran); ?>" class="img-thumbnail" src="<?php echo e(base_url('assets/uploads/').$santri->bukti_pembayaran); ?>" alt="">
                </div>
              </div>
              <div class="col-lg-6">
                  <div class="form-group">
                      <label>Nomor Induk Keluarga</label>
                      <h2> <?php echo e($santri->pembayaranSantri->nik); ?></h2>
                  </div>
                  <div class="form-group">
                      <label>NIS</label>
                      <h2> <?php echo e($santri->pembayaranSantri->nis); ?></h2>
                  </div>
              </div>
          </div>
        </div>
      </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<!-- jQuery -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>