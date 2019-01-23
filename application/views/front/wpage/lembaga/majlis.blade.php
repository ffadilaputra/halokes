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
            <h1 class="mb-4">MAJLIS TA’LIM DARUN NAJAH</h1>
            <a class="category mb-5" href="#">Lembaga</a> <a class="category mb-5" href="#">TPQ-MQ</a>

            <div class="post-content-body">
                <div>
                    <p>
                        Majlis Ta’lim Darun Najah adalah bagian dari kegiatan sosial yang bernaung di bawah Yayasan Ma'had Darun Najah as-Salafy Pondok Pesantren Salafiyah PPAI Darun Najah dalam bidang keilmuan dan keagamaan. Tujuan didirikannya adalah sebagai upaya Pondok Pesantren Salafiyah PPAI Darun Najah untuk mengajak masyarakat umum untuk ikut serta dalam memupuk jiwa Islami dan membina kepribadian yang agamis dan berilmu. <br>
                        Kegiatan majlis ta’lim Darun Najah ini sudah ada sejak tahun 90an. Dan hingga sekarang Majlis Ta’lim Darun Najah makin berkembang dan banyak diikuti jamaah untuk mengajak masyarakat awam mengaji, melaksanakan dzikir bersama dan juga mabarrot (kegiatan sosial) lainnya. Kegiatan tersebut antara lain:
                        <ol>
                            <li>Majlis ta’lim wad dzikir setiap Senin sore khusus ibu-ibu.</li>
                            <li>Majlis ta’lim wad dzikir setiap Kamis awal bulan untuk wali santri.</li>
                            <li>Majlis ta’lim wad dzikir setiap Ahad tengah bulan oleh alumni putera.</li>
                            <li>Majlis ta’lim wad dzikir setiap Jumat Pon untuk alumni dan masyarakat Batu Pujon.</li>
                            <li>Majlis ta’lim wad dzikir setiap Jumat Kliwon untuk alumni dan masyarakat Sumbermanjing Wetan di Malang Selatan.</li>
                        </ol>
                        <br>

                        Dalam bidang mabarrot, Pondok Pesantren Salafiyah PPAI Darun Najah juga mengadakan rutinan ziarah wali untuk masyarakat umum, antara lain:
                        <ol>
                            <li>Majlis haul para masyayikh dan pendiri pesantren setiap tanggal 15 Syaban</li>
                            <li>Majlis haul Ibunyai Halimatus Sa’diyah setiap tanggal 19 Rajab</li>
                            <li>Majlis Maulid wad dzikir setiap bulan maulid (tanggal menyesuaikan)</li>
                            <li>Ziarah wali Jatim setiap bulan Rajab</li>
                            <li>Ziarah wali Jatim Jateng setiap bulan Shofar</li>
                        </ol>
                    </p>
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
