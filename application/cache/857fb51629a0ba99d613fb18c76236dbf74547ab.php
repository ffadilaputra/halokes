<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
   <h1 class="page-header">
      Edit Berita
   </h1>
</div>
<div>
    <?= form_open('admin/berita/update/'.$edit->id_news) ?>
    <div class="form-group">
    <label for="">Title</label>
    <input type="text" name="title" class="form-control" value="<?php echo e($edit->title); ?>">
    </div>
    <div class="form-group">
    <label for="">Kategori</label>
    <select name="id_news_category" class="form-control">
        <option value="">-- Pilih --</option>
        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($item->id_news_category); ?>"><?php echo e($item->category_name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    </div>
    <div class="form-group">
    <label for="">Dekripsi </label>
    <textarea name="description" value="<?php echo e($edit->description); ?>"></textarea>
    </div>
    <div class="form-group">
    <input type="submit" class="btn btn-success" style="float:right">
    </div>
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
<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>