<?php $__env->startSection('content'); ?>
<!--info start -->
<section id="info" class="education">
  <div class="section-heading text-center">
    <h2 class="head-section">Informasi</h2>
  </div>
  <div class="container">
    <div class="experience-content col-lg-12">

      <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="mau-panel col-lg-4 col-sm-12">
        <div class="panel">
          <div class="panel-heading panel-heading-plus">
              <h3 class="panel-title"><a href="<?php echo e(base_url()); ?>blog/informasi/show/<?php echo e($data->id); ?>"><?php echo e($data->title); ?></a></h3>
              <?php
              $date = new DateTime($data->created_at);
              ?>
              <span>By <?php echo e($data->posted_by); ?> | <?php echo e($date->format('d-m-Y h:m:s')); ?></span>
          </div>
          <div class="panel-body">
            <?php echo $data->description; ?>

          </div>
        </div>
      </div>
      <!-- end panel -->
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
    <!--.mauidhoh-content-->
  </div>

</section>
<!--/.info-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.template_blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>