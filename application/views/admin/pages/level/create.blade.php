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
   <?= form_open('admin/level/store'); ?>
   <div class="form-group">
      <label>Level</label>
      <input class="form-control" type="text" name="nama_level">
   </div>
   <div class="form-group">
      <label>Hak Akses </label>
      @foreach($modul as $row)
      <div class="custom-control custom-checkbox">
          <input type="checkbox" name="id_modul[]" value="{{ $row->id_modul }}" class="custom-control-input" id="{{ $row->id_modul }}">
          <label class="custom-control-label" for="{{ $row->id_modul }}">{{ $row->label }}</label>
      </div>
      @endforeach
   </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop
