@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Tambah Data Profesi
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Tambah Data Profesi
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-4">
   <?= form_open('admin/provesi/store'); ?>
   <div class="form-group">
      <label>Profesi</label>
      <input class="form-control"  type="text" name="provesi">
   </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop
