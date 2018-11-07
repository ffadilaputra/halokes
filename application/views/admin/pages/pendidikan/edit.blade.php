@extends('admin.template')

@section('content')
    <?= form_open('admin/pendidikan/update/'.$edit->id_pen_terakhir); ?>
        <input type="text" name="pendidikan_terakhir" value="{{ $edit->pendidikan_terakhir }}">
        <input type="submit">
    <?= form_close() ?>
@stop

{{-- INI HARUS ADA DISEMUA LAYOUT SUPAYA BIAR BISA DI KLIK DROPDOWNNYA --}}
@section('scripts')
<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>
@stop