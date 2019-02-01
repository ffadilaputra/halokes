@extends('admin.layouts.default')
@section('content')

<section class="site-section py-lg">
    <div class="container">
        <!-- download -->
        <div class="form-group">
          <a onClick="print()" class="btn" style="background-color:#408ab4; color:white" download><i class="fa fa-download"></i> Cetak Kartu Peserta</a>
        </div>
        <div class="card">
            <!-- tabel header -->
            <table>
                <tr>
                    <td colspan="" align="right" style="border: 0px"><br><br>
                        <img src="{{ base_url('assets/wordify/') }}images/logo.jpg" alt="" align="center" width="128" height="120">
                    </td>
                    <td colspan="" style="text-align: left; border: 0px">
                        <br><br><br>
                        <h5>
                        YAYASAN MA'HAD DARUN NAJAH<br>
                        PONDOK PESANTREN PPAI DARUN NAJAH<br>
                        Jl. Pesantren, No. 51, Ngijo, Karangploso, Malang, (0341)5034501<br>
                        </h5>
                    </td>
                </tr>
            </table><hr>
            <!-- tabel header end -->

            <!-- card body start -->
            <div class="card-body">
                <!-- row start -->
                <div class="row">
                    <!-- tabel isi -->
                    <table>
                        <tr>
                        <img src="{{ base_url('assets/uploads/'.$santri->berkasSantri->foto_santri) }}" alt="" align="right" style="width:170px; height:220px; background-color:#eeeeee">
                        </tr>
                        <tr>
                            <th style="text-align:right;padding-right:10px;">Nama</th>
                            <td style="padding-left:20px;">{{ $santri['nama_lengkap'] }}</td>
                        </tr>

                        <tr>
                            <th style="text-align:right;padding-right:10px;">TTL</th>
                            <td style="padding-left:20px;">{{ $santri['tempat_lahir'] }}, {{ $santri['tgl_lahir'] }}</td>
                        </tr>
                        <tr>
                            <th style="text-align:right;padding-right:10px;">Jenjang</th>
                            @if($santri['tingkat_pendidikan'] == 'ma')
                                  <td style="padding-left:20px;">{{ 'Madarasah Aliyah' }}</td>
                                @elseif($santri['tingkat_pendidikan'] == 'mt')
                                  <td style="padding-left:20px;"> {{ 'Madarasah Tsanawiyah' }}</td>
                                @elseif($santri['tingkat_pendidikan'] == 'md')
                                <td style="padding-left:20px;"> {{ 'Madarasah Diniyah' }}</td>
                            @endif
                        </tr>
                        <!-- virtual acc -->
                        <table>
                            <tr>
                                <th>
                                    <h4>Nomor Virtual Account</h4>
                                    <h3>{{ $santri->virtualAkun->no_pendaftaran }}</h3>
                                    <h4>Nomor Induk</h4>
                                    <h3>{{ $santri->virtualAkun->nomor_induk }}</h3>
                                </th>
                            </tr>
                            
                        </table><!-- virtual acc end -->
                    </table> <!-- tabel isi end-->
                </div>
                <!-- row end -->
                <br>
            </div> <!-- card body start -->


                <!-- tabel footer -->
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <table>
                            <tr>
                                <td>Pengumuman</td>
                            </tr>
                            <tr>
                                <td>Pembayaran PPDB</td>
                                <td>: 1-31 Mei 2019</td>
                            </tr>
                            <tr>
                                <td>Checkin Pesantren</td>
                                <td>: 21 Juli 2019</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <table>
                            <tr>
                            <td style="text-align:right;">{{ $date_now }}</td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td style="text-align:right;">Petugas</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- tabel footer end -->
            <br>
        </div>
    </div>
</section>
@stop