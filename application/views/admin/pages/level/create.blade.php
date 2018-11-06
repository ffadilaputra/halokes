@extends('admin.template')

@section('content')
    <?= form_open('admin/level/store'); ?>
        <div class="form-group">
            <label>Level</label>
            <input class="form-control" style="width:50%" type="text" name="level">
        </div>
        
        <input type="submit" class="btn btn-success">
    <?= form_close() ?>
@stop
