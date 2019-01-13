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

    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb-3 ">Related Post</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('assets/wordify/images/img_9.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Lifestyle</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('assets/wordify/images/img_7.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Travel</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('assets/wordify/images/img_6.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Food</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
        </div>
      </div>


    </section>
    <!-- END section -->
</div>

@endsection