@extends('admin.template')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      Data santri
    </h1>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          <i class="fa fa-book" aria-hidden="true"></i> Data Santri
        </h3>
      </div>
      <div class="panel-body">
        <?= form_open('admin/GenerateLogin/store'); ?>
        <div class="table-responsive">
          <table id="main" class="table table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th>
                  <input type="checkbox" id="checkAll" />
                </th>
                <th>Virtual Akun</th>
                <th>Nama Lengkap</th>
                <th>Tanggal lahir</th>
              </tr>
            </thead>
            <tbody>
              @foreach($santri as $data)
                @foreach($guest as $val)
                  @if($data->id_santri !== $val->id_santri)
                  <tr>
                    <td>
                      <input type="checkbox" class='form-control checkbox-name' name="id_santri[]"
                      value="{{ $data->id_santri }}">
                    </td>
                    <td>{{ $data->virtualAkun->no_virtual_account }}</td>
                    <td>{{ $data->nama_lengkap }}</td>
                    <td>{{ tgl_indo($data->tgl_lahir) }}</td>
                  </tr>
                  @endif
                @endforeach
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="text-left">
          <input type="submit" value="Generate Login" name="submit" class="btn btn-success">
        </div>
        <?= form_close() ?>
      </div>
    </div>
  </div>
</div>
@stop
