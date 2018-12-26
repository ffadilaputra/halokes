<?php $__env->startSection('content'); ?>
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Pembayaran Santri
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Pembayaran
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-8">
   <?= form_open_multipart('admin/pembayaran/update/'.$santri->id); ?>
   <div class="form-group">
   <label for="">Nama Santri</label><br>
   <h3><?php echo e($santri->pembayaranSantri->nama_lengkap); ?></h3>
   </div>
   <div class="form-group">
        <label for="">Status</label>
        <select name="status_pembayaran" id="stats" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
            <option value="">-- Pilih --</option>
            <option <?php if($santri->status_pembayaran == 'tunggakan'): ?> <?php echo 'selected'; ?>  <?php endif; ?> value="tunggakan">Tunggakan</option>
            <option <?php if($santri->status_pembayaran == 'lunas'): ?> <?php echo 'selected'; ?>  <?php endif; ?> value="lunas">Lunas</option>
        </select>
        <?php if($errors->has('status_pembayaran')): ?>
         <small class="text-danger"><?php echo e($errors->first('status_pembayaran')); ?></small>
        <?php endif; ?>
   </div>
   <div class="form-group">
        <label for="">Bukti Pembayaran</label>
        <input name="bukti_pembayaran" type="file" class="form-control">
        <?php if($errors->has('bukti_pembayaran')): ?>
         <small class="text-danger"><?php echo e($errors->first('bukti_pembayaran')); ?></small>
        <?php endif; ?>
   </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" style="float:right">
    </div>
   <?= form_close() ?>
</div>

<div class="col-md-4">
    <label for="">Bukti Pembayaran Sebelumnya</label><br>
    <img src="<?php echo e(base_url('assets/uploads/'.$santri->bukti_pembayaran)); ?>" class="img-thumbnail" alt="Cinque Terre">
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<!-- jQuery -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

<script>
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>