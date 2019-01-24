<?php $__env->startSection('content'); ?>
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Cuplikan Berita
      </h1>
   </div>
</div>
<div class="panel panel-default">
   <div class="panel-heading">
      <h1><?php echo e($post->title); ?></h1>
      <h1><?php echo e($post->description); ?></h1>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<!-- jQuery -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>