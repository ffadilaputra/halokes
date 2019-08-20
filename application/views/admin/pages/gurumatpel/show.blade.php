@extends('admin.template')

@section('content')

<div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
          <div class="panel-heading">
              <h4>Detail Guru Mata Pelajaran</h4>
          <a class="btn btn-success" href="{{ base_url('admin/GuruMatpel/create/'.$edit->id_gurumatpel) }}" style="float:right"><i class="fa fa-pencil"></i> Edit</a>
          </div>
          <div class="panel-body">
            <h4><b>Data</b></h4>
            <hr>
            <table class="table table-bordered table-hover table-responsive">
                <tbody>
                    <tr>
                        <th>Nama Guru</th>
                        <td>{{ $edit->detailGuru->detailGuru->nama_lengkap }}</td>
                    </tr>
                    <tr>
                        <th>Nama Kelas</th>
                        <td>{{ $edit->detailMasterKelas->nama_kelas }}</td>
                    </tr>
                    <tr>
                        <th>Mata Pelajaran</th>
                        <td>{{ $edit->detailMatpel->nama_matpel }}</td>
                    </tr>
                    <tr>
                        <th>Keterangan</th>
                        <td>{{ $edit->keterangan }}</td>
                    </tr>
                </tbody>
            </table>
          </div>
      </div>
      <!-- Split button -->
  </div>
  </div>

@stop