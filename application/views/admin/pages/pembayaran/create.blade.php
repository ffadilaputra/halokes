@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Pembayaran Santri
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Pembayaran
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-8">
   <?= form_open_multipart('admin/pembayaran/store'); ?>
   <div class="form-group">
      <label>Nama Santri</label>
      <select name="id_santri" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
          <option value="">-- Pilih --</option>
          @foreach ($santri as $item)
            <option value="{{ $item->id_santri }}">{{ $item->nama_lengkap }}</option>
          @endforeach
      </select>
      @if($errors->has('id_santri'))
         <small class="text-danger">{{ $errors->first('id_santri') }}</small>
      @endif
   </div>
   <div class="form-group">
        <label for="">Status</label>
        <select name="status_pembayaran" id="stats" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
            <option value="">-- Pilih --</option>
            <option value="tunggakan">Tunggakan</option>
            <option value="lunas">Lunas</option>
        </select>
        @if($errors->has('status_pembayaran'))
         <small class="text-danger">{{ $errors->first('status_pembayaran') }}</small>
        @endif
   </div>
   <div class="form-group">
        <label for="">Bukti Pembayaran</label>
        <input name="bukti_pembayaran" type="file" class="form-control">
        @if($errors->has('bukti_pembayaran'))
         <small class="text-danger">{{ $errors->first('bukti_pembayaran') }}</small>
        @endif
   </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" style="float:right">
    </div>
   <?= form_close() ?>
</div>
@stop
