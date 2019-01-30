@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Master Profesi
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Master Profesi
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-4">
   <?= form_open('admin/provesi/update/'.$edit->id_provesi); ?>
   <div class="form-group">
      <label>Profesi</label>
      <input class="form-control"  type="text" name="provesi" value="{{ $edit->provesi }}">
   </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop
