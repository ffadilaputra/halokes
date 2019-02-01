<!DOCTYPE html>
<html>
   <head>
      <title>Laporan</title>
      <style>
         table{
         border-collapse: collapse;
         width:90%;
         margin: 0 auto;
         }
         table th{
         border:0px solid #000;
         padding: 3px;
         font-weight: bold;
         text-align: center;
         font-size:15pt;
         }
         table td{
         border: 0px solid #000;
         padding: 3px;
         vertical-align: top;
         font-size:15pt;
         }
         .inlineTable {
            display: inline-block;
        }
      </style>
   </head>
   <body>
      <div class="wrap">
         <section class="site-section py-lg">
           <a href="" onClick="print()">Cetak Dokumen</a>
            <div class="container">
               <div class="card">
                  <table style="border:2px solid black; width:70%"> <!-- tabel utama border -->
                    <tr>
                        <td>
                            <!-- tabel header -->
                            <table>
                                <tr>
                                    <td align="right" ><br><br>
                                    <img src="{{ base_url('assets/wordify/') }}images/logo.jpg" alt="" align="center" width="128" height="120">
                                    </td>
                                    <td style="text-align: left; padding-left:20px;">
                                    <br>
                                    <h4>
                                        YAYASAN MA'HAD DARUN NAJAH<br>
                                        PONDOK PESANTREN PPAI DARUN NAJAH<br>
                                        Jl. Pesantren, No. 51, Ngijo, Karangploso, Malang, (0341)5034501<br>
                                    </h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                            </table>

                            <!-- tabel header end -->

                            <!-- card body start -->
                            <div class="card-body">

                                <!-- row start -->
                                <div class="row">
                                    <!-- tabel utama -->
                                    <table>
                                    <tr>
                                        <td >
                                        <!-- img santri -->
                                        @if(isset($santri->berkasSantri->foto_santri))
                                          <img src="{{ base_url('assets/uploads/'.$santri->berkasSantri->foto_santri) }}" alt=""  style="width:200px;float:left;margin-left:10px; height:250px;">
                                        @else
                                          <h3>Santri belum melengkapi berkas</h3>
                                        @endif
                                      </td>
                                        <td>

                                            <!-- tabel isi -->
                                            <table style="border:3px solid black">
                                                <tr>
                                                <th style="text-align:left;padding-left:10px;">Nama</th>
                                                <td style="padding-left:20px;">: {{ $santri['nama_lengkap'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th style="text-align:left;padding-left:10px;">TTL</th>
                                                    <td style="padding-left:20px;">: {{ $santri['tempat_lahir'] }}, {{ $santri['tgl_lahir'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th style="text-align:left;padding-left:10px;">Jenjang</th>
                                                    @if($santri['tingkat_pendidikan'] == 'ma')
                                                        <td style="padding-left:20px;">: {{ 'Madarasah Aliyah' }}</td>
                                                        @elseif($santri['tingkat_pendidikan'] == 'mt')
                                                        <td style="padding-left:20px;">: {{ 'Madarasah Tsanawiyah' }}</td>
                                                        @elseif($santri['tingkat_pendidikan'] == 'md')
                                                        <td style="padding-left:20px;">: {{ 'Madarasah Diniyah' }}</td>
                                                    @endif
                                                </tr>

                                                <tr>
                                                    <th colspan="2">
                                                        <h4>Nomor Virtual Account</h4>
                                                        @if(isset($santri->virtualAkun->no_virtual_account))
                                                            <h3>{{ $santri->virtualAkun->no_virtual_account }}</h3>
                                                        @else
                                                            <h3>Akun belum diverifikasi gan..</h3>
                                                        @endif
                                                        <h4>Nomor Induk</h4>
                                                        <h3>{{ $santri->virtualAkun->nomor_induk }}</h3>
                                                    </th>
                                                </tr>
                                                
                                            </table>
                                            <!-- tabel isi end-->
                                        </td>
                                    </tr>
                                    </table>
                                    <!-- tabel utama end -->
                                </div><!-- row end -->

                                <br>

                                <!-- footer row -->
                                <div class="row">
                                    <table>
                                        <tr>
                                            <td>
                                                <table style="width:90%">
                                                    <tr>
                                                        <td colspan="2">Pengumuman</td>
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
                                            </td>
                                            <td>
                                                <table style="width:90%">
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
                                            </td>
                                        </tr>
                                    </table><br>
                                </div> <!-- footer row end -->
                            </div>
                            <!-- card body start -->
                        </td>
                    </tr>
                  </table> <!-- tabel utama border end -->
               </div>
            </div>
         </section>
      </div>
   </body>
</html>
