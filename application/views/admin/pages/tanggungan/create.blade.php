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
   <?= form_open('admin/tanggungan/store'); ?>
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
      <div class="form-group">
         <label>Tahun Akademik</label>
         <select name="id_tahun_akademik" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
           <option value="">-- Pilih --</option>
           @foreach ($tahun as $item)
             <option value="{{ $item->id_tahun_akademik }}">{{ $item->nama }}</option>
           @endforeach
           @if($errors->has('id_santri_tahun_akademik'))
            <small class="text-danger">{{ $errors->first('id_santri_tahun_akademik') }}</small>
           @endif
       </select>
      </div>
      <div class="form-group">
         <label>Kategori Keuangan</label>
         <select name="id_kategori_keuangan" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
           <option value="">-- Pilih --</option>
           @foreach ($kategori as $item)
             <option value="{{ $item->id_kategori_keuangan }}">{{ $item->nama }}</option>
           @endforeach
           @if($errors->has('id_kategori_keuangan'))
            <small class="text-danger">{{ $errors->first('id_kategori_keuangan') }}</small>
           @endif
         </select>
      </div>
      <div class="form-group">
         <label for="">Nominal</label>
         <input class="form-control" type="text" name="nominal" onkeyup="this.nextSibling.innerHTML = formatCurrency(this.value);">
      </div>
      <div class="form-group">
         <label for="">Biaya yang harus dibayar</label>
         <input class="form-control" type="text" name="biaya_harusdibayar">
      </div>
   </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop

