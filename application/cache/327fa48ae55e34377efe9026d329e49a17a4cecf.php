<?= form_open('admin/user/update/'.$user->id_users) ?>

<label for="nama_lengkap">Nama Lengkap</label>
<input type="text" name="nama_lengkap" value="<?php echo e($user->nama_lengkap); ?>">
<?php if($errors->has('nama_lengkap')): ?>
    <small class="text-danger"><?php echo e($errors->first('nama_lengkap')); ?></small>
<?php endif; ?>
<label for="tempat_lahir">Tempat Lahir</label>
<input type="text" name="tempat_lahir" value="<?php echo e($user->tempat_lahir); ?>">
<?php if($errors->has('tempat_lahir')): ?>
    <small class="text-danger"><?php echo e($errors->first('tempat_lahir')); ?></small>
<?php endif; ?>
<label for="tgl_lahir">Tanggal Lahir</label>
<input type="date" name="tgl_lahir" value="<?php echo e($user->tgl_lahir); ?>">
<?php if($errors->has('tgl_lahir')): ?>
    <small class="text-danger"><?php echo e($errors->first('tgl_lahir')); ?></small>
<?php endif; ?>
<label for="telepon">Telepon</label>
<input type="text" name="telepon" value="<?php echo e($user->telepon); ?>">
<?php if($errors->has('telepon')): ?>
    <small class="text-danger"><?php echo e($errors->first('telepon')); ?></small>
<?php endif; ?>
<label for="email">Email</label>
<input type="email" name="email" value="<?php echo e($user->email); ?>">
<?php if($errors->has('email')): ?>
    <small class="text-danger"><?php echo e($errors->first('email')); ?></small>
<?php endif; ?>
<label for="password">Password</label>
<input type="password" name="password">
<?php if($errors->has('password')): ?>
    <small class="text-danger"><?php echo e($errors->first('password')); ?></small>
<?php endif; ?>
<label for="level">Level</label>
<select name="id_level" id="">
        <option value="0">-- Pilih --</option>
    <?php $__currentLoopData = $level; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($item->id_level); ?>"><?php echo e($item->level); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php if($errors->has('id_level')): ?>
    <small class="text-danger"><?php echo e($errors->first('id_level')); ?></small>
<?php endif; ?>

<button type="submit">Tambah</button>


<?= form_close() ?>