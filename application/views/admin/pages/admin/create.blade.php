@extends('admin.layouts.sidebar')

@section('content')
<main class="main">
    <div class="containter-fluid">
    <div class="row">
        <div class="col-md-8">
          <br>
            <div class="card">
              <div class="card-body">
              <h1 class="docs-title">Add pages</h1>
                <?= form_open_multipart('Admin/store') ?>
                <div class="form-group">
                  <label>Username</label>
                  <input class="form-control" type="text" name="nama"?>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" type="password" name="password" id="password"?>
                </div>
                <div class="form-group">
                  <label>Ulangi Password</label>
                  <input class="form-control" type="password" name="repeat_password" id="repeat_password"?>
                </div>
                <div class="form-group">
                  <span class="error" style="color:red"></span><br />
                </div>
                <div class="form-group">
                    <label>Role</label>
                      <select class="form-control" name="id_role">
                        @foreach($role as $data)
                          <option value="{{ $data->id_role }}">{{ $data->nama }}</option>
                        @endforeach
                      </select>
                  </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit"?>
                  </div>
                </div>
                </div>
            <?= form_close() ?>
      </div>
    </div>
    </div>
</main>
@stop
