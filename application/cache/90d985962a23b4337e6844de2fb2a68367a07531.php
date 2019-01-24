<?php $__env->startSection('content'); ?>
    <?= form_open('admin/level/update/'.$edit->id_level); ?>

        <div class="form-group">
            <label>Level</label>
            <input class="form-control"  type="text" name="level" value="<?php echo e($edit->level); ?>">
        </div>
        
        <input type="submit" class="btn btn-success">
    <?= form_close() ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>