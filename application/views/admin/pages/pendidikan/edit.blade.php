@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Master Pendidikan
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Master Pendidikan
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-4">
   <?= form_open('admin/pendidikan/update/'.$edit->id_pen_terakhir); ?>
   <div class="form-group">
      <label>Pendidikan Terakhir</label>
      <input class="form-control"  type="text" name="pendidikan_terakhir" value="{{ $edit->pendidikan_terakhir }}">
   </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop
