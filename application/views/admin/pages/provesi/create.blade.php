@extends('admin.template')

@section('content')
    <?= form_open('admin/provesi/store'); ?>
        <input type="text" name="provesi">
        <input type="submit">
    <?= form_close() ?>
@stop
