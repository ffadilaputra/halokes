@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Mata Pelajaran Kelas
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Mata Pelajaran Kelas
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-4">
   <?= form_open('admin/MatpelKelas/store'); ?>
    <div class="form-group">
        <label for="jenjang">Tingkat Pendidikan</label>
        <select class="form-control" name="jenjang" id="" value={{ old('tingkat_pendidikan') }} required>
        <option @if(old('jenjang') == 'ma') selected @endif value="ma">Madarasah Aliyah</option>
        <option @if(old('jenjang') == 'mt') selected @endif value="mt">Madarasah Tsanawiyah</option>
        <option @if(old('jenjang') == 'md') selected @endif value="md">Madarasah Diniyah</option>
        </select>
     </div>
      <div class="form-group">
        <label>Kelas</label>
        <select name="id_masterkelas" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" required>
          <option value="0">-- Pilih --</option>
          @foreach ($kelas as $item)
            <option value="{{ $item->id_masterkelas }}">{{ $item->nama_kelas }}</option>
          @endforeach
        </select>
     </div>
     <div class="form-group">
        <label>Nama Jurusan</label>
        <select name="id_jurusan" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" required>
          <option value="0">-- Pilih --</option>
          @foreach ($jurusan as $item)
            <option value="{{ $item->id_jurusan }}">{{ $item->nama_jurusan }}</option>
          @endforeach
        </select>
     </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop
