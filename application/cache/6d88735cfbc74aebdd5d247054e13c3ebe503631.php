<?php $__env->startSection('content'); ?>
<!--info start -->
<section id="info" class="education">
  <div class="section-heading text-center">
    <h2>Informasi</h2>
  </div>
  <div class="container">
    <div class="experience-content col-lg-12">

      <div class="mau-panel col-lg-4 col-sm-12">
        <div class="panel">
          <div class="panel-heading panel-heading-plus">
            <h3 class="panel-title">Panel title</h3>
          </div>
          <div class="panel-body">
            Basic panel example
          </div>
        </div>
      </div>
      <!-- end panel -->

      <div class="mau-panel col-lg-4 col-sm-12">
        <div class="panel">
          <div class="panel-heading panel-heading-plus">
            <h3 class="panel-title">Panel title</h3>
          </div>
          <div class="panel-body">
            Basic panel example
          </div>
        </div>
      </div>

      <!-- end panel -->
      <div class="mau-panel col-lg-4 col-sm-12">
        <div class="panel">
          <div class="panel-heading panel-heading-plus">
            <h3 class="panel-title">Panel title</h3>
          </div>
          <div class="panel-body">
            Basic panel example
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