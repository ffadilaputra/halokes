  <?php $__env->startSection('content'); ?>
  <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Dashboard
        </h1>
        <ol class="breadcrumb">
          <li class="active">
            <i class="fa fa-dashboard"></i>Dashboard
          </li>
        </ol>
      </div>
    </div>
    <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="fa fa-money fa-fw"></i>Transactions Panel</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table id="main" class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Nama Lengkap</th>
                    <th>Tempat Lahir</th>
                    <th>Telepon</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $n = 1 ?>
                  <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($n++); ?></td>
                    <td><?php echo e($data->email); ?></td>
                    <td><?php echo e($data->nama_lengkap); ?></td>
                    <td><?php echo e($data->tempat_lahir); ?></td>
                    <td><?php echo e($data->telepon); ?></td>
                    <td>
                      <a class="btn btn-default" href="<?php echo e(base_url('admin/user/show/').$data->id_users); ?>"><i class="fa fa-eye"></i></a>
                      <a class="btn btn-default" href="<?php echo e(base_url('admin/user/edit/').$data->id_users); ?>"><i class="fa fa-pencil"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <div class="text-right">
              <a href="#">View All Transactions
                <i class="fa fa-arrow-circle-right"></i>
              </a>
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

<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>