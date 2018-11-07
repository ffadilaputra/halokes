@extends('admin.template')

@section('content')
    <?= form_open('admin/pendidikan/update/'.$edit->id_pen_terakhir); ?>
        <input type="text" name="pendidikan_terakhir" value="{{ $edit->pendidikan_terakhir }}">
        <input type="submit">
    <?= form_close() ?>
@stop
