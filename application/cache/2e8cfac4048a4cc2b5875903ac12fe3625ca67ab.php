<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
   <h1 class="page-header">
      Master Level
   </h1>
   <a href="<?php echo e(base_url('admin/level/create')); ?>" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Create</a>
   <br><br>
</div>
<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>Level</th>
         <th>Option</th>
      </tr>
   </thead>
   <tbody>
      <?php $no=1; ?>
      <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
         <td><?php echo e($no++); ?></td>
         <td><?php echo e($data->level); ?></td>
         <td>
            <a class="btn btn-primary" href="<?php echo e(base_url('admin/level/edit/').$data->id_level); ?>"><i class="fa fa-pencil"></i></a>
            <a class="btn btn-danger" href="<?php echo e(base_url('admin/level/delete/').$data->id_level); ?>"><i class="fa fa-trash"></i></a>
         </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </tbody>
</table>
<?php $__env->stopSection(); ?>
<!-- jQuery -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/bootstrap.min.js"></script>
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/dataTables.bootstrap.min.js"></script>
<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>