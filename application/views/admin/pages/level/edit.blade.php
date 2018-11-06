@extends('admin.template')

@section('content')
    <?= form_open('admin/level/update/'.$edit->id_level); ?>
        <input type="text" name="level" value="{{ $edit->level }}">
        <input type="submit">
    <?= form_close() ?>
@stop
