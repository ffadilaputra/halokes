@extends('admin.template')
@section('content')

<div class="row">
  <div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Data Pribadi santri</h4>
            <a class="btn btn-success" href="<?= base_url('admin/parents/santri/'.$santri->id_santri) ?>" style="float:right"><i class="fa fa-pencil"></i> Edit</a>
        </div>
        <div class="panel-body">
          <h4><b>Data Pribadi</b></h4>
          <hr>
          <table class="table table-bordered table-hover">
              <tbody>
                  <tr>
                      <th>Nama Lengkap</th>
                      <td>{{ $santri->nama_lengkap }}</td>
                  </tr>
                  <tr>
                      <th>Panggilan</th>
                      <td>{{ $santri->panggilan }}</td>
                  </tr>
                  <tr>
                      <th>Jenis Kelamin</th>
                      <td>{{ $santri->jenis_kelamin }}</td>
                  </tr>
                  <tr>
                      <th>NIK</th>
                      <td>{{ $santri->nik }}</td>
                  </tr>
                  <tr>
                      <th>Tempat,Tanggal Lahir</th>
                      <td>{{ $santri->tempat_lahir }}, {{ tgl_indo($santri->tgl_lahir) }}</td>
                  </tr>
              </tbody>
          </table>

          <h4><b>Alamat Lengkap</b></h4>
          <hr>
          <table class="table table-bordered table-hover">
              <tbody>
              </tbody>
          </table>

          <h4><b>Data Keluarga</b></h4>
          <hr>
          <table class="table table-bordered table-hover">
              <tbody>
                  <tr>
                      <th>Nomor KK</th>
                      <td>{{ $santri->no_kk }}</td>
                  </tr>
                  <tr>
                      <th>Nomor KIP</th>
                      <td>{{ $santri->no_kip }}</td>
                  </tr>
                  <tr>
                      <th>Nomor BPJS</th>
                      <td>{{ $santri->no_bpjs }}</td>
                  </tr>
                  <tr>
                      <th>Status Keluarga</th>
                      <td>{{ $santri->status_keluarga }}</td>
                  </tr>
                  <tr>
                      <th>Nomor Jamkes</th>
                      <td>{{ $santri->no_jamkes }}</td>
                  </tr>
                  <tr>
                      <th>Status Saudara</th>
                  <td><label for="">Anak ke </label> {{ $santri->anak_ke }} <label>dari</label> {{ $santri->jml_saudara }} <label>bersaudara</label></td>
                  </tr>
              </tbody>
          </table>

          <h4><b>Hobbi dan Cita-cita</b></h4>
          <hr>
          <table class="table table-bordered table-hover">
              <tbody>
                  <tr>
                      <th>Hobbi</th>
                      <td>{{ $santri->hobi }}</td>
                  </tr>
                  <tr>
                      <th>Cita - Cita</th>
                      <td>{{ $santri->cita_cita }}</td>
                  </tr>
                  <tr>
                    <th>Berkebutuhan Khusus</th>
                    <td>{{ $santri->kebutuhan_khusus }}</td>
                </tr>
              </tbody>
          </table>

        </div>
    </div>

    <!-- Split button -->
</div>
</div>
@stop
