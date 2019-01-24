<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      Data Berita
    </h1>
    <ol class="breadcrumb">
      <li class="active">
        <i class="fa fa-dashboard"></i>Dashboard
      </li>
    </ol>
  </div>
  <div class="col-lg-12">
    <div class="form-group">
        <a href="<?php echo e(base_url('admin/kategoriberita/create')); ?>" class="btn btn-primary">Tambah Kategori berita</a>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Kategori Berita</th>
          <th>Option</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; ?> <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($no++); ?></td>
          <td><?php echo e($data->category_name); ?></td>
          <td>
            <a class="btn btn-default" href="<?php echo e(base_url('admin/kategoriberita/edit/').$data->id_news_category); ?>"><i class="fa fa-pencil"></i></a>
            <a class="btn btn-default" href="<?php echo e(base_url('admin/kategoriberita/delete/').$data->id_news_category); ?>"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>


<?php $__env->stopSection(); ?>

<!-- jQuery -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/bootstrap.min.js"></script>
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/dataTables.bootstrap.min.js"></script>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>