<?= form_open('admin/login/loginProcess') ?>
    <input type="text" name="email">
    @if($errors->has('email'))
        <small class="text-danger">{{ $errors->first('email') }}</small>
    @endif
    <input type="text" name="password">
    @if($errors->has('password'))
        <small class="text-danger">{{ $errors->first('password') }}</small>
    @endif
    <button type="submit">Login</button>
<?= form_close() ?>