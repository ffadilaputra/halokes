<?php $__env->startSection('content'); ?>
<div class="wrap">
<section class="site-section py-lg">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Informasi Pendaftaran
            </div>
            <div class="card-body">
                <h5 class="card-title">Untuk informasi lebih lanjut, klik button dibawah ini: </h5>
                <!-- <p class="card-text">Untuk Informasi lebih lanjut dapat dicek.</p> -->
                <a href="//google.com" class="btn btn-primary">Cek Disini</a>
            </div>
        </div>
    </div>

</section>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>