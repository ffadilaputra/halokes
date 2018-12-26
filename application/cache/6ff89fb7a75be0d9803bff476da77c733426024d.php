<?php $__env->startSection('content'); ?>
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Pembayaran Santri
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-book" aria-hidden="true"></i> Pembayaran Santri
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-12">
    <div class="form-group">
        <a class="btn btn-info" href="<?php echo e(base_url('admin/pembayaran/create')); ?>"><i class="fa fa-plus"></i>&nbsp;Pembayaran</a>
    </div>
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">
            <i class="fa fa-book" aria-hidden="true"></i> Data Pembayaran
         </h3>
      </div>
      <div class="panel-body">
         <div class="table-responsive">
            <table id="main" class="table table-bordered table-hover table-striped">
               <thead>
                  <tr>
                     <th>No</th>
                     <th>Nama Santri</th>
                     <th>Kode Pembayaran</th>
                     <th>Status Pembayaran</th>
                     <th>Tanggal Bayar</th>
                     <th>No Telepon</th>
                     <th>Opsi</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $n = 1 ?>
                  <?php $__currentLoopData = $santri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                     <th><?php echo e($n++); ?></th>
                     <th><?php echo e($item->pembayaranSantri->nama_lengkap); ?></th>
                     <th><?php echo e($item->kode_pembayaran); ?></th>
                     <th><?php echo e($item->status_pembayaran); ?></th>
                     <th><?php echo e($item->created_at); ?></th>
                     <th><?php echo e($item->pembayaranSantri->telepon); ?></th>
                     <th>
                        <a href="<?php echo e(base_url('admin/pembayaran/show/').$item->id); ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                        <a href="<?php echo e(base_url('admin/pembayaran/edit/').$item->id); ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo e(base_url('admin/pembayaran/delete/'.$item->id)); ?>" class="btn btn-success btn-sm"><i class="fa fa-trash-o"></i></a>
                     </th>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
            </table>
         </div>

      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>
<!-- jQuery -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/bootstrap.min.js"></script>
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo e(base_url('assets/sb-admin/')); ?>js/dataTables.bootstrap.min.js"></script>
<script>
   $(document).ready(()=> {
     $('#main').DataTable();
   })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>