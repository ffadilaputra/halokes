  <?php $__env->startSection('content'); ?>
  <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
            Verifikasi
        </h1>
        <ol class="breadcrumb">
          <li class="active">
            <i class="fa fa-dashboard"></i>Verifikasi
          </li>
        </ol>
      </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="fa fa-money fa-fw"></i> Verifikasi Siswa</h3>
          </div>
          <div class="panel-body">
            <?= form_open(base_url('admin/verify/submit')) ?>
            <div class="form-group">
              <label for="">Id Santri</label>
              <input type="hidden" name="id_santri" value="<?php echo e($santri->id_santri); ?>">
            </div>
            <div class="form-group">
              <label for="">Nama Lengkap</label>
              <input class="form-control" value="<?php echo e($santri->nama_lengkap); ?>" type="text" disabled>
            </div>
            <div class="form-group">
              <label for="">Status</label>
              <select class="form-control" name="status">
                <option value=""> Pilih</option>
                <option value="terima">Terima</option>
                <option value="tolak">Tolak</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" style="float:left" class="btn btn-success">
            </div>
            <?= form_close() ?>
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