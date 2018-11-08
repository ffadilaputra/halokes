@extends('admin.template')
@section('content')
<div class="col-lg-12">
   <h1 class="page-header">
      Edit Berita
   </h1>
</div>
<div>
    <?= form_open('admin/berita/update/'.$edit->id_news) ?>
    <div class="form-group">
    <label for="">Title</label>
    <input type="text" name="title" class="form-control" value="{{ $edit->title }}">
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
    <textarea name="description" value="{{ $edit->description }}"></textarea>
    </div>
    <div class="form-group">
    <input type="submit" class="btn btn-success" style="float:right">
    </div>
    <?= form_close() ?>
</div>
@stop
@section('scripts')
<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>
<script src="{{ base_url('assets/bower_components/tinymce/tinymce.min.js') }}"></script>
<script>tinymce.init({ selector:'textarea' });</script>
@stop