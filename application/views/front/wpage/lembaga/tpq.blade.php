@extends('front.template')
@section('content')

<div class="wrap">
    <section class="site-section py-lg">
      <div class="container">

        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">
            <img src="{{ base_url('assets/wordify') }}/images/img_10.jpg" alt="Image" class="img-fluid mb-5">
             <div class="post-meta">
                        <span class="author mr-2"><img src="{{ base_url('assets/wordify') }}/images/person_1.jpg" alt="Colorlib" class="mr-2"> Colorlib</span>&bullet;
                        <span class="mr-2">January 4, 2019 </span> &bullet;
                        <!-- <span class="ml-2"><span class="fa fa-comments"></span> 3</span> -->
                      </div>
            <h1 class="mb-4">TAMAN PENDIDIKAN AL-QURAN DAN MADRASAH QUR’ANIYAH</h1>
            <a class="category mb-5" href="#">Lembaga</a> <a class="category mb-5" href="#">TPQ-MQ</a>

            <div class="post-content-body">
                <div>
                    <h4>Sejarah</h4>
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seiring dengan perkembangan masa dan jumlah santri yang makin meningkat, pengasuh Pondok Pesantren Salafiyah PPAI Darun Najah melihat bahwa pendidikan al-Quran di pesantren tidak bisa dicampur adukkan dengan pendidikan salaf yang berbasis kitab kuning. Hingga pada tahun 1994 pengasuh memutuskan untuk mendirikan Madrasah Qur’aniyah (MQ) untuk memisahkan pendidikan diniyah yang berbasis kitab kuning itu dengan pendidikan Quraniyah yang berbasis pada pengajaran al-Quran.  <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada awalnya pendidikan Madrasah Quraniyah (MQ) masih bersifat sederhana mengingat ketika itu belum berkembang metode-metode pengajaran al-Quran yang inovatif seperti sekarang. Namun seiring perkembangan zaman pesantren pun mengadopsi berbagai metode-metode baru yang inovatif tersebut dalam sistem pendidikan Madrasah Quraniyah Darun Najah. <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hingga pada tahun 2012, ketika pesantren telah menyelenggarakan pendidikan formal banyak juga ditemukan santri yang masuk pesantren masih sangat awam dalam penguasaan baca al-Quran. Sehingga pada tahun 2012 pengasuh memandang penting untuk memisahkan mereka yang masih awam dalam pembacaan al-Quran itu dalam wadah Taman Pendidikan Al-Quran (TPQ) Darun Najah. <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tujuannya adalah untuk memudahkan para santri baru yang awam dalam membaca al-Quran untuk belajar baca al-Quran dari tingkat dasar dan tanpa harus terganggu dengan pendidikan madrasah Quraniyah serta Madrasah Diniyah yang sudah mengkaji pada kajian ilmu keagamaan yang tinggi. <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan kata lain, didirikannya TPQ Darun Najah adalah untuk membagi jenjang pendidikan di Madrasah Quraniyah bagi santri baru yang masih awam membaca al-Quran agar lebih cepat dan juga fokus dalam belajar al-Quran. Hal ini mengingat, kemampuan baca tulis al-Quran merupakan dasar santri bisa melanjutkan jenjang di madrasah Quraniyah maupun jenjang Madrasah Diniyah.  <br>
                    </p>
                    <br>

                    <h4>Kurikulum dan Metode</h4>
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kurikulum Madrasah Quraniyah menggunakan sistem mentoring dimana santri senior yang ditunjuk karena telah memiliki kemampuan al-Quran yang baik, baik dalam aspek fasih, tajwid dan tartilnya diberikan tanggung jawab untuk menuntun dan mengajar santri yang lebih junior agar memiliki kemampuan yang sama sebagaimana guru seniornya tersebut. <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sedangkan Taman Pendidikan al-Quran sejak tahun 2015 telah menggunakan metode Yanbu’a (Kudus) sebagai bahan ajarnya dengan mendaya gunakan guru TPQ pesantren yang ada di pondok pesantren untuk mengajar.  <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selain materi al-Quran yang meliputi pembinaan fashohah, tajwidul qiro’ah dan tartil dalam qiroah, materi TPQ juga mengintegrasikan pelajaran tulis dan imla’ yang bertujuan agar santri ketika memasuki jenjang madrasah diniyah telah mampu untuk menulis arab dan juga menulis pegon jawi. <br>
                    </p>
                    <br>

                    <h4>Waktu Kegiatan</h4>
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Waktu pelaksanaan madrasah Quraniyah (MQ) adalah pada setiap bada subuh selama 1.5 jam dari jam 04.30 hingga jam 06.00. Sedangkan Taman Pendidikan al-Quran (TPQ) juga dilaksanakan pada jam sama, ditambah pada setiap hari pada bada asar hingga maghrib, dari jam 15.30 hingga jam 17.30.
                    </p>
                    <br>


                </div>


              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary">
                  </div>

                </form>
              </div>
            </div>

          </div>

          <!-- END main-content -->

          @include('front.wpartials.sidebar')
          <!-- END sidebar -->
        </div>
      </div>
    </section>
    <!-- END section -->
</div>

@endsection
