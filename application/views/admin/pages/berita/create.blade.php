@extends('admin.template')
@section('content')
<div class="col-lg-12">
   <h1 class="page-header">
      Buat Berita
   </h1>
</div>
<?= form_open('admin/berita/store') ?>
<div class="form-group">
   <label for="">Title</label>
   <input type="text" name="title" class="form-control">
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
@section('scripts')
<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>
<script src="{{ base_url('assets/ckeditor/')}}ckeditor.js"></script>

<script>
  CKEDITOR.replace('editor' ,{
        filebrowserImageBrowseUrl : '<?php echo base_url('assets/kcfinder');?>',

});

</script>

@stop
