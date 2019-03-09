@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Pengumuman
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Pengumuman
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-4">
   <?= form_open('admin/pengumuman/update/'.$peng->id_pengumuman); ?>
   <div class="form-group">
      <label>Pengumuman</label>
   <input class="form-control" type="text" name="pengumuman" value="{{ $peng->pengumuman }}">
   </div>
   <div class="form-group">
    <label>Keterangan</label>
    <input class="form-control" type="text" name="keterangan" value="{{ $peng->keterangan }}">
 </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop
