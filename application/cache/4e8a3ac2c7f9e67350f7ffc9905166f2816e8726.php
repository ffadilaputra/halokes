<!doctype html>
<html class="no-js" lang="en">
  <?php echo $__env->make('front.partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>
  <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
  <!-- top-area Start -->
    
  <!-- /.top-area-->
  <!-- top-area End -->
    <?php echo $__env->yieldContent('content'); ?>
  <!--footer-copyright start-->
  <?php echo $__env->make('front.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!--/.footer-copyright-->
  <!--footer-copyright end-->
  <?php echo $__env->make('front.partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>

</html>
