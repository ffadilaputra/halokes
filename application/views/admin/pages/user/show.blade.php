
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

         <a class="btn btn-primary btn-lg" href="{{ base_url('admin/user/edit/').$user->id_users }}" style="float:right"><i class="fa fa-pencil"></i> Ubah</a>
            <br>
            <hr>
            <div class="col-lg-12">

               <table class="table table-bordered table-hover">
                   <tbody>
                       <tr>
                           <td rowspan="7">
                                 <center>
                                       @if(isset($user->foto))
                                           <img style="width:200px; height:250px;" src="{{ base_url('assets/uploads/'.$user->foto) }}">
                                       @else
                                           <img alt="your image" style="width:200px; height:250px; background-color:#eeeeee;" />
                                       @endif
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
                       <tr>
                          <td class="col-sm-6 col-xs-6"><b>Alamat</b></td>
                          <td class="col-sm-6 col-xs-6">{{ $user->alamat }}</td>
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
