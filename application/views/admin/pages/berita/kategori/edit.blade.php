@extends('admin.template')

@section('content')
    <?= form_open('admin/kategoriberita/update/'.$edit->id_news_category); ?>
        <input type="text" name="category_name" value="{{ $edit->category_name }}">
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