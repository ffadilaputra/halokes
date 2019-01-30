@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Master Level
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Master Level
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-4">
   <?= form_open('admin/tahunakademik/update/'.$edit->id_tahun_akademik); ?>
   <div class="form-group">
      <label>Level</label>
      <input class="form-control"  type="text" name="nama" value="{{ $edit->level }}">
   </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop
