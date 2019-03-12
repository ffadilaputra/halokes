@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Master Mata Pelajaran
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Master Mata Pelajaran
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-4">
   <?= form_open('admin/matpel/store'); ?>
   <div class="form-group">
      <label>Nama Mata Pelajaran</label>
      <input class="form-control" type="text" name="nama_matpel">
   </div>
   <div class="form-group">
      <label>KKM Pengetahuan</label>
      <input class="form-control" type="text" name="kkmpengetahuan">
   </div>
   <div class="form-group">
      <label>KKM Keterampilan</label>
      <input class="form-control" type="text" name="kkmketerampilan">
   </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop
