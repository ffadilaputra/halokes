@extends('admin.template')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
      <!-- Main Content -->
<div class="row">
<!-- ibu -->
<div class="col-md-8">
<div class="panel panel-default">
  <div class="panel-heading">
      <h4>Ubah Virtual Akun</h4>
  </div>
  <div class="panel-body">
    <h4><b>Virtual Akun</b></h4>
    <hr>
   <?= form_open('admin/parents/update_va/'.$edit->id_santri) ?>
    <div class="form-group">
        <label>Nomor Pendaftaran</label>
        <input type="text" name="no_pendaftaran" class="form-control" value="{{ $edit->no_pendaftaran }}">
    </div>
    <div class="form-group">
        <label>Nomor Induk</label>
        <input type="text" name="nomor_induk" class="form-control" value="{{ $edit->nomor_induk }}">
    </div>
    <div class="form-group">
        <label>Nomor Virtual Akun</label>
        <input type="text" name="no_virtual_account" class="form-control" value="{{ $edit->no_virtual_account }}">
    </div>
      <input class="btn btn-info" type="submit" value="Ubah riwayat pendidikan">
  </form>
  </div>
</div>
<!-- Split button -->
</div>
</div>
    </div>
</div>
@stop
