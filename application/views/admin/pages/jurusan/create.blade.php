@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Master Jurusan
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Master Jurusan
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-4">
   <?= form_open('admin/jurusan/store'); ?>
   <div class="form-group">
      <label>Jurusan</label>
      <input class="form-control" type="text" name="nama_jurusan">
   </div>
   <div class="form-group">
    <label>Keterangan</label>
    <textarea class="form-control" name="keterangan" rows="4"></textarea>
 </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop
