@extends('admin.template')

@section('content')
    <?= form_open('admin/kategoriberita/update/'.$edit->id_news_category); ?>
        <input type="text" name="category_name" value="{{ $edit->category_name }}">
        <input type="submit">
    <?= form_close() ?>
@stop
