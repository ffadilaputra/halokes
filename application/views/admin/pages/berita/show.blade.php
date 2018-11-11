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
{{-- INI HARUS ADA DISEMUA LAYOUT SUPAYA BIAR BISA DI KLIK DROPDOWNNYA --}}
@section('scripts')
<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>
@stop