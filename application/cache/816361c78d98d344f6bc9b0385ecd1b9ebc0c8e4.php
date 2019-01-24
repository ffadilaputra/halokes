<?php $__env->startSection('content'); ?>
    <?= form_open('admin/level/store'); ?>
        <div class="form-group">
            <label>Level</label>
            <input class="form-control" type="text" name="level">
        </div>

        <input type="submit" class="btn btn-success">
    <?= form_close() ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<!-- jQuery -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>