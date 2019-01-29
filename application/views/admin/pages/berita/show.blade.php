@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Cuplikan Berita
      </h1>
   </div>
</div>
<div class="panel panel-default">
   <div class="panel-heading">
       <center><h1>{{ $post->title }}</h1></center>
       <center>{!! $post->description !!}</center>
   </div>
</div>
@stop
