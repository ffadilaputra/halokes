@extends('admin.template')
@section('css')
  <link href="<?= base_url('assets/sb-admin/') ?>css/bootstrap-datepicker.min.css" rel="stylesheet">
@endsection
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
               <table border="0" class="table">
                   <tbody>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>Foto Profile</b></td>
                            <td class="col-sm-6 col-xs-6">
                                <input type="file" class="form-control" name="foto">

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
                            <td class="col-sm-2 col-xs-2"><b>Temlat Lahir</b></td>
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
                                <input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" name="tgl_lahir" >
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
@endsection
@section('javascript')
<script src="{{ base_url('assets/sb-admin/js/bootstrap-datepicker.min.js') }}"></script>
<script type="text/javascript">
  $('.datepicker').datepicker({
    format: 'yyyy-mm-dd'
  });
</script>
@endsection
