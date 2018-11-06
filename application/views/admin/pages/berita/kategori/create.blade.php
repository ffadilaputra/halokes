@extends('admin.template')

@section('content')
    <?= form_open('admin/kategoriberita/store'); ?>
        <input type="text" name="category_name">
        <input type="submit">
    <?= form_close() ?>
@stop
