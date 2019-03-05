@extends('admin.layouts.default')

@section('content')

<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card-group">
      <div class="card p-4">
        <div class="card-body">
          <h1>Login</h1>
          <?= form_open('auth/auth_admin_process') ?>
          <p class="text-muted">Sign In to your account</p>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="icon-user"></i>
              </span>
            </div>
            <input name="username" class="form-control" type="text" placeholder="Username">
          </div>
          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="icon-lock"></i>
              </span>
            </div>
            <input name="password" class="form-control" type="password" placeholder="Password">
          </div>
          <div class="row">
            <div class="col-6">
              <button class="btn btn-primary px-4" type="button">Login</button>
            </div>
            <div class="col-6 text-right">
              <button class="btn btn-link px-0" type="submit">Forgot password?</button>
            </div>
            <?= form_close() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop
