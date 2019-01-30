<h1>{{ $user->nama_lengkap }}</h1>
@extends('admin.template')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
          User
        </h1>
    </div>
</div>

<!-- identitas siswa -->
<div class="panel panel-default">
   <div class="panel-heading">
      <div class="row">
         <div class="col-lg-12">
            <h2>Identitas User</h2>
            
            <a class="btn btn-primary btn-lg" href="" style="float:right"><i class="fa fa-pencil"></i> Edit</a>
            <br>
            <hr>
            <div class="col-lg-12">
               
               <table class="table table-bordered table-hover">
                   <tbody>
                       <tr>
                           <td colspan="2">
                                <center>
                                <img id="santri" src="{{ base_url('assets/wordify/') }}images/img_1.jpg" alt="your image" style="width:200px; height:250px; background-color:#eeeeee;" />
                                </center>
                           </td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Nama Lengkap</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $user->nama_lengkap }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Tempat Lahir</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $user->tempat_lahir }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Tanggal Lahir</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $user->tgl_lahir }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>No Telepon</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $user->telepon }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Email</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $user->email }}</td>
                       </tr>
                   </tbody>
               </table>
               
            </div>
         </div>
      </div>
   </div>
   <br>
   
</div> <!-- identitas siswa end -->


@stop

{{-- INI HARUS ADA DISEMUA LAYOUT SUPAYA BIAR BISA DI KLIK DROPDOWNNYA --}}
@section('scripts')
<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>
@stop