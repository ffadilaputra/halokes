<?php $__env->startSection('content'); ?>
<div class="wrap">



  <section class="site-section pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="owl-carousel owl-theme home-slider">
            <div>
              <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('assets/wordify/images/img1.jpg'); ">
              </a>
            </div>
            <div>
              <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('assets/wordify/images/img2.jpg'); ">
              </a>
            </div>
            <div>
              <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('assets/wordify/images/img3.jpg'); ">
              </a>
            </div>
          </div>

        </div>
      </div>

    </div>


  </section>
  <!-- END section -->

  <section class="site-section py-sm">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="mb-4">Berita Terbaru</h2>
        </div>
      </div>
      <div class="row blog-entries">
        <div class="col-md-12 col-lg-12 main-content">
          <div class="row">
            <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
              <a href="<?php echo e(base_url('blog/detail/').$data->id_news); ?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="<?php echo e(base_url('assets/uploads/').$data->thumb); ?>" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2">
                      <?php echo $data->detailNews->nama_lengkap; ?></span>&bullet;
                      <span class="mr-2"><?php echo $data->created_at; ?></span> &bullet;
                      <span class="ml-2"><span class="fa fa-tag"> <?php echo $data->id_news_category; ?></span></span>
                    </div>
                    <h2><?php echo $data->title; ?></h2>
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
    <!-- END section -->



  </div>

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('front.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>