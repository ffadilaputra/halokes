<!-- <h1>{{ $user->nama_lengkap }}</h1> -->
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
   <div class="panel-body">
      <div class="row">
         <div class="col-lg-12">
            <?= form_open('admin/user/store') ?>
               <table class="table table-bordered">
                   <tbody>
                       <!-- <tr>
                           <td colspan="2">
                                <center>
                                <img id="santri" src="" alt="your image" style="width:200px; height:250px; background-color:#eeeeee;">
                                </center>
                           </td>
                       </tr> -->
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>Foto Profile</b></td>
                            <td class="col-sm-6 col-xs-6">
                                <input type="file" class="form-control" name="nama_lengkap">
                               
                            </td>
                       </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>Nama Lengkap</b></td>
                            <td class="col-sm-6 col-xs-6">
                                <input type="text" class="form-control" name="nama_lengkap">
                                @if($errors->has('nama_lengkap'))
                                    <small class="text-danger">{{ $errors->first('nama_lengkap') }}</small>
                                @endif
                            </td>
                       </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>Tempat Lahir</b></td>
                            <td class="col-sm-6 col-xs-6">
                                <input type="text" class="form-control" name="tempat_lahir" >
                                @if($errors->has('tempat_lahir'))
                                    <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                                @endif
                            </td>
                       </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>Tanggal Lahir</b></td>
                            <td class="col-sm-6 col-xs-6">
                                <input type="text" class="form-control" name="tgl_lahir" >
                                @if($errors->has('tgl_lahir'))
                                    <small class="text-danger">{{ $errors->first('tgl_lahir') }}</small>
                                @endif
                            </td>
                       </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>No Telepon</b></td>
                            <td class="col-sm-6 col-xs-6">
                                <input type="text" class="form-control" name="telepon" >
                                @if($errors->has('telepon'))
                                    <small class="text-danger">{{ $errors->first('telepon') }}</small>
                                @endif
                            </td>
                       </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>Email</b></td>
                            <td class="col-sm-6 col-xs-6">
                                <input type="email" class="form-control" name="email" >
                                @if($errors->has('email'))
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </td>
                       </tr>
                       <tr>
                          <td class="col-sm-2 col-xs-2"><b>Alamat</b></td>
                          <td class="col-sm-6 col-xs-6">
                            <textarea class="form-control" name="alamat" id="" rows="6"></textarea>
                            
                          </td>
                      </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>New Password</b></td>
                            <td class="col-sm-4 col-xs-6">
                                <input type="password" class="form-control" name="password" id="" value="">
                                @if($errors->has('password'))
                                    <small class="text-danger">{{ $errors->first('password') }}</small>
                                @endif
                                <!-- <small class="text-danger">*kosongi apabila tidak memperbarui kata sandi</small> -->
                            </td>
                       </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>Level</b></td>
                            <td>
                            <select name="id_level" id="">
                                    <option value="0">-- Pilih --</option>
                                @foreach ($level as $item)
                                    <option value="{{ $item->id_level }}">{{ $item->level }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('id_level'))
                                <small class="text-danger">{{ $errors->first('id_level') }}</small>
                            @endif
                            </td>
                       </tr>
                   </tbody>
               </table>
               <center>
                  <input type="submit" class="btn btn-primary btn-lg">
               </center>
            <?= form_close() ?>
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

