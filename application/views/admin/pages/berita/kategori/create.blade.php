@extends('admin.template')
@section('content')
<div class="col-lg-6">
    <h1 class="page-header">
        Buat Kategori
    </h1>
    <?= form_open('admin/kategoriberita/store'); ?>
        <div class="form-group">
            <input class="form-control" type="text" name="category_name">
        </div>
        <div class="form-group">
            <input class="btn btn-sm btn-primary" type="submit">
        </div>
        <?= form_close() ?>
</div>

@stop {{-- INI HARUS ADA DISEMUA LAYOUT SUPAYA BIAR BISA DI KLIK DROPDOWNNYA --}}
@section('scripts')
<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>

@stop