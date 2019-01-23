<?php $__env->startSection('content'); ?>

<div class="wrap">
<section class="site-section pt-5">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-6">
          <h2 class="mb-4">Mauidhoh</h2>
        </div>
      </div>
      <div class="row blog-entries">
        <div class="col-md-12 col-lg-12 main-content">
          <div class="row">
            <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
              <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <?php if(is_null($data->thumb)): ?>
                  <img src="<?php echo e(base_url('assets/wordify')); ?>/images/img_5.jpg" alt="Image placeholder">
                    <?php else: ?>
                  <img src="<?php echo e(base_url('assets/uploads/').$data->thumb); ?>" alt="Image placeholder">
                <?php endif; ?>
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2">&bullet;
                    <span class="mr-2"><?php echo e($data->created_at); ?></span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> <?php echo e($data->detailNews->nama_lengkap); ?></span>
                  </div>
                  <h2><?php echo e($data->title); ?></h2>
                </div>
              </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
        <!-- END main-content -->
      </div>
    </div>
  </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>