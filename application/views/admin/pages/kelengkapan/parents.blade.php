@extends('admin.template')
@section('content')

<div class="row">

  <div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Data Ibu</h4>
        </div>
        <div class="panel-body">
          <h4><b>Data Pribadi</b></h4>
          <hr>
          <table class="table table-bordered table-hover">
              <tbody>
                  <tr>
                      <th>Nama Lengkap</th>
                      <td>{{ $parents->nama_lengkap }}</td>
                  </tr>
                  <tr>
                      <th>Panggilan</th>
                      <td>{{ $parents->panggilan }}</td>
                  </tr>
                  <tr>
                      <th>NIK</th>
                      <td>{{ $parents->nik }}</td>
                  </tr>
                  <tr>
                      <th>Tanggal Lahir</th>
                      <td>{{ $parents->tgl_lahir }}</td>
                  </tr>
              </tbody>
          </table>

          <h4><b>Alamat Lengkap</b></h4>
          <hr>
          <table class="table table-bordered table-hover">
              <tbody>
                  <tr>
                      <th>Provinsi</th>
                      <td>{{ $parents->provinsi }}</td>
                  </tr>
                  <tr>
                      <th>Kota</th>
                      <td>{{ $parents->kota }}</td>
                  </tr>
                  <tr>
                      <th>Alamat Lengkap</th>
                      <td>{{ $parents->nik }}</td>
                  </tr>
                  <tr>
                      <th>Tanggal Lahir</th>
                      <td>{{ $parents->alamat }}</td>
                  </tr>
              </tbody>
          </table>

          <h4><b>Pendidikan dan Pekerjaan</b></h4>
          <hr>
          <table class="table table-bordered table-hover">
              <tbody>
                  <tr>
                      <th>Pendidikan Terakhir</th>
                      <td>{{ $parents->pendidikan }}</td>
                  </tr>
                  <tr>
                      <th>Pekerjaan saat ini</th>
                      <td>{{ $parents->pekerjaan }}</td>
                  </tr>
                  <tr>
                      <th>Penghasilan perbulan</th>
                      <td>{{ $parents->penghasilan }}</td>
                  </tr>
              </tbody>
          </table>

          <h4><b>Status</b></h4>
          <hr>
          <table class="table table-bordered table-hover">
              <tbody>
                  <tr>
                      <th>Hubungan ibu dengan santri</th>
                      <td>{{ $parents->hbgn_ibu_santri }}</td>
                  </tr>
                  <tr>
                      <th>Status Ibu</th>
                      <td>{{ $parents->status_ibu }}</td>
                  </tr>
              </tbody>
          </table>
          
        </div>
    </div>

    <!-- Split button -->
</div>

