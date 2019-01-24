<?php $__env->startSection('content'); ?>

<div class="wrap">
    <section class="site-section py-lg">
      <div class="container">

        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">
            <img src="<?php echo e(base_url('assets/uploads/').$detail->thumb); ?>" alt="Image" class="img-fluid mb-5">
             <div class="post-meta">
                  <span class="author mr-2"><img src="<?php echo e(base_url('assets/wordify')); ?>/images/person_1.jpg" alt="Colorlib" class="mr-2"> Colorlib</span>&bullet;
             <span class="mr-2"> <?php echo e($detail->created_at); ?></span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> <?php echo e($detail->detailNews->nama_lengkap); ?> </span>
              </div>
            <h1 class="mb-4"><?php echo e($detail->title); ?></h1>
            <a class="category mb-5" href="#"> <?php echo e($detail->id_news_category); ?></a>
            <div class="post-content-body"><?php echo $detail->description; ?>

            </div>

            <div class="pt-5">
              <p>Kategori:  <a> <?php echo e($detail->id_news_category); ?></a></p>
            </div>

            

          </div>

          <!-- END main-content -->
          <!-- END sidebar -->

        </div>
      </div>
    </section>

      
    <!-- END section -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>