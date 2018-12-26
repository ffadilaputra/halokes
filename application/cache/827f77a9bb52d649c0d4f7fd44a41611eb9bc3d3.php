<?php $__env->startSection('content'); ?>
    <?= form_open('admin/pendidikan/update/'.$edit->id_pen_terakhir); ?>
        <input type="text" name="pendidikan_terakhir" value="<?php echo e($edit->pendidikan_terakhir); ?>">
        <input type="submit">
    <?= form_close() ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>