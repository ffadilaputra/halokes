@extends('admin.template')

@section('content')
    <?= form_open('admin/provesi/update'.$this->id_provesi); ?>
        <input type="text" name="provesi">
        <input type="submit">
    <?= form_close() ?>
@stop
