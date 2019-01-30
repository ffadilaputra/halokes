@extends('front.template')
@section('content')

<div class="wrap">
    <section class="site-section py-lg">
      <div class="container">
        <div class="row blog-entries element-animate">
          <div class="col-md-12 col-lg-8 main-content">
            <img src="{{ base_url('assets/images/kegiatan-min.jpeg') }}" alt="Image" class="img-fluid mb-5">
            <h1 class="mb-4">KEGIATAN SANTRI</h1>
            <a class="category mb-5" href="#">Kegiatan</a> <a class="category mb-5" href="#">Ponpes</a>
            <div class="post-content-body">
               <div>
                    <p>
                    Kegiatan santri di Pondok Pesantren Salafiyah PPAI Darun Najah didesain secara padat untuk memungkinkan santri bisa fokus dalam pembelajaran dan menginternalisasi ajaran dan pelajaran yang diberikan dan menjadi tujuan santri belajar di Pondok Pesantren, baik pelajaran formal, non formal maupun ekstrakurikuler. <br>
                    Berikut ini jadual kegiatan harian, mingguan dan bulanan yang wajib diikuti oleh setiap santri selama di pondok pesantren.
                    </p>
                    <h5 style="text-align:center">KEGIATAN HARIAN</h5>
                    <table class="table table-bordered table-hover">
                        <thead style="text-align:center">
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center">
                            <tr>
                                <td>1</td>
                                <td>03:30 – 04:00</td>
                                <td>Tahajud dan persiapan sholat Shubuh</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>04:00 – 04:30</td>
                                <td>Sholat Shubuh berjamaah</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>04:30 – 05:45</td>
                                <td>Pengajian Madrasah Quraniyah</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>05:50 – 06:00</td>
                                <td>Sholat dhuha berjamaah</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>06:00 – 06:30</td>
                                <td>Kebersihan, mandi dan persiapan kegiatan madrasah formal</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>06.30 – 07.00</td>
                                <td>Pengajian balaghan kitab kuning Syaikhina</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>07:00 – 09:00</td>
                                <td>Kegiatan pembelajaran madrasiyah formal sesi 1</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>09:00 – 09:20</td>
                                <td>Istirahat dan sarapan pagi</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>09:20 – 12:20</td>
                                <td>Kegiatan pembelajaran madrasiyah formal sesi 2</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>12.20 – 12.45</td>
                                <td>Persiapan sholat Dhuhur</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>12:45 – 13:30</td>
                                <td>Sholat Dhuhur berjamaah</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>13:30 – 15.00</td>
                                <td>Istirahat siang</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>15.00 – 15.30</td>
                                <td>Mandi sore dan persiapan sholat Asar</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>15:30 – 16:00</td>
                                <td>Sholat Ashar berjamaah</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>16:00 – 17:30</td>
                                <td>Kegiatan pembelajaran madrasiyah diniyah sesi 1</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>17:30 – 18:00</td>
                                <td>Istirahat dan makan sore</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>18:00 – 18:30</td>
                                <td>Istirahat dan makan sore</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>18:30 – 20:00</td>
                                <td>Kegiatan pembelajaran madrasiyah diniyah sesi 2</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>20:00 – 20:30</td>
                                <td>Sholat Isya’ berjamaah</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>20:30 – 22:00</td>
                                <td>Wajib Belajar</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>22:00 – 03:30</td>
                                <td>Istirahat</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>

                    <h5 style="text-align:center">KEGIATAN MINGGUAN</h5>
                    <table class="table table-bordered table-hover">
                        <thead style="text-align:center">
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center">
                            <tr>
                                <td>1</td>
                                <td>Senin malam selasa bada Isya</td>
                                <td>Khitobah (latihan ceramah da’i)</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Kamis malam Jumat bada magrib</td>
                                <td>Pembacaan Rotibul Hadad</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Kamis malam Jumat bada Isya</td>
                                <td>Pembacaan Maulid Nabi Muhammad SAW</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Jum’at pagi bada subuh shubuh</td>
                                <td>Ziaroh maqbaroh untuk pembacaan surat Yasin, surat Kahfi dan pembacaan Tahlil.</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Jum’at pagi bada sholat dhuha</td>
                                <td>Ro’an (kerjabakti) bersih Jumat</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Jum’at malam sabtu bada Isya</td>
                                <td>Pengajian akhlak oleh pengasuh</td>
                            </tr>
                        </tbody>
                    </table><br>

                    <h5 style="text-align:center">KEGIATAN BULANAN</h5>
                    <table class="table table-bordered table-hover">
                        <thead style="text-align:center">
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center">
                            <tr>
                                <td>1</td>
                                <td>Kamis pertama tiap awal bulan</td>
                                <td>Pengajian khusus wali santri oleh pengasuh</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Senin malam selasa awal bulan</td>
                                <td>Syawir (musyawarah santri)</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Kamis malam Jumat terakhir</td>
                                <td>Kordinasi pengurus dan ketua kamar</td>
                            </tr>
                        </tbody>
                    </table><br>

                    <h5 style="text-align:center">KEGIATAN TAHUNAN</h5>
                    <table class="table table-bordered table-hover">
                        <thead style="text-align:center">
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center">
                            <tr>
                                <td>1</td>
                                <td>10 Dzulhijjah</td>
                                <td>Sholat Ied (Idul Adha) berjamaah di pondok pesantren</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Rabiul Awal*</td>
                                <td>Peringatan Maulid Nabi Muhammad SAW</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>19 Rajab</td>
                                <td>Rajabiyah dan haul Ibu Nyai Hj. Halimatus Sa’diyah</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>14 Syaban</td>
                                <td>Pentas malam santri (ajang kreasi seni santri)</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>15 Syaban</td>
                                <td>Haflah dalam rangka haul Romo KH. M. Said Ketapang</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>1 – 16 Ramadhan</td>
                                <td>Kegiatan Pondok Ramadhan</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Malam 17 Ramadhan</td>
                                <td>Khotmil Quran dan pengajian menjelang libur hari raya</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>17 Agustus</td>
                                <td>Lomba peringatan HUT kemerdekaan Indonesia</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>22 Oktober</td>
                                <td>Lomba-lomba dalam rangka Hari Santri Nasional</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Desember*</td>
                                <td>Class meeting (lomba menjelang liburan semester ganjil)</td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="font-style: italic; font-size:11pt; color:red;">*Tanggal menyesuaikan</p>
                    <br>

                    <h5 style="text-align:center">KEGIATAN EKSTRAKURIKULER</h5>
                    <p>Kegiatan ekstrakurikuler dilaksanakan pada luar jam madrasah dan juga pada hari libur di hari Kamis dan Jumat. Adapun kegiatan ekstrakurikuler antara lain sebagai berikut:</p>

                    <h5 style="text-align:center">SANTRI PUTERA</h5>
                    <ul>Bidang minat bakat</ul>
                    <ol>
                        <li>Pramuka (ekstra wajib)</li>
                        <li>Sholawat al-Banjari</li>
                        <li>Pencak silat pagar nusa</li>
                        <li>PMR</li>
                        <li>Qiro’ah</li>
                        <li>Kaligrafi</li>
                        <li>Futsal</li>
                    </ol>
                    <ul>Bidang keterampilan dan lifeskill</ul>
                    <ol>
                        <li>Ketrampilan pertukangan</li>
                        <li>Ketrampilan IT dan komputer</li>
                        <li>Ketrampilan mengelas</li>
                    </ol>

                    <h5 style="text-align:center">SANTRI PUTERI</h5>
                    <ul>Bidang minat dan bakat</ul>
                    <ol>
                        <li>Pramuka (ekstra wajib)</li>
                        <li>Sholawat al-banjari</li>
                        <li>Pencak silat pagar nusa</li>
                        <li>PMR</li>
                        <li>Qiro’ah</li>
                        <li>Kaligrafi</li>
                        <li>Bulutangkis</li>
                    </ol>
                    <ul>Bidang keterampilan dan softskill</ul>
                    <ol>
                        <li>Tata busana</li>
                        <li>Tata boga</li>
                        <li>Ketrampilan IT dan komputer</li>
                    </ol>
               </div>
            </div>

          </div>

          <!-- END main-content -->

          @include('front.wpartials.sidebar')
          <!-- END sidebar -->

        </div>
      </div>
    </section>

</div>

@endsection
