<?php $__env->startSection('content'); ?>
    <?= form_open('admin/kategoriberita/update/'.$edit->id_news_category); ?>
        <input type="text" name="category_name" value="<?php echo e($edit->category_name); ?>">
        <input type="submit">
    <?= form_close() ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>