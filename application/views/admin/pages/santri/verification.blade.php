@extends('admin.template')

  @section('content')
  <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
            Verif
        </h1>
        <ol class="breadcrumb">
          <li class="active">
            <i class="fa fa-dashboard"></i>Dashboard
          </li>
        </ol>
      </div>
    </div>
    <div class="col-lg-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="fa fa-money fa-fw"></i>Transactions Panel</h3>
          </div>
          <div class="panel-body">
          </div>
            <?= form_open('admin/verify/submit') ?>
            <div class="form-group">
              <input name="id_santri" type="hidden" value="{{ $santri->id_santri }}">
              <input class="form-control" value="{{ $santri->nama_lengkap }}" type="text" disabled>
            </div>
            <div class="form-group">
              <select class="form-control" name="status">
                <option value=""> Pilih</option>
                <option value="terima">Terima</option>
                <option value="tolak">Tolak</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary">
            </div>
            <?= form_close() ?>
        </div>
      </div>
  @stop

  @section('scripts')
  <!-- Bootstrap Core JavaScript -->
  <script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>
  <script src="{{ base_url('assets/sb-admin/') }}js/dataTables.bootstrap.min.js"></script>

  @stop
