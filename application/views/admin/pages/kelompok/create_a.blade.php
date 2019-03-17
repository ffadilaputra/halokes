@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Master Kelas
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Master Kelas
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-4">
   <?= form_open('admin/kelas/store'); ?>
   <div class="form-group">
      <label>Nama Mata Peljaran</label>
      <input class="form-control" type="text" name="nama_matpel">
   </div>
    <div class="form-group">
        <label>Nama Guru</label>
        <select name="id_matpelkelas" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" required>
          <option value="0">-- Pilih --</option>
          @foreach ($matpel as $item)
            <option value="{{ $item->id_matpelkelas }}">{{ $item->detailGuru->nama_lengkap }}</option>
          @endforeach
        </select>
    </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop
