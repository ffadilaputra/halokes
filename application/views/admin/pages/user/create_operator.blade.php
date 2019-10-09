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
            <?= form_open('admin/user/storeoperator') ?>
               <table class="table">
                   <tbody>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>Foto Profile</b></td>
                            <td class="col-sm-6 col-xs-6">
                                <div id="foto" width="150px"></div>
                            </td>
                       </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>Nama Lengkap</b></td>
                            <td class="col-sm-6 col-xs-6">
                              <input type="hidden" name="id_users" id="id_users" value="">
                              <select class="form-control" id="selectName" name="id_users" onchange="onSelect()">
                                      <option value="0">-- Pilih --</option>
                                  @foreach ($list as $item)
                                      <option value="{{ $item->id_users }}">{{ $item->nama_lengkap }}</option>
                                  @endforeach
                              </select>
                            </td>
                       </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>Tempat Lahir</b></td>
                            <td class="col-sm-6 col-xs-6">
                                <input type="text" class="form-control" id="tempat_lahir" disabled>
                            </td>
                       </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>Tanggal Lahir</b></td>
                            <td class="col-sm-6 col-xs-6">
                                <input type="text" class="form-control datepicker" id="tgl_lahir" disabled>
                            </td>
                       </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>No Telepon</b></td>
                            <td class="col-sm-6 col-xs-6">
                                <input type="text" class="form-control" id="telepon" disabled>
                            </td>
                       </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>Email</b></td>
                            <td class="col-sm-6 col-xs-6">
                                <input type="email" class="form-control" id="email" disabled>
                                @if($errors->has('email'))
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </td>
                       </tr>
                       <tr>
                          <td class="col-sm-2 col-xs-2"><b>Alamat</b></td>
                          <td class="col-sm-6 col-xs-6">
                            <textarea class="form-control" id="alamat" rows="6" disabled></textarea>
                          </td>
                      </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>New Password</b></td>
                            <td class="col-sm-4 col-xs-6">
                                <input type="password" class="form-control" name="password" value="">
                                @if($errors->has('password'))
                                    <small class="text-danger">{{ $errors->first('password') }}</small>
                                @endif
                                <!-- <small class="text-danger">*kosongi apabila tidak memperbarui kata sandi</small> -->
                            </td>
                       </tr>
                       <tr>
                            <td class="col-sm-2 col-xs-2"><b>Level</b></td>
                            <td>
                            <select class="form-control" name="id_level">
                                    <option value="0">-- Pilih --</option>
                                @foreach ($level as $item)
                                    <option value="{{ $item->id_level }}">{{ $item->nama_level }}</option>
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
@endsection
@section('javascript')
<script src="{{ base_url('assets/sb-admin/js/bootstrap-datepicker.min.js') }}"></script>
<script type="text/javascript">
  $('.datepicker').datepicker({
    format: 'dd-mm-yyyy'
  });
</script>
<script type="text/javascript">
  function onSelect() {
    var baseUrl = '<?= base_url() ?>';
    var data = <?= json_encode($list); ?>;
    var selectName = document.getElementById('selectName')
    var value_id = selectName.options[selectName.selectedIndex].value

    for (var i = 0; i < data.length; i++) {
      if (data[i].id_users === value_id) {
        document.getElementById('foto').innerHTML = `<img src="${baseUrl}assets/uploads/pegawai/${data[i].foto}" alt="Foto Profil">`
        document.getElementById('id_users').value = data[i].id_users
        document.getElementById('tempat_lahir').value = data[i].tempat_lahir
        document.getElementById('tgl_lahir').value = data[i].tgl_lahir
        document.getElementById('telepon').value = data[i].telepon
        document.getElementById('email').value = data[i].email
        document.getElementById('alamat').innerHTML = data[i].alamat
      }
    }
  }
</script>
@endsection
