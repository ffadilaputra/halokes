@extends('admin.template')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      Data Pembayaran Akademik
    </h1>
  </div>
</div>

<!-- identitas siswa -->
<div class="panel panel-default">
  <div class="panel-heading">
    <div class="row">
      <div class="col-lg-6">
        <div class="col-lg-12">
          <table class="table table-bordered table-hover">
            <tbody>
              <tr>
                <th class="col-sm-6 col-xs-6">Nama Lengkap</th>
                <td class="col-sm-6 col-xs-6">{{ $santri->nama_lengkap }}</td>
              </tr>
              <tr>
                <th class="col-sm-6 col-xs-6">Tingkat Pendidikan</th>
                <td class="col-sm-6 col-xs-6">
                  @if($santri->tingkat_pendidikan == 'mt')
                  <label class="text-success">Madarasah Tsanawiyah</label>
                  @elseif($santri->tingkat_pendidikan == 'ma')
                  <label class="text-success">Madarasah Aliyah</label>
                  @elseif($santri->tingkat_pendidikan == 'md')
                  <label class="text-success">Madarasah Diniyah</label>
                  @endif
                </td>
              </tr>
              <tr>
                <th class="col-sm-6 col-xs-6">Kelas</th>
                <td class="col-sm-6 col-xs-6">-</td>
              </tr>
              <tr>
                <th class="col-sm-6 col-xs-6">Tahun Akademik</th>
                <td class="col-sm-6 col-xs-6">{{$tahun_akademik->nama}}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <h4><b>Data Angsuran</b></h4>
            <hr>
            <div class="form-group">
              <label>Tahap / Angsuran</label>
              <table class="table table-bordered table-hover">
                <tbody>
                  <tr>
                    <td class="col-sm-6 col-xs-6"><b>Tahap 1</b></td>
                    @if($angsuran)
                    <td class="col-sm-6 col-xs-6">
                      <!-- untuk pembatalan <a href="{{ base_url('admin/santri/deleteAngsuran'.$santri->id_santri.'/'.'1')}}"  class="btn btn-success" disabled>Lunas</a> -->
                      <a href="#"  class="btn btn-success" disabled>Lunas</a>
                    </td>
                    <td></td>
                    @else
                    <form action="{{ base_url('admin/santri/angsuran/1/'.$santri->id_santri.'/'.$tahun_akademik->nama) }}" method="post" onsubmit="return confirm('Anda yakin dengan aksi ini!');">
                      <td class="col-sm-6 col-xs-6">
                        <div class="form-group">
                          <input type="number" name="nominal" class="form-control" placeholder="Nominal">
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <input type="submit" class="btn btn-primary" value="Bayar">
                        </div>
                      </td>
                    </form>
                    @endif
                  </tr>
                  <tr>
                    <td class="col-sm-6 col-xs-6"><b>Tahap 2</b></td>
                    @if($angsuran_2)
                    <td class="col-sm-6 col-xs-6">
                      <!-- untuk pembatalan <a href="{{ base_url('admin/santri/deleteAngsuran'.$santri->id_santri.'/'.'1')}}"  class="btn btn-success" disabled>Lunas</a> -->
                      <a href="#"  class="btn btn-success" disabled>Lunas</a>
                    </td>
                    <td></td>
                    @else
                    <form action="{{ base_url('admin/santri/angsuran/2/'.$santri->id_santri.'/'.$tahun_akademik->nama) }}" method="post" onsubmit="return confirm('Anda yakin dengan aksi ini!');">
                      <td class="col-sm-6 col-xs-6">
                        <div class="form-group">
                          <input type="number" name="nominal" class="form-control" placeholder="Nominal">
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <input type="submit" class="btn btn-primary" value="Bayar">
                        </div>
                      </td>
                    </form>
                    @endif
                  </tr>
                  <tr>
                    <td class="col-sm-6 col-xs-6"><b>Tahap 3</b></td>
                    @if($angsuran_3)
                    <td class="col-sm-6 col-xs-6">
                      <!-- untuk pembatalan <a href="{{ base_url('admin/santri/deleteAngsuran'.$santri->id_santri.'/'.'1')}}"  class="btn btn-success" disabled>Lunas</a> -->
                      <a href="#"  class="btn btn-success" disabled>Lunas</a>
                    </td>
                    <td></td>
                    @else
                    <form action="{{ base_url('admin/santri/angsuran/3/'.$santri->id_santri.'/'.$tahun_akademik->nama) }}" method="post" onsubmit="return confirm('Anda yakin dengan aksi ini!');">
                      <td class="col-sm-6 col-xs-6">
                        <div class="form-group">
                          <input type="number" name="nominal" class="form-control" placeholder="Nominal">
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <input type="submit" class="btn btn-primary" value="Bayar">
                        </div>
                      </td>
                    </form>
                    @endif
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Split button -->
      </div>

      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-body">
            <h4><b>Data Syahriyah</b></h4>
            <hr>
            <div class="form-group">
              <div class="col-md-3">
                @if($juli)
                <a href="#"  class="btn-spp btn btn-success" disabled>Juli</a>
                @else
                <a href="{{ base_url('admin/santri/bayarSpp/'.$santri->id_santri.'/'.'juli'.'/'.$tahun_akademik->nama) }}" class="btn-spp btn btn-danger" onclick="alert('Anda yakin dengan aksi ini')">Juli</a>
                @endif
              </div>
              <div class="col-md-3">
                @if($agustus)
                <a href="#"  class="btn-spp btn btn-success" disabled>Agustus</a>
                @else
                <a href="{{ base_url('admin/santri/bayarSpp/'.$santri->id_santri.'/'.'agustus'.'/'.$tahun_akademik->nama) }}" class="btn-spp btn btn-danger" onclick="alert('Anda yakin dengan aksi ini')">Agustus</a>
                @endif
              </div>
              <div class="col-md-3">
                @if($september)
                <a href="#"  class="btn-spp btn btn-success" disabled>September</a>
                @else
                <a href="{{ base_url('admin/santri/bayarSpp/'.$santri->id_santri.'/'.'september'.'/'.$tahun_akademik->nama) }}" class="btn-spp btn btn-danger" onclick="alert('Anda yakin dengan aksi ini')">September</a>
                @endif
              </div>
              <div class="col-md-3">
                @if($oktober)
                <a href="#"  class="btn-spp btn btn-success" disabled>Oktober</a>
                @else
                <a href="{{ base_url('admin/santri/bayarSpp/'.$santri->id_santri.'/'.'oktober'.'/'.$tahun_akademik->nama) }}" class="btn-spp btn btn-danger" onclick="alert('Anda yakin dengan aksi ini')">Oktober</a>
                @endif
              </div>
              <div class="col-md-3">
                @if($november)
                <a href="#"  class="btn-spp btn btn-success" disabled>November</a>
                @else
                <a href="{{ base_url('admin/santri/bayarSpp/'.$santri->id_santri.'/'.'november'.'/'.$tahun_akademik->nama) }}" class="btn-spp btn btn-danger" onclick="alert('Anda yakin dengan aksi ini')">November</a>
                @endif
              </div>
              <div class="col-md-3">
                @if($desember)
                <a href="#"  class="btn-spp btn btn-success" disabled>Desember</a>
                @else
                <a href="{{ base_url('admin/santri/bayarSpp/'.$santri->id_santri.'/'.'desember'.'/'.$tahun_akademik->nama) }}" class="btn-spp btn btn-danger" onclick="alert('Anda yakin dengan aksi ini')">Desember</a>
                @endif
              </div>
              <div class="col-md-3">
                @if($januari)
                <a href="#"  class="btn-spp btn btn-success" disabled>Januari</a>
                @else
                <a href="{{ base_url('admin/santri/bayarSpp/'.$santri->id_santri.'/'.'januari'.'/'.$tahun_akademik->nama) }}" class="btn-spp btn btn-danger" onclick="alert('Anda yakin dengan aksi ini')">Januari</a>
                @endif
              </div>
              <div class="col-md-3">
                @if($februari)
                <a href="#"  class="btn-spp btn btn-success" disabled>Februari</a>
                @else
                <a href="{{ base_url('admin/santri/bayarSpp/'.$santri->id_santri.'/'.'februari'.'/'.$tahun_akademik->nama) }}" class="btn-spp btn btn-danger" onclick="alert('Anda yakin dengan aksi ini')">Februari</a>
                @endif
              </div>
              <div class="col-md-3">
                @if($maret)
                <a href="#"  class="btn-spp btn btn-success" disabled>Maret</a>
                @else
                <a href="{{ base_url('admin/santri/bayarSpp/'.$santri->id_santri.'/'.'maret'.'/'.$tahun_akademik->nama) }}" class="btn-spp btn btn-danger" onclick="alert('Anda yakin dengan aksi ini')">Maret</a>
                @endif
              </div>
              <div class="col-md-3">
                @if($april)
                <a href="#"  class="btn-spp btn btn-success" disabled>April</a>
                @else
                <a href="{{ base_url('admin/santri/bayarSpp/'.$santri->id_santri.'/'.'april'.'/'.$tahun_akademik->nama) }}" class="btn-spp btn btn-danger" onclick="alert('Anda yakin dengan aksi ini')">April</a>
                @endif
              </div>
              <div class="col-md-3">
                @if($mei)
                <a href="#"  class="btn-spp btn btn-success" disabled>Mei</a>
                @else
                <a href="{{ base_url('admin/santri/bayarSpp/'.$santri->id_santri.'/'.'mei'.'/'.$tahun_akademik->nama) }}" class="btn-spp btn btn-danger" onclick="alert('Anda yakin dengan aksi ini')">Mei</a>
                @endif
              </div>
              <div class="col-md-3">
                @if($juni)
                <a href="#"  class="btn-spp btn btn-success" disabled>Juni</a>
                @else
                <a href="{{ base_url('admin/santri/bayarSpp/'.$santri->id_santri.'/'.'juni'.'/'.$tahun_akademik->nama) }}" class="btn-spp btn btn-danger" onclick="alert('Anda yakin dengan aksi ini')">Juni</a>
                @endif
              </div>
            </div>
          </div>
        </div>
        <!-- Split button -->
      </div>

      <div class="col-md-12 text-center">
        <a href="{{ base_url('admin/report/pembayaran/'.$santri->id_santri) }}" target="_blank" class="btn-spp btn btn-warning" style="padding-left: 30px; padding-right: 30px;">Print Kwitansi</a>
      </div>

    </div>
  </div>
</div> <!-- identitas siswa end -->
@stop
