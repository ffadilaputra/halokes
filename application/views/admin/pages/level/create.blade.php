@extends('admin.template')

@section('content')
    <?= form_open('admin/level/store'); ?>
        <input type="text" name="level">
        <input type="submit">
    <?= form_close() ?>
@stop
