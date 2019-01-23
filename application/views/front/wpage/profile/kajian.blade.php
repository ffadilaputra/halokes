@extends('front.template')
@section('content')

<div class="wrap">
    <section class="site-section py-lg">
      <div class="container">

        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">
            <img src="{{ base_url('assets/wordify') }}/images/kajian.JPG" alt="Image" class="img-fluid mb-5">

            <h1 class="mb-4">KAJIAN KEILMUAN PONDOK PESANTREN</h1>
            <a class="category mb-5" href="#">Kajian</a> <a class="category mb-5" href="#">Ponpes</a>

            <div class="post-content-body">
                <div>
                    <p>
                    Dalam peranannya sebagai pondok pesantren yang berkarakter Salaf, Pondok Pesantren Salafiyah PPAI Darun Najah tentu mengembangkan kajian keilmuan kitab kuning (turots) warisan dari para ulama salaf. <br>
                    Adapun kajian-kajian ilmu yang dikaji di Pondok Pesantren Salafiyah PPAI Darun Najah antara lain adalah sebagai berikut:
                    <ol>
                        <li>Bidang ilmu alat</li>
                            <ul>
                                <li>Syarah Jurumiyah</li>
                                <li>Syarah Imriti</li>
                                <li>Syarah Alfiah</li>
                                <li>Amtsilatut Tasrifiyah</li>
                                <li>I’lal</li>
                                <li>Syarah kailani</li>
                                <li>Jawahirul Makmun</li>
                            </ul>
                        <li>Bidang ilmu fiqih</li>
                            <ul>
                                <li>Mabadi’ fiqih</li>
                                <li>Fathul Qorib</li>
                                <li>Bughyatul Mustarsyidin</li>
                                <li>Syarah sulam taufiq</li>
                                <li>Fathul muin</li>
                                <li>Fathul wahab</li>
                            </ul>
                        <li>Bidang ilmu akhlak dan tasawuf</li>
                            <ul>
                                <li>Ahlakul banin</li>
                                <li>Ta’lim muta’alim</li>
                                <li>Syarah al-hikam</li>
                                <li>Ahlakul banat</li>
                                <li>Bidayatul hidayah</li>
                                <li>Ihya’ ulumudin</li>
                            </ul>
                        <li>Bidang hadis</li>
                            <ul>
                                <li>Mukhtarul hadis</li>
                                <li>Shahih bukhori</li>
                                <li>Riaydus sholihin</li>
                                <li>Sahihul muslim</li>
                            </ul>
                        <li>Bidang Tafsir</li>
                            <ul>
                                <li>Tafsir al-ibris</li>
                                <li>Tafsir Jalalain</li>
                                <li>Shofatut tafasir</li>
                                <li>Tafsir ayatul ahkam</li>
                            </ul>
                        <li>Bidang ilmu manhaji</li>
                            <ul>
                                <li>Ilmu mustolah hadis</li>
                                <li>Ilmu ushul fiqih</li>
                                <li>Ilmu falak</li>
                                <li>Ilmu tafsir</li>
                                <li>Ilmu qowaid</li>
                                <li>Ilmu mantiq</li>
                                <li>Ilmu arudh</li>
                            </ul>
                    </ol>
                    Penyebaran kajian ilmu turots (kitab kuning) para ulama salaf tersebut disebar dalam kurikulum yang terintegrasi dan mencakup semua jenjang pendidikan di Pondok Pesantren Salafiyah PPAI Darun Najah, yang antara lain:
                    <ol>
                        <li>Madrasah I’dadiyah Diniyah (Madin I’dad) selama 1 tahun.</li>
                        <li>Madrasah Tsanawiyah Diniyah (Madin MTs) selama 3 tahun.</li>
                        <li>Madrasah Aliyah Diniyah (Madin MA) selama 3 tahun. </li>
                        <li>Madrasah Tsanawiyah formal (MTs formal) selama 3 tahun.</li>
                        <li>Madrasah Aliyah Formal (MA formal) selama 3 tahun.</li>
                    </ol>
                    Sehingga jika santri lancar dalam mengikuti pembelajaran dimungkinkan selama 7 hingga 8 tahun santri akan bisa menguasai kajian ilmu turots (kitab kuning) para ulama salaf tersebut.
                    </p>
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
