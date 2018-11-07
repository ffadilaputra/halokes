@extends('admin.template')

@section('content')
    <?= form_open('admin/level/update/'.$edit->id_level); ?>

        <div class="form-group">
            <label>Level</label>
            <input class="form-control"  type="text" name="level" value="{{ $edit->level }}">
        </div>
        
        <input type="submit" class="btn btn-success">
    <?= form_close() ?>
@stop
