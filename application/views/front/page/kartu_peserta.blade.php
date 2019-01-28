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
               <a href="//google.com" class="btn" style="background-color:#408ab4; color:white" download><i class="fa fa-download"></i> Cetak Kartu Peserta</a>
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
                              YAYASAN MA'HAD DARUN NAJAH<br><br>
                              PONDOK PESANTREN PPAI DARUN NAJAH<br><br>
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
                        <!-- tabel utama -->
                        <table style="width:90%;">
                           <tr>
                              <td>
                                 <!-- img santri -->
                                 <img src="" alt=""  style="width:200px;float:left; height:250px; background-color:#eeeeee"> 
                                 <!-- tabel isi --> 
                                 <table style="border:3px solid black">
                                    <tr>
                                       <th style="text-align:left;padding-left:10px;">Nama</th>
                                       <td style="padding-left:20px;">: Aura Kanza Caesaria</td>
                                    </tr>
                                    <tr>
                                       <th style="text-align:left;padding-left:10px;">TTL</th>
                                       <td style="padding-left:20px;">: Banjarmasin, 11 Februari 1998</td>
                                    </tr>
                                    <tr>
                                       <th style="text-align:left;padding-left:10px;">Alamat</th>
                                       <td style="padding-left:20px;">: Jl. Soekarno Hatta no. 9</td>
                                    </tr>
                                    <tr>
                                       <th style="text-align:left;padding-left:10px;">Jenjang</th>
                                       <td style="padding-left:20px;">: Madrasah Aliyah</td>
                                    </tr>
                                    <tr>
                                       <th colspan="2">
                                          <h4>Nomor Virtual Account</h4>
                                       </th>
                                    </tr>
                                    <tr>
                                       <th colspan="2">
                                          <h3>9883005511180001</h3>
                                       </th>
                                    </tr>
                                    <tr>
                                       <th colspan="2">
                                          <h4>Nomor Induk</h4>
                                       </th>
                                    </tr>
                                    <tr>
                                       <th colspan="2">
                                          <h3>180001</h3>
                                       </th>
                                    </tr>
                                 </table>
                                 <!-- tabel isi end-->
                              </td>
                           </tr>
                        </table>
                        <!-- tabel utama end -->
                     </div>
                     <!-- row end -->
                  </div>
                  <!-- card body start -->

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
                              <td style="text-align:right;">Malang,1 Januari 2019</td>
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