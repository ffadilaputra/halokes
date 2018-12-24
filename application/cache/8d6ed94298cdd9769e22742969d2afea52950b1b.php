<!doctype html>
<html class="no-js" lang="en">
  <?php echo $__env->make('front.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>
  <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
  <!-- top-area Start -->
  <?php echo $__env->make('front.partials.header_register', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- /.top-area-->
  <!-- top-area End -->
  <?php echo $__env->yieldContent('content'); ?>
  <!--footer-copyright start-->
  <?php echo $__env->make('front.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!--/.footer-copyright-->
  <!--footer-copyright end-->
  <?php echo $__env->make('front.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>

</html>