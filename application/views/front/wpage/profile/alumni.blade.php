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
            <h1 class="mb-4">IKATAN KELUARGA SANTRI DAN ALUMNI DARUN NAJAH (IKSADA)</h1>
            <a class="category mb-5" href="#">Alumni</a> <a class="category mb-5" href="#">Ponpes</a>
           
            <div class="post-content-body">
               <div>
               <p>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan melihat bahwa Pondok Pesantren Salafiyah PPAI Darun Najah telah berdiri sejak 1967 tentu sudah banyak alumni yang telah dilahirkan dan perlu diwadahi agar alumni bisa memberi manfaat kembali kepada almamaternya. Untuk terus menjaga ikatan emosional antara santri yang sudah alumni dengan guru dan Kyai mereka di pesantren adalah sisi lain pertimbangan perlu didirikannya organisasi para alumni Pondok Pesantren Salafiyah PPAI Darun Najah. <br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Itulah sebabnya pada tahun 1993 para alumni sepuh akhirnya bersepakat untuk mendirikan Ikatan Alumni Darun Najah atau disingkat dengan IKADA untuk mewadahi para alumni dalam berorganisasi dan menyambung tali silaturrahim dengan guru serta dengan sesama teman alumni Pondok Pesantren Salafiyah PPAI Darun Najah. <br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada awalnya kegiatan IKADA hanyalah mengadakan reuni akbar rutin pada setiap tahun yang diselenggarakan berbarengan dengan haul guru besar Pondok Pesantren Salafiyah PPAI Darun Najah, Romo KH. Mohammad Said Anwar. Namun seiring perkembangan dengan semakin banyaknya alumni pesantren yang ada maka kegiatan reuni juga dikemas dengan pengajian rutin di daerah dimana alumni berada. <br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahkan, melihat juga banyak alumni yang menjadi tokoh masyarakat, kyai kampung dan juga memiliki lembaga-lembaga pendidikan dengan kemanfaatan ilmu serta keberkahan ilmu yang didapatkan selama di pesantren, banyak juga santri para alumni yang juga ingin ikut serta bergabung dalam pengajian rutin yang diadakan para alumni. Hingga pada tahun 2011, Ikatan Alumni Darun Najah yang disingkat IKADA pun diputuskan untuk diganti dengan Ikatan Keluarga Santri Alumni Darun Najah atau disingkat dengan IKSADA. <br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hingga kini telah ada ribuan alumni yang dilahirkan oleh Pondok Pesantren Salafiyah PPAI Darun Najah. Dan kegiatan rutin para alumni pun makin berkembang dimana kegiatan tidak hanya untuk reuni para alumni dan santri, tapi juga dengan mengadakan pengajian umum untuk menghadirkan pengasuh Pondok Pesantren Salafiyah PPAI Darun Najah di daerah dimana alumni berada. <br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kegiatan pengajian alumni tersebut antara lain yang sudah rutin diadakan adalah:

               <ol>
                <li>Reuni dan pengajian umum dalam rangka haul almaghfurlah Romo KH. Mohammad Said pada tiap tanggal 15 Syaban.</li>
                <li>Pengajian rutinan pengurus pusat Iksada dilaksanakan pada tiap bulam Muharram.</li>
                <li>Pengajian rutinan tiap tahun oleh kordinator Iksada Lumajang pada bulan Maulid</li>
                <li>Pengajian rutinan tiap tahun oleh kordinator Iksada Lampung pada bulan bada Mulud.</li>
                <li>Pengajian rutinan bulanan oleh kordinator Batu dan Pujon pada tiap Jumat Pon.</li>
                <li>Pengajian rutinan bulanan oleh kordinator Malang Selatan pada tiap Jumat Kliwon.</li>
                <li>Pengajian rutinan bulanan oleh kordinator Malang Raya pada tiap hari Minggu tengah bulan.</li>
               </ol>

               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alumni bukan saja merupakan aset pesantren di masyarakat, namun juga merupakan media penyambung kemanfaatan Kyai untuk menyebarkan ilmu dan barokah di tengah-tengah masyarakat luas. Sehingga dengan diadakannya pengajian rutin para alumni dan santri Darun Najah ini nyata memberi manfaat kepada pesantren. 
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