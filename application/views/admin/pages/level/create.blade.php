@extends('admin.template')

@section('content')
    <?= form_open('admin/level/store'); ?>
        <div class="form-group">
            <label>Level</label>
            <input class="form-control" type="text" name="level">
        </div>

        <input type="submit" class="btn btn-success">
    <?= form_close() ?>
@stop

{{-- INI HARUS ADA DISEMUA LAYOUT SUPAYA BIAR BISA DI KLIK DROPDOWNNYA --}}
@section('scripts')
<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>
@stop
