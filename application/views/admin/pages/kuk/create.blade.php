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
                <?= form_open_multipart('Kuk/store') ?>
                <div class="form-group">
                  <label>Judul KUK</label>
                  <input class="form-control" type="text" name="judul_kuk"?>
                </div>
                <div class="form-group">
                    <label>Pertanyaan KUK</label>
                    <input class="form-control" type="text" name="pertanyaan_kuk"?>
                  </div>
                <div class="form-group">
                    <label>Kode Unit</label>
                      <select class="form-control" name="id_elemen">
                        @foreach($elemen as $data)
                          <option value="{{ $data->id_elemen }}">{{ $data->judul_elemen }}</option>
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
