
<!DOCTYPE html>
<html>
   <head>
      <title>Laporan</title>
      <style>
         table{
         border-collapse: collapse;
         width:70%;
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
          <div class="form-control">
            <button onCLick="print()" class="btn btn-success">Cetak kartu</button>
            <a href="{{ base_url('main') }}" >Kembali ke laman utama</a>
          </div>
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
                                        <td>
                                            <!-- img santri -->
                                        <img src="{{ base_url('assets/uploads/'.$gambar->foto_santri) }}" alt=""  style="width:170px;float:left; height:220px; background-color:#eeeeee">
                                            <!-- tabel isi -->
                                            <table style="border:3px solid black">
                                                <tr>
                                                <th style="text-align:left;padding-left:10px;">Nama</th>
                                                <td style="padding-left:20px;">: {{ $santri['nama_lengkap'] }}</td>
                                                </tr>
                                                <tr>
                                                <th style="text-align:left;padding-left:10px;">TTL</th>
                                                <td style="padding-left:20px;">: {{ $santri['tempat_lahir'] }}, {{ $lahir }}</td>
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
                                                    <h4>Nomor Pendaftaran</h4>
                                                    <h3>{{ $nomor }}</h3>
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
