@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
        Penempatan Siswa
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Penempatan Siswa
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-4">
   <?= form_open('admin/PenempatanSiswa/update/'.$edit->id_penempatan); ?>
   <div class="form-group">
    <label>Nama Kelas</label>
    <select name="id_masterkelas" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" required>
      <option value="0">-- Pilih --</option>
      @foreach ($kelas as $item)
        <option value="{{ $item->id_masterkelas }}" {{ $item->id_masterkelas == old('id_masterkelas', $edit->id_masterkelas) ? 'selected':'' }}>{{ $item->nama_kelas }}</option>
      @endforeach
    </select>
    </div>
    <div class="form-group">
        <label>Nama Santri</label>
        <select name="id_santri" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" required>
          <option value="0">-- Pilih --</option>
          @foreach ($santri as $item)
            <option value="{{ $item->id_santri }}" {{ $item->id_santri == old('id_santri', $edit->id_santri) ? 'selected':'' }}>{{ $item->nama_lengkap }}</option>
          @endforeach
        </select>
        </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop