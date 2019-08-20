@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Master Mauidhoh
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Master Mauidhoh
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-8">
   <?= form_open('admin/mauidhoh/store'); ?>
   <div class="form-group">
      <label>Mauidhoh</label>
      <div class="form-group">
            <label for="">Dekripsi </label>
            <textarea name="description"></textarea>
         </div>
   </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop
