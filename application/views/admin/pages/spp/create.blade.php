@extends('admin.template')
@section('content')
<main class="main">
  <div class="containter-fluid">
    <div class="row">
      <div class="col-md-8">
        <br>
        <div class="card">
          <div class="card-body">
            <h1 class="docs-title">SPP</h1>
            <?= form_open_multipart('admin/pembayaran/spp_store') ?>
              <div class="form-group">
                <label>Nama Santri</label>
                <select name="id_santri" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
                      @foreach($santri as $row)
                        <option value="{{ $row->id_santri }}">{{ $row->nama_lengkap }}</option>
                      @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Kelas</label>
                <select name="id_kelas" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
                      @foreach($kelas as $row)
                        <option value="{{ $row->id_masterkelas }}">{{ $row->nama_kelas }}</option>
                      @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Kelas</label>
                  <input name="tgl" type="date" class="form-control">
              </div>
              <div class="form-group">
                <input class="btn btn-primary" type="submit" ?>
              </div>
          </div>
        </div>
        <?= form_close() ?>
      </div>
    </div>
  </div>
</main>

@stop