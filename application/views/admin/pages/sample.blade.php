@extends('admin.layouts.sidebar')

@section('content')

<!-- Breadcrumb-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">Home</li>
  <li class="breadcrumb-item">
    <a href="#">Admin</a>
  </li>
  <li class="breadcrumb-item active">Dashboard</li>
  <!-- Breadcrumb Menu-->

</ol>
<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-6">
          <h1> Hello {{ $admin->username }}</h1>
        </div>
      </div>
    </div>
  </div>
</div>

@stop
