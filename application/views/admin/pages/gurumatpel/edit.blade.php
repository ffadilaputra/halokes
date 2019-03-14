@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Mata Pelajaran Guru
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Mata Pelajaran Guru
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-8">
   <?= form_open('admin/GuruMatpel/update/'.$edit->id_gurumatpel); ?>
   <div class="form-group">
      <label>Keterangan</label>
   <textarea class="form-control" name="keterangan" rows="8">{{ $edit->keterangan }}</textarea>
   </div>
    <div class="form-group">
      <label>Nama Guru</label>
      <select name="id_guru" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" required>
        <option value="0">-- Pilih --</option>
        @foreach ($guru as $item)
          <option value="{{ $item->id_guru }}" {{ $item->id_guru == old('id_guru', $edit->id_guru) ? 'selected':'' }} >{{ $item->detailGuru->nama_lengkap }}</option>
        @endforeach
      </select>
   </div>
   <div class="form-group">
    <label>Kelas</label>
    <select name="id_masterkelas" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" required>
      <option value="0">-- Pilih --</option>
      @foreach ($kelas as $item)
        <option value="{{ $item->id_masterkelas }}" {{ $item->id_masterkelas == old('id_masterkelas', $edit->id_masterkelas) ? 'selected':'' }}>{{ $item->nama_kelas }}</option>
      @endforeach
    </select>
 </div>
 <div class="form-group">
    <label>Mata Pelajaran</label>
    <select name="id_matpel" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" required>
      <option value="0">-- Pilih --</option>
      @foreach ($matpel as $item)
        <option value="{{ $item->id_matpel }}" {{ $item->id_matpel == old('id_matpel', $edit->id_matpel) ? 'selected':'' }} >{{ $item->nama_matpel }}</option>
      @endforeach
    </select>
 </div>
   <input type="submit" class="btn btn-warning" style="float:right">
   <?= form_close() ?>
</div>
@stop
