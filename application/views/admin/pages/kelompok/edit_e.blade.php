@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Kelompok E
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Master Kelas
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-4">
   <?= form_open('admin/kelompok/update_kelompok_e/'.$edit->id_kelompok_e); ?>
   <div class="form-group">
      <label>Nama Mata Pelajaran</label>
   <input class="form-control" type="text" name="nama_matpel" value="{{ $edit->nama_matpel }}">
   </div>
    <div class="form-group">
        <label>Jenjang</label>
        <select name="id_matpelkelas" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" required>
          <option value="0">-- Pilih --</option>
          @foreach ($matpel as $item)
            <option {{ $item->id_matpelkelas == old('id_matpelkelas', $edit->id_matpelkelas) ? 'selected':'' }} value="{{ $item->id_matpelkelas }}">{{ $item->jenjang }}</option>
          @endforeach
        </select>
    </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop
