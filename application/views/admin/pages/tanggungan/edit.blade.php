@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Tanggungan
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i>Buat data tanggungan
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-4">
   <?= form_open('admin/tanggungan/update/'.$edit->id_tanggugan_pembayaran); ?>
   <div class="form-group">
      <label>Nama Santri</label>
      <select name="id_santri" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
          <option value="">-- Pilih --</option>
          @foreach ($santri as $item)
            <option @if($edit->id_santri == $item->id_santri) selected @endif value="{{ $item->id_santri }}">{{ $item->nama_lengkap }}</option>
          @endforeach
      </select>
      <label>Tahun Akademik</label>
      <select name="id_santri_tahun_akademik" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
        <option value="">-- Pilih --</option>
        @foreach ($tahun as $item)
          <option @if($edit->id_tahun_akademik == $item->id_tahun_akademik) selected @endif value="{{ $item->id_tahun_akademik }}">{{ $item->nama }}</option>
        @endforeach
    </select>
      <label>Kategori Keuangan</label>
      <select name="id_kategori_keuangan" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
        <option value="">-- Pilih --</option>
        @foreach ($kategori as $item)
          <option @if($edit->id_kategori_keuangan == $item->id_kategori_keuangan) selected @endif value="{{ $item->id_kategori_keuangan }}">{{ $item->nama }}</option>
        @endforeach
    </select>
    <label for="">Nominal</label>
        <input class="form-control" type="text" name="nominal" value="{{ $edit->nominal }} ">
        @if($errors->has('nominal'))
         <small class="text-danger">{{ $errors->first('nominal') }}</small>
        @endif
   </div>
   <div class="form-group">
      <label for="">Biaya yang harus dibayar</label>
      <input class="form-control" type="text" name="biaya_harusdibayar" value="{{ $edit->biaya_harusdibayar }}">
   </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop
