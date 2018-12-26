<?= form_open('admin/login/loginProcess') ?>
    <input type="text" name="email">
    <?php if($errors->has('email')): ?>
        <small class="text-danger"><?php echo e($errors->first('email')); ?></small>
    <?php endif; ?>
    <input type="text" name="password">
    <?php if($errors->has('password')): ?>
        <small class="text-danger"><?php echo e($errors->first('password')); ?></small>
    <?php endif; ?>
    <button type="submit">Login</button>
<?= form_close() ?>