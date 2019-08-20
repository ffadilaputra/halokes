@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Master Guru
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Master Guru
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-4">
   <?= form_open('admin/guru/store'); ?>
   <div class="form-group">
      <label>Tanggal Masuk</label>
      <input class="form-control" type="date" name="tgl_masuk" required>
   </div>
   <div class="form-group">
      <label>Jabatan</label>
      <input class="form-control" type="text" name="jabatan" required>
   </div>
   <div class="form-group">
    <label>Mata Pelajaran</label>
    <input class="form-control" type="text" name="matpel" required>
    </div>
    <div class="form-group">
      <label>Nama Guru</label>
      <select name="id_users" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" required>
        <option value="0">-- Pilih --</option>
        @foreach ($user as $item)
          <option value="{{ $item->id_users }}">{{ $item->nama_lengkap }}</option>
        @endforeach
      </select>
   </div>
   <input type="submit" class="btn btn-warning" style="float:right">
   <?= form_close() ?>
</div>
@stop
