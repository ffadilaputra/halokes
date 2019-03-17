@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Modul
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Tambah Modul
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-4">
   <?= form_open('admin/module/store'); ?>
   <div class="form-group">
        <label>id</label>
        <input class="form-control" type="text" name="id_modul">
    </div>
   <div class="form-group">
      <label>Nama <i>Class</i></label>
      <input class="form-control" type="text" name="nama">
   </div>
   <div class="form-group">
    <label>Label</label>
    <input class="form-control" type="text" name="label">
 </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop
