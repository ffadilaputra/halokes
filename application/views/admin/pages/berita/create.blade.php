@extends('admin.template')

@section('content')
    <?= form_open('admin/berita/store') ?>
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Kategori</label>
            <select name="id_news_category" class="form-control">
                <option value="">-- Pilih --</option>
                @foreach ($category as $item)
                    <option value="{{ $item->id_news_category }}">{{ $item->category_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Dekripsi </label>
            <textarea name="description"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary">
        </div>
    <?= form_close() ?>
@stop

@section('scripts')
<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>
<script src="{{ base_url('assets/bower_components/tinymce/tinymce.min.js') }}"></script>
<script>tinymce.init({ selector:'textarea' });</script>
@stop