@extends('admin.layouts.sidebar')

@section('content')
<main class="main">
    <div class="containter-fluid">
    <div class="row">
        <div class="col-md-8">
          <br>
            <div class="card">
              <div class="card-body">
              <h1 class="docs-title">Tambah Role</h1>
                <?= form_open_multipart('role/store') ?>
                <div class="form-group">
                  <label>Nama Role</label>
                  <input class="form-control" type="text" name="nama"?>
                </div>
                <div class="form-group">
                    <label>Hak Akses Role</label>
                    @foreach($modul as $row)
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="id_modul[]" value="{{ $row->id_modul }}" class="custom-control-input" id="{{ $row->id_modul }}">
                        <label class="custom-control-label" for="{{ $row->id_modul }}">{{ $row->label }}</label>
                    </div>
                    @endforeach
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
