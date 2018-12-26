<?php $__env->startSection('content'); ?>
<div class="col-lg-6">
    <h1 class="page-header">
        Buat Kategori
    </h1>
    <?= form_open('admin/kategoriberita/store'); ?>
        <div class="form-group">
            <input class="form-control" type="text" name="category_name">
        </div>
        <div class="form-group">
            <input class="btn btn-sm btn-primary" type="submit">
        </div>
        <?= form_close() ?>
</div>

<?php $__env->stopSection(); ?> 
<?php $__env->startSection('scripts'); ?>
<!-- jQuery -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/bootstrap.min.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>