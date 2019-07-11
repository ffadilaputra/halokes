@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Master Kategori Keuangan
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Master Kategori Keuangan
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-4">
   <?= form_open('admin/KategoriKeuangan/store'); ?>
   <div class="form-group">
      <label>Kategori Keuangan</label>
      <input class="form-control" type="text" name="nama">
   </div>
   <div class="form-group">
      <label>Biaya</label>
      <input class="form-control" type="text" name="biaya">
      <p class="help-block" style="color:red">* Huruf depan harus Kapital.</p>
      </div>
   <div class="form-group">
      <label for="">Tahun Akademik</label>
         <select class="form-control" name="tahun_akademik">
            @foreach($thn_akademik as $item)
               <option value="{{ $item->nama }}">{{ $item->nama }}</option>
            @endforeach
         </select>
   </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop
