@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Master Kelas
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Master Kelas
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-4">
   <?= form_open('admin/kelas/store'); ?>
   <div class="form-group">
      <label>Nama Kelas</label>
      <input class="form-control" type="text" name="nama_kelas">
   </div>
    <div class="form-group">
        <label for="jenjang">Tingkat Pendidikan</label>
        <select class="form-control" name="jenjang" id="" value={{ old('tingkat_pendidikan') }} required>
        <option @if(old('jenjang') == 'ma') selected @endif value="ma">Madarasah Aliyah</option>
        <option @if(old('jenjang') == 'mt') selected @endif value="mt">Madarasah Tsanawiyah</option>
        <option @if(old('jenjang') == 'md') selected @endif value="md">Madarasah Diniyah</option>
        </select>
     </div>
     <div class="form-group">
        <label>Kode Ruangan</label>
        <input class="form-control" type="text" name="kode_ruangan">
      </div>
      <div class="form-group">
        <label>Ukuran Ruangan</label>
        <input class="form-control" type="text" name="ukuran_ruangan">
      </div>
      <div class="form-group">
        <label>Nama Guru</label>
        <select name="walikelas" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" required>
          <option value="0">-- Pilih --</option>
          @foreach ($guru as $item)
            <option value="{{ $item->id_guru }}">{{ $item->detailGuru->nama_lengkap }}</option>
          @endforeach
        </select>
     </div>
   <input type="submit" class="btn btn-success" style="float:right">
   <?= form_close() ?>
</div>
@stop
