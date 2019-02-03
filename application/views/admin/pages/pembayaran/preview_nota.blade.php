<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <title>Nota</title>
      <style>
         table{
         /* border-collapse: collapse;
         width:70%;
         margin: 0 auto; */
         }
         table th{
         /* border:0px solid #000 !important; */
         }
         table td{
         border: 0px solid #000;
         }
      </style>
   </head>
   <body>
      <br><br>
      <div class="container-fluid" >
         <div class="form-group">
            <button onClick="print()" class="btn btn-success"></i>Cetak</button>
         </div>
         <div class="card">
            <!-- header -->
            <h4 class="card-header" align="center">Bukti Pembayaran Santri</h4>
            <h5 class="card-header" align="center">Nomor : A</h5>
            <!-- header end -->
            <!-- body -->
            <div class="card-body">
               <!-- table responsive -->
               <div class="table-responsive">
                  <table class="table table-bordered">
                     <thead>
                        <!-- main -->
                        <tr>
                           <!-- left -->
                           <td style="border:0px solid white">
                              <!-- tabel left -->
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th style="border:0px solid white">Nomor Induk</th>
                                       <td colspan="3" style="border:0px solid white">: {{ $tanggungan->detailSantri->virtualAkun->nomor_induk }}</td>
                                    </tr>
                                    <tr>
                                       <th style="border:0px solid white">Tahun Pelajaran</th>
                                       <td colspan="3" style="border:0px solid white">: {{ $tanggungan->detailTahun->nama }}</td>
                                    </tr>
                                    <tr>
                                       <th colspan="4" style="border:0px solid white">Akumulasi Biaya dan Pembayaran/ Tanggungan</th>
                                    </tr>
                                    <tr>
                                       <!-- <th>No</th> -->
                                       <th>Nama Biaya</th>
                                       <th>Biaya</th>
                                       <th>Bayar</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @php
                                    $sum=0;
                                    $nom=0;
                                    @endphp
                                    @foreach($list as $data)
                                    <tr>
                                       <!-- <td>1</td> -->
                                       <td>{{ $data->category->nama }}</td>
                                       <td>{{ convertRupiah($data->category->biaya) }}</td>
                                       <td>{{ convertRupiah($data->nominal) }}</td>
                                    </tr>
                                    @php
                                    $sum = $sum+$data->category->biaya;
                                    $nom = $nom+$data->nominal;
                                    @endphp
                                    @endforeach
                                    <tr>
                                       <!-- <td></td> -->
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                    </tr>
                                    <tr>
                                       <!-- <td></td> -->
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                    </tr>
                                    <tr>
                                       <td colspan="2">Total Biaya</td>
                                       <td>{{ convertRupiah($sum) }}</td>
                                       <td>{{ convertRupiah($nom) }}</td>
                                    </tr>
                                    <tr>
                                       <td colspan="2">Potongan</td>
                                       <td></td>
                                       <td> - </td>
                                    </tr>
                                    <tr>
                                       <td colspan="3">Tanggungan</td>
                                       <td>
                                          {{ convertRupiah($t= $nom - $sum) }}
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <!-- table left end -->
                           </td>
                           <!-- left end -->
                           <!-- right -->
                           <td style="border:0px solid white">
                              <!-- utama -->
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th style="border:0px solid white">Nama</th>
                                       <td colspan="2" style="border:0px solid white">: {{ $tanggungan->detailSantri->nama_lengkap }}</td>
                                    </tr>
                                    <tr>
                                       <th style="border:0px solid white">Kelas</th>
                                       <td colspan="2" style="border:0px solid white">: - </td>
                                    </tr>
                                    <tr>
                                       <th colspan="4" style="border:0px solid white">Jenis Pembayaran</th>
                                    </tr>
                                    <tr>
                                       <th>Nama Biaya</th>
                                       <th>Bayar</th>
                                       <th>Tanggal</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @php
                                    $total_pengeluaran=0;
                                    @endphp
                                    @foreach($keuangan as $key => $val)
                                    <tr>
                                       <td> {{ $val->nama }}</td>
                                       <td> {{ convertRupiah($val->biaya) }}</td>
                                       <td></td>
                                    </tr>
                                    <tr>
                                        @php
                                        $total_pengeluaran = $total_pengeluaran + $val->biaya
                                        @endphp
                                        @endforeach
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                    </tr>
                                    <tr>
                                       <td colspan="1">Total Biaya</td>
                                       <td colspan="2">{{ convertRupiah($total_pengeluaran)  }}</td>
                                    </tr>
                                    <tr>
                                       <td colspan="1">Potongan</td>
                                       <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                       <td colspan="1">Total Terbayar</td>
                                       <td colspan="2"> {{ convertRupiah($nom) }} </td>
                                    </tr>
                                    <tr>
                                       <td colspan="">Terbilang</td>
                                       <td colspan="2">{{ terbilang($nom) }}</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <!-- utama end -->
                           </td>
                           <!-- right end -->
                        </tr>
                        <!-- main end -->
                     </thead>
                  </table>
               </div>
               <!-- table responsive end -->
            </div>
            <!-- body end -->
         </div>
      </div>
   </body>
</html>