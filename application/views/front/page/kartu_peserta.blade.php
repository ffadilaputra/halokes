@extends('front.template')
@section('content')
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
      </style>
   </head>
   <body>
      <div class="wrap">
         <section class="site-section py-lg">
            <div class="container">
               <!-- download -->
               <a href="{{base_url('ppdb/santri/cetak') }}" class="btn" style="background-color:#408ab4; color:white" onclick=print();><i class="fa fa-download"></i> Cetak Kartu Peserta</a>
               <center><a href="{{ base_url('main') }}" >Kembali ke laman utama</a></center>
               <br><br>
               <div class="card">
                  <!-- tabel header -->
                  <table style="width:100%;">
                     <tr>
                        <td align="left" ><br>
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
                  </table>
                  <hr>
                  <!-- tabel header end -->
                  <!-- card body start -->
                  <div class="card-body">
                     <!-- row start -->
                     <div class="row">
                        <!-- tabel isi -->
                        <table>
                           <tr>
                              <img src="" alt="" align="right" style="width:170px; height:220px; background-color:#eeeeee">
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
                                    <h3>{{ $nomor }}</h3>
                                    <h4>Nomor Induk</h4>
                                    <h3>{{ $no_induk }}</h3>
                                 </th>
                              </tr>
                           </table>
                           <!-- virtual acc end -->
                        </table>
                        <!-- tabel isi end-->
                     </div>
                     <!-- row end -->
                     <br>
                  </div>
                  <!-- card body start -->
                  <!-- tabel footer -->
                  <div class="row">
                     <div class="col-md-6 col-lg-6">
                        <table>
                           <tr>
                              <td>Pengumuman</td>
                           </tr>
                           @foreach($pengumuman as $data)
                           <tr>
                               <td> {{ $data->pengumuman }}</td>
                               <td> {{ $data->keterangan }}</td>
                           </tr>
                           @endforeach
                        </table>
                     </div>
                     <div class="col-md-6 col-lg-6">
                        <table>
                           <tr>
                              <td style="text-align:right;">Malang, {{ $date_now }}</td>
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
      </div>
   </body>
</html>
@endsection
