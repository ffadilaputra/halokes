@extends('admin.template')
@section('content')
<div class="col-lg-12">
  <h1 class="page-header">
    Laporan Keuangan Syahriyah
  </h1>
  <div class="panel panel-default">
    <div class="panel-body">
        <h4><b>Cari Berdasarkan Tanggal</b></h4> <hr>
      <form action="{{ base_url('admin/Pembayaran/sppPerTanggal') }}" method="post">
        <div class="form-group col-md-1">
          <label for="">Tanggal</label>
        </div>
        <div class="form-group col-md-4">
          <input type="date" name="tanggal" class="form-control" placeholder="Pilih Tanggal">
        </div>
        <div class="form-group col-md-4">
          <select class="form-control" name="tahun_akademik">
            @foreach($alltahunakademik as $data)
            <option value="{{ $data['nama'] }}">{{ $data['nama'] }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group col-md-3">
          <select class="form-control" name="jenjang">
            <option value="mt">Madarasah Tsanawiyah</option>
            <option value="ma">Madarasah Aliyah</option>
            <option value="md">Madarasah Diniyah</option>
          </select>
        </div>
        <div class="form-group col-md-3">
          <input type="submit" class="btn btn-primary" value="Submit">
        </div>
      </form>
    </div>
  </div>
</div>
<table class="table" id="main">
  <thead>
    <tr>
      <th>No.</th>
      <th>Nomor VA Santri</th>
      <th>Nama Santri</th>
      <th>Tanggal</th>
      <th>Option</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; ?>
    @if(!empty($jenjang))
    @foreach($spp as $data)
    @if($data->detailSantri->tingkat_pendidikan == $jenjang)
    <tr>
      <td>{{ $no++ }}</td>
      <td>{{ $data->detailSantri->virtualAkun->no_virtual_account }}</td>
      <td>{{ $data->detailSantri->nama_lengkap }}</td>
      <td>{{ $data->created_at->format('d-m-Y h:i:s') }}</td>
      <td>
        <a class="btn btn-warning" href="{{ base_url('admin/santri/pembayaran/').$data->id_santri }}"><i class="fa fa-eye"></i></a>
        <!-- <a class="btn btn-danger" href="{{ base_url('admin/pembayaran/spp_delete/').$data->id_spp }}"><i class="fa fa-trash"></i></a> -->
      </td>
    </tr>
    @endif
    @endforeach
    @else
    @foreach($spp as $data)
    <tr>
      <td>{{ $no++ }}</td>
      <td>{{ $data->detailSantri->virtualAkun->no_virtual_account }}</td>
      <td>{{ $data->detailSantri->nama_lengkap }}</td>
      <td>{{ $data->created_at->format('d-m-Y h:i:s') }}</td>
      <td>
        <a class="btn btn-warning" href="{{ base_url('admin/santri/pembayaran/').$data->id_santri }}"><i class="fa fa-eye"></i></a>
        <!-- <a class="btn btn-danger" href="{{ base_url('admin/pembayaran/spp_delete/').$data->id_spp }}"><i class="fa fa-trash"></i></a> -->
      </td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
<hr>
<div class="row" style="margin-bottom: 40px;">
  <div class="col-md-4">
    <h3>Syahriyah tahun <?php (empty($laporanspp[0]['tahun_akademik'])) ? print $tahunakademik : print $laporanspp[0]['tahun_akademik'] ?></h3>
  </div>
  <div class="col-md-4">
    <ul>
      <h3>Total pembayaran</h3>
    </ul>
  </div>
  <div class="col-md-4">
    <?php $totaltransaksi = $laporanspp[0]['biaya'] * count($spp);  ?>
    <h3>{{ convertRupiah($totaltransaksi) }}</h3>
  </div>
</div>
@stop
