@extends('guest.template')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      Data Pembayaran
    </h1>
  </div>
</div>

<!-- Catatan keuangan siswa -->
<div class="panel panel-default">
  <div class="panel-heading">
    <div class="row">
      <div class="col-lg-12">
        <h2>Catatan Keuangan Santri</h2>
        <hr>
        <div class="col-lg-6">
          <div class="form-group">
            <label>Tahap / Angsuran</label>
          </div>
          <table border="0" class="table table-hover">
            <?php $no = 1; ?>
            @foreach($angsuran as $value)
            <tr>
              <td>Tahap {{ $no++ }}</td>
              <td><label class="btn btn-info" disabled>Lunas</label></td>
            </tr>
            @endforeach
          </table>
          <div class="form-group">
            <table border="0" class="table table-hover">
              <tr>
                <td>Tanggungan Yang belum Lunas</td>
                <td>
                  <?php
                  $lapAngsuran = $laporanangsuran[0]['biaya'] / 3;
                  $sisaBagi3 = $lapAngsuran * count($angsuran);
                  $hasilAngsuran = $laporanangsuran[0]['biaya'] - $sisaBagi3;
                  ?>
                  <label class="btn btn-warning" disabled>{{ convertRupiah($hasilAngsuran) }}</label></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label>Syahriyah</label>
            </div>
            <div class="row">
              @foreach($spp as $value)
              <div class="col-md-4">
                <p class="btn btn-warning" disabled>{{ $value->bulan }} {{ $value->tahun_akademik }}</p>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- Catatan keuangan siswa end -->
  @stop
