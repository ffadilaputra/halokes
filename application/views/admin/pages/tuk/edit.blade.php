@extends('admin.layouts.sidebar')

@section('content')
<main class="main">
  <div class="containter-fluid">
    <div class="row">
        <div class="col-md-8">
          <br>
          <div class="card">
            <div class="card-body">
                <h1 class="docs-title">Edit pages</h1>
                  <?= form_open_multipart('tuk/update/'.$edit->id_tuk) ?>
                    <div class="form-group">
                    <input class="form-control" type="text" name="nama_tuk" value="{{ $edit->nama_tuk }}"?>
                    </div>
                    <div class="form-group">
                      <input class="btn btn-primary" type="submit"?>
                    </div>
                  <?= form_close() ?>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
@stop
