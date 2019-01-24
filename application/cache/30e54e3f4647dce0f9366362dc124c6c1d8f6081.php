<div class="col-md-12 col-lg-4 sidebar">

   <div class="sidebar-box">
      <h3 class="heading">Berita</h3>
      <div class="post-entry-sidebar">
         <ul>
           <?php $__currentLoopData = $sidebar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
               <a href="<?php echo e(base_url('berita/detail/').$data->id_news); ?>">
                  <img src="<?php echo e(base_url('assets/uploads/').$data->thumb); ?>" alt="Image placeholder" class="mr-4">
                  <div class="text">
                     <h4><?php echo e($data->title); ?></h4>
                     <div class="post-meta">
                        <span class="mr-2"><?php echo e($data->created_at); ?></span>
                     </div>
                  </div>
               </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </ul>
      </div>
    </div>
   <!-- END sidebar-box -->
</div>
<!-- END sidebar -->
