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
            <input class="form-control" type="text" name="level">
        </div>

        <input type="submit" class="btn btn-success" style="float:right">
    <?= form_close() ?>
</div>
@stop

{{-- INI HARUS ADA DISEMUA LAYOUT SUPAYA BIAR BISA DI KLIK DROPDOWNNYA --}}
@section('scripts')
<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>
@stop
