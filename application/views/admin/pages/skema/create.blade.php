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
                <?= form_open_multipart('skema/store') ?>
                <div class="form-group">
                  <label for="">Nomor Skema</label>
                  <input class="form-control" type="text" name="no_skema"?>
                </div>
                <div class="form-group">
                  <label for="">Nama Skema</label>
                    <input class="form-control" type="text" name="nama_skema"?>
                </div>
                <div class="form-group">
                    <label for="">TUK</label>
                    @if(isset($tuk))
                      <div class="form-group">
                          <span class="badge badge-danger">Data TUK Belum ada</span>
                      </div>
                    @else
                      <select class="form-control" name="id_tuk" id="">
                          @foreach($tuk as $data)
                              <option value="{{ $data->id_tuk }}">{{ $data->nama_tuk }}</option>
                          @endforeach
                        @endif
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
