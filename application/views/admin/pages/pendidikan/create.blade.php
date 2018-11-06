@extends('admin.template')

@section('content')
    <?= form_open('admin/pendidikan/store'); ?>
        <input type="text" name="pendidikan">
        <input type="submit">
    <?= form_close() ?>
@stop
