<?php $__env->startSection('content'); ?>
    <?= form_open('admin/provesi/store'); ?>
        <input type="text" name="provesi">
        <input type="submit">
    <?= form_close() ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>