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
   <?= form_open_multipart('admin/pembayaran/update/'.$santri->id); ?>
   <div class="form-group">
   <label for="">Nama Santri</label><br>
   <h3>{{ $santri->pembayaranSantri->nama_lengkap }}</h3>
   </div>
   <div class="form-group">
        <label for="">Status</label>
        <select name="status_pembayaran" id="stats" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
            <option value="">-- Pilih --</option>
            <option @if($santri->status_pembayaran == 'tunggakan') {!! 'selected' !!}  @endif value="tunggakan">Tunggakan</option>
            <option @if($santri->status_pembayaran == 'lunas') {!! 'selected' !!}  @endif value="lunas">Lunas</option>
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

<div class="col-md-4">
    <label for="">Bukti Pembayaran Sebelumnya</label><br>
    <img src="{{ base_url('assets/uploads/'.$santri->bukti_pembayaran) }}" class="img-thumbnail" alt="Cinque Terre">
</div>

@stop
{{-- INI HARUS ADA DISEMUA LAYOUT SUPAYA BIAR BISA DI KLIK DROPDOWNNYA --}}
@section('scripts')
<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

<script>
</script>

@stop