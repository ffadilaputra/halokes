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
                <?= form_open_multipart('UnitKopetensi/store') ?>
                <div class="form-group">
                  <label for="">Kode Unit</label>
                  <input class="form-control" type="text" name="kode_unit"?>
                </div>
                <div class="form-group">
                  <label for="">Judul Unit</label>
                    <input class="form-control" type="text" name="judul_unit"?>
                </div>
                <div class="form-group">
                    <label for="">Nomor Skema</label>
                      <select class="form-control" name="no_skema" id="">
                        @foreach($skema as $data)
                          <option value="{{ $data->no_skema }}">{{ $data->no_skema }}</option>
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
