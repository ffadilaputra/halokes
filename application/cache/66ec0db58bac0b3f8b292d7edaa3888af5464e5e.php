<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('admin.partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <meta charset="UTF-8">
</head>

  <body>
    <div id="wrapper">
      <!-- Maiin Navigation -->
      <?php echo $__env->make('admin.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <div id="page-wrapper">
          <div class="container-fluid">
            <!-- Main Content -->
            <?php echo $__env->yieldContent('content'); ?>
          </div>
      </div>
    </div>
    
    <?php echo $__env->yieldContent('scripts'); ?>
  </body>

</html>
