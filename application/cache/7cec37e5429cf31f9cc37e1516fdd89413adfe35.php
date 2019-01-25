<?php $__env->startSection('content'); ?>
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">

                        </div>
                        <div class="login-form">
                        <?= form_open('admin/login/loginProcess') ?>
                            <!-- <form action="" method="post"> -->
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                    <?php if($errors->has('email')): ?>
                                        <small class="text-danger"><?php echo e($errors->first('email')); ?></small>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                    <?php if($errors->has('password')): ?>
                                        <small class="text-danger"><?php echo e($errors->first('password')); ?></small>
                                    <?php endif; ?>
                                </div>
                                <div class="login-checkbox">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                                <!-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div> -->
                            <!-- </form> -->
                        <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


<?php echo $__env->make('front.login.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>