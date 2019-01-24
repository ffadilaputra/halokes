<?php $__env->startSection('content'); ?>
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Pembayaran Santri
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Pembayaran
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-8">
   <?= form_open_multipart('admin/pembayaran/store'); ?>
   <div class="form-group">
      <label>Nama Santri</label>
      <select name="id_santri" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
          <option value="">-- Pilih --</option>
          <?php $__currentLoopData = $santri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id_santri); ?>"><?php echo e($item->nama_lengkap); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <?php if($errors->has('id_santri')): ?>
         <small class="text-danger"><?php echo e($errors->first('id_santri')); ?></small>
      <?php endif; ?>
   </div>
   <div class="form-group">
        <label for="">Status</label>
        <select name="status_pembayaran" id="stats" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
            <option value="">-- Pilih --</option>
            <option value="tunggakan">Tunggakan</option>
            <option value="lunas">Lunas</option>
        </select>
        <?php if($errors->has('status_pembayaran')): ?>
         <small class="text-danger"><?php echo e($errors->first('status_pembayaran')); ?></small>
        <?php endif; ?>
   </div>
   <div class="form-group">
        <label for="">Bukti Pembayaran</label>
        <input name="bukti_pembayaran" type="file" class="form-control">
        <?php if($errors->has('bukti_pembayaran')): ?>
         <small class="text-danger"><?php echo e($errors->first('bukti_pembayaran')); ?></small>
        <?php endif; ?>
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

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

<script>
    // $('#stats').change(function() {
    //     if($(this).val() == 'lunas'){
    //         $('body').append('<input class="form-control" id="id_bukti" name="bukti" type="file">')
    //         console.log('Berhasil membuat element')
    //     }else{
    //         $('id_bukti').remove()
    //     }
    // })
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>