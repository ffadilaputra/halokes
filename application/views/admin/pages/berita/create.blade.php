@extends('admin.template')
@section('content')
<div class="col-lg-12">
   <h1 class="page-header">
      Buat Berita
   </h1>
</div>
<?= form_open_multipart('admin/berita/store') ?>
<div class="form-group">
   <label for="">Title</label>
   <input type="text" name="title" class="form-control">
      @if($errors->has('title'))
         <small class="text-danger">{{ $errors->first('title') }}</small>
      @endif
</div>
<div class="form-group">
    <label for="">Thumbnail</label>
    <input name="thumb" type="file" class="form-control">
    @if($errors->has('thumb'))
         <small class="text-danger">{{ $errors->first('thumb') }}</small>
    @endif
 </div>
<div class="form-group">
   <label for="">Kategori</label>
   <select name="id_news_category" class="form-control">
      <option value="">-- Pilih --</option>
      <option value="maulidoh">Maulidoh</option>
      <option value="berita">Berita</option>
   </select>
</div>
<div class="form-group">
   <label for="">Dekripsi </label>
   <textarea id="editor" name="description"></textarea>
</div>
<div class="form-group">
   <input type="submit" class="btn btn-success" style="float:right">
</div>
<?= form_close() ?>
@stop

