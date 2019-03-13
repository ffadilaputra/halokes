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
                <?= form_open_multipart('ElemenKopetensi/update/'.$edit->id_elemen) ?>
                <div class="form-group">
                  <label>Judul Elemen</label>
                <input class="form-control" type="text" name="judul_elemen" value=" {{ $edit->judul_elemen }}"?>
                </div>
                <div class="form-group">
                    <label>Kode Unit</label>
                      <select class="form-control" name="kode_unit">
                        @foreach($unit_kopetensi as $data)
                        <option value="{{ $edit->kode_unit }}" {{ $data->kode_unit == old('kode_unit', $edit->kode_unit) ? 'selected':'' }}>{{ $data->kode_unit }}</option>
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