<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Data Ayah</h4>
        </div>
        <div class="panel-body">
          <h4><b>Data Pribadi</b></h4>
          <hr>
          <table class="table table-bordered table-hover">
              <tbody>
                  <tr>
                      <th>Nama Lengkap</th>
                      <td>{{ $ayah->nama_lengkap }}</td>
                  </tr>
                  <tr>
                      <th>Panggilan</th>
                      <td>{{ $ayah->panggilan }}</td>
                  </tr>
                  <tr>
                      <th>NIK</th>
                      <td>{{ $ayah->nik }}</td>
                  </tr>
                  <tr>
                      <th>Tanggal Lahir</th>
                      <td>{{ $ayah->tgl_lahir }}</td>
                  </tr>
              </tbody>
          </table>

          <h4><b>Alamat Lengkap</b></h4>
          <hr>
          <table class="table table-bordered table-hover">
              <tbody>
                  <tr>
                      <th>Provinsi</th>
                      <td>{{ $ayah->provinsi }}</td>
                  </tr>
                  <tr>
                      <th>Kota</th>
                      <td>{{ $ayah->kota }}</td>
                  </tr>
                  <tr>
                      <th>Alamat Lengkap</th>
                      <td>{{ $ayah->nik }}</td>
                  </tr>
                  <tr>
                      <th>Tanggal Lahir</th>
                      <td>{{ $ayah->alamat }}</td>
                  </tr>
              </tbody>
          </table>

          <h4><b>Pendidikan dan Pekerjaan</b></h4>
          <hr>
          <table class="table table-bordered table-hover">
              <tbody>
                  <tr>
                      <th>Pendidikan Terakhir</th>
                      <td>{{ $ayah->pendidikan }}</td>
                  </tr>
                  <tr>
                      <th>Pekerjaan saat ini</th>
                      <td>{{ $ayah->pekerjaan }}</td>
                  </tr>
                  <tr>
                      <th>Penghasilan perbulan</th>
                      <td>{{ $ayah->penghasilan }}</td>
                  </tr>
              </tbody>
          </table>

          <h4><b>Status</b></h4>
          <hr>
          <table class="table table-bordered table-hover">
              <tbody>
                  <tr>
                      <th>Hubungan ayah dengan santri</th>
                      <td>{{ $ayah->hbgn_ayah_santri }}</td>
                  </tr>
                  <tr>
                      <th>Status ayah</th>
                      <td>{{ $ayah->status_ayah }}</td>
                  </tr>
              </tbody>
          </table>
          
        </div>
    </div>

    <!-- Split button -->
</div>

<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Data Wali</h4>
        </div>
        <div class="panel-body">
          <h4><b>Data Pribadi</b></h4>
          <hr>
          <table class="table table-bordered table-hover">
              <tbody>
                  <tr>
                      <th>Nama Lengkap</th>
                      <td>{{ $wali->nama_lengkap }}</td>
                  </tr>
                  <tr>
                      <th>Panggilan</th>
                      <td>{{ $wali->panggilan }}</td>
                  </tr>
                  <tr>
                      <th>NIK</th>
                      <td>{{ $wali->nik }}</td>
                  </tr>
                  <tr>
                      <th>Tanggal Lahir</th>
                      <td>{{ $wali->tgl_lahir }}</td>
                  </tr>
              </tbody>
          </table>

          <h4><b>Alamat Lengkap</b></h4>
          <hr>
          <table class="table table-bordered table-hover">
              <tbody>
                  <tr>
                      <th>Provinsi</th>
                      <td>{{ $wali->provinsi }}</td>
                  </tr>
                  <tr>
                      <th>Kota</th>
                      <td>{{ $wali->kota }}</td>
                  </tr>
                  <tr>
                      <th>Alamat Lengkap</th>
                      <td>{{ $wali->nik }}</td>
                  </tr>
                  <tr>
                      <th>Tanggal Lahir</th>
                      <td>{{ $wali->alamat }}</td>
                  </tr>
              </tbody>
          </table>

          <h4><b>Pendidikan dan Pekerjaan</b></h4>
          <hr>
          <table class="table table-bordered table-hover">
              <tbody>
                  <tr>
                      <th>Pendidikan Terakhir</th>
                      <td>{{ $wali->pendidikan }}</td>
                  </tr>
                  <tr>
                      <th>Pekerjaan saat ini</th>
                      <td>{{ $wali->pekerjaan }}</td>
                  </tr>
                  <tr>
                      <th>Penghasilan perbulan</th>
                      <td>{{ $wali->penghasilan }}</td>
                  </tr>
              </tbody>
          </table>

          <h4><b>Status</b></h4>
          <hr>
          <table class="table table-bordered table-hover">
              <tbody>
                  <tr>
                      <th>Hubungan Wali dengan santri</th>
                      <td>{{ $wali->hbgn_wali_santri }}</td>
                  </tr>
                  <tr>
                      <th>Status Wali</th>
                      <td>{{ $wali->status_wali }}</td>
                  </tr>
              </tbody>
          </table>
          
        </div>
    </div>

    <!-- Split button -->
</div>

</div>
@stop

