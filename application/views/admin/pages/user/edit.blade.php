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
   <div class="panel-body">
      <div class="row">
         <div class="col-lg-12">
               <?= form_open('admin/user/update/'.$user->id_users) ?>
               <table class="table table-bordered">
                   <tbody>
                       <tr>
                           <td colspan="2">
                                <center>
                                {{-- <img id="santri" src="" alt="your image" style="width:200px; height:250px; background-color:#eeeeee;" /> --}}
                                </center>
                           </td>
                       </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>Nama Lengkap</b></td>
                            <td class="col-sm-6 col-xs-6">
                                <input type="text" class="form-control" name="nama_lengkap" value="{{ $user->nama_lengkap }}">
                                @if($errors->has('nama_lengkap'))
                                    <small class="text-danger">{{ $errors->first('nama_lengkap') }}</small>
                                @endif
                            </td>
                       </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>Tempat Lahir</b></td>
                            <td class="col-sm-6 col-xs-6">
                                <input type="text" class="form-control" name="tempat_lahir" value="{{ $user->tempat_lahir }}">
                                @if($errors->has('tempat_lahir'))
                                    <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                                @endif
                            </td>
                       </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>Tanggal Lahir</b></td>
                            <td class="col-sm-6 col-xs-6">
                                <input type="text" class="form-control" name="tgl_lahir" value="{{ $user->tgl_lahir }}">
                            </td>
                       </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>No Telepon</b></td>
                            <td class="col-sm-6 col-xs-6">
                                <input type="text" class="form-control" name="telepon" value="{{ $user->telepon }}">
                            </td>
                       </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>Email</b></td>
                            <td class="col-sm-6 col-xs-6">
                                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                            </td>
                       </tr>
                       <tr>
                          <td class="col-sm-2 col-xs-2"><b>Alamat</b></td>
                          <td class="col-sm-6 col-xs-6">
                            <textarea class="form-control" name="alamat" id="" rows="6">{{ $user->alamat }}</textarea>
                          </td>
                      </tr>
                      <tr>
                          <td class="col-sm-2 col-xs-2"><b>Level</b></td>
                          <td class="col-sm-4 col-xs-6">
                              <select name="id_level" class="form-control">
                                  <option value="">-- Pilih --</option>
                                  @foreach($level as $data)
                                    <option @if($user->id_level == $data->id_level ) selected @endif value="{{ $data->id_level }}"> {{ $data->nama_level }}</option>
                                  @endforeach
                              </select>
                          </td>
                     </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>New Password</b></td>
                            <td class="col-sm-4 col-xs-6">
                                <input type="password" class="form-control" name="password">
                                <small class="text-danger">*kosongi apabila tidak memperbarui kata sandi</small>
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
