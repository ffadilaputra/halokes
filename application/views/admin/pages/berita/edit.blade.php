@extends('admin.template')
@section('content')
<div class="col-lg-12">
    <h1 class="page-header">
        Edit Berita
    </h1>
</div>
<div>
    <?= form_open_multipart('admin/berita/update/'.$edit->id_news) ?>
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $edit->title }}">
            @if($errors->has('title'))
              <small class="text-danger">{{ $errors->first('title') }}</small>
            @endif
        </div>
        <div class="form-group">
            @if(is_null($edit->thumb))
              <small class="text-danger">Gambar tidak ada</small>
            @else
              <img style="width:600px;height:400px;"  src="{{ base_url('assets/uploads/').$edit->thumb }}" alt="">
            @endif
        </div>
        <div class="form-group">
          <label for="">Ganti Gambar</label>
          <input name="thumb" type="file" class="form-control">
            @if($errors->has('thumb'))
                <small class="text-danger">{{ $errors->first('thumb') }}</small>
            @endif
      </div>
        <div class="form-group">
            <label for="">Kategori</label>
            <select name="id_news_category" class="form-control">
                <option value="">-- Pilih --</option>
                  <option @if($edit->id_news_category == 'berita') {!! 'selected' !!}  @endif value="berita">Berita</option>
                  <option @if($edit->id_news_category == 'mauidhoh') {!! 'selected' !!}  @endif value="mauidhoh">Maulidoh</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Dekripsi </label>
            <textarea id="editor" name="description">{!! $edit->description !!}</textarea>
            @if($errors->has('description'))
              <small class="text-danger">{{ $errors->first('description') }}</small>
            @endif
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" style="float:right">
        </div>
        <?= form_close() ?>
</div>
@stop

