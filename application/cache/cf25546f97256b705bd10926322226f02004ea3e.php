<?php $__env->startSection('content'); ?>
<!--info start -->
<section id="info" class="education">
  <div class="section-heading text-center">
    <h2 class="head-section">Mauidhoh</h2>
  </div>
  <div class="container">
    <div class="experience-content col-lg-12">

      <div class="mau-panel col-lg-12 col-sm-12">
        <div class="panel">
          <div class="panel-heading panel-heading-plus">
            <?php
            $date = new DateTime($mauidhoh->created_at);
             ?>
            <span> <?php echo e($date->format('d-m-Y h:m:s')); ?></span>
          </div>
          <div class="panel-body">
            <?php echo e($mauidhoh->description); ?>

          </div>
        </div>
      </div>
      <!-- end panel -->

    </div>
    <!--.mauidhoh-content-->
  </div>

</section>
<!--/.info-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.template_blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>