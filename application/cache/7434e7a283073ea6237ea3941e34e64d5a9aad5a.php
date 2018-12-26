<?php $__env->startSection('content'); ?>
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Master Mauidhoh
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Master Mauidhoh
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-8">
   <?= form_open('admin/mauidhoh/update/'.$data->id_mauidhoh); ?>
   <div class="form-group">
      <label>Mauidhoh</label>
      <div class="form-group">
            <label for="">Dekripsi </label>
            <textarea name="description"><?php echo e($data->description); ?></textarea>
         </div>
   </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<!-- jQuery -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/bootstrap.min.js"></script>
<script src="<?php echo e(base_url('assets/bower_components/tinymce/tinymce.min.js')); ?>"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>