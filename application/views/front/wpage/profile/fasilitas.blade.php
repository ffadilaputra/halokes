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
            <h1 class="mb-4">JUMLAH SANTRI DAN KAPASITAS SARANA DAN PRASARANA</h1>
            <a class="category mb-5" href="#">Fasilitas</a> <a class="category mb-5" href="#">Ponpes</a>
           
            <div class="post-content-body">
                <div>
                    <p>Hingga tahun 2018 total jumlah santri sudah mencapai sekitar 1000 orang. Jumlah tersebut tersebar pada berbagai lembaga yang berada di bawah Yayasan Ma’had Darun Najah as-Salafy, Pondok Pesantren Salafiyah PPAI Darun Najah, antara lain: </p>
                    <h5>Ma’hadiyah</h5>
                    <ol>
                        <li>Taman Pendidikan Al-Quran</li>
                        <li>Madrasah I’dadiyah Diniyah</li>
                        <li>Madrasah Tsanawiyah Diniyah</li>
                        <li>Madrasah Aliyah Diniyah</li>
                        <li>Pengajian kitab kuning (sorogan dan bandongan)</li>
                    </ol>
                    <h5>Madrosiyah</h5>
                    <ol>
                        <li>Madrasah Tsanawiyah Darun Najah</li>
                        <li>Madrasah Aliyah Darun Najah </li>
                    </ol>
                    <p>Sejak berdiri Pondok Pesantren Salafiyah PPAI Darun Najah telah banyak melakukan pembangunan fasilitas pendidikan dengan biaya dari pribadi pengasuh maupun dari swadaya masyarakat. Dan hingga saat ini sarana dan prasarana yang dimiliki oleh Pondok Pesantren PPAI Darun Najah antara lain adalah:</p>

                    
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Sarana</th>
                                <th>Utk</th>
                                <th>Lokal</th>
                                <th>Kapasitas</th>
                                <th>Status</th>
                                <th>Kondisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Masjid</td>
                                <td>Pa</td>
                                <td>1</td>
                                <td>600 Orang</td>
                                <td>Waqaf</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>Musholla</td>
                                <td>Pi</td>
                                <td>1</td>
                                <td>500 Orang</td>
                                <td>Waqaf</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>Madrasah Diniyah</td>
                                <td>Pa</td>
                                <td>10</td>
                                <td>200 Orang</td>
                                <td>Hak Milik</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>Madrasah Diniyah</td>
                                <td>Pi</td>
                                <td>12</td>
                                <td>200 Orang</td>
                                <td>Hak Milik</td>
                                <td>Cukup</td>
                            </tr>
                            <tr>
                                <td>MTs Darun Najah</td>
                                <td>Pa/Pi</td>
                                <td>12</td>
                                <td>500 Orang</td>
                                <td>Hak Milik</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>MA Darun Najah</td>
                                <td>Pa/Pi</td>
                                <td>6</td>
                                <td>300 Orang</td>
                                <td>Hak Milik</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>Asrama Putera</td>
                                <td>Pa</td>
                                <td>14</td>
                                <td>600 Orang</td>
                                <td>Hak Milik</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>Asrama Putera</td>
                                <td>Pi</td>
                                <td>10</td>
                                <td>600 Orang</td>
                                <td>Hak Milik</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>Perpustakaan</td>
                                <td>Pa/Pi</td>
                                <td>1</td>
                                <td>50 Orang</td>
                                <td>Hak Milik</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>Lab Komputer</td>
                                <td>Pa/Pi</td>
                                <td>1</td>
                                <td>50 Orang</td>
                                <td>Hak Milik</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>Kantor Putera</td>
                                <td>Pa</td>
                                <td>2</td>
                                <td>10 Orang</td>
                                <td>Hak Milik</td>
                                <td>Cukup</td>
                            </tr>
                            <tr>
                                <td>Kantor Puteri</td>
                                <td>Pi</td>
                                <td>1</td>
                                <td>10 Orang</td>
                                <td>Hak Milik</td>
                                <td>Cukup</td>
                            </tr>
                            <tr>
                                <td>Kantor Formal</td>
                                <td>Pa/Pi</td>
                                <td>1</td>
                                <td>30 Orang</td>
                                <td>Hak Milik</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>Hall Majlis Ta’lim</td>
                                <td>Pa/Pi</td>
                                <td>1</td>
                                <td>200 Orang</td>
                                <td>Hak Milik</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>Lapangan olahraga</td>
                                <td>Pa</td>
                                <td>1</td>
                                <td>1000 Orang</td>
                                <td>Hak Milik</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>Lapangan olahraga</td>
                                <td>Pi</td>
                                <td>1</td>
                                <td>400 Orang</td>
                                <td>Hak Milik</td>
                                <td>Baik</td>
                            </tr>
                        </tbody>

                    </table>
                    
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