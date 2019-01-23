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
            <h1 class="mb-4">KOPERASI PONDOK PESANTREN DARUN NAJAH</h1>
            <a class="category mb-5" href="#">Lembaga</a> <a class="category mb-5" href="#">TPQ-MQ</a>

            <div class="post-content-body">
                <div>
                    <p>
                        Koperasi pondok pesantren (Koppontren) Darun Najah adalah bagian dari lembaga sosial yang bernaung di bawah Yayasan Ma'had Darun Najah as-Salafy Pondok Pesantren Salafiyah PPAI Darun Najah yang bertujuan untuk memberdayakan santri dalam bidang perekonomian. <br>
                        Berdiri pada tahun 2001, Koppontren Darun Najah telah fokus pada bidang perdagangan untuk menyediakan segala bentuk kebutuhan santri dengan melibatkan santri sebagai pengelola sekaligus sebagai konsumen. <br>
                        Dengan prinsip itu Koppontren Darun Najah memiliki prinsip: dari santri, oleh santri dan untuk santri. Artinya permodalan koppontren adalah berasal dari santri, dikelola bersama oleh santri dan juga kemanfaatan yang kembali kepada santri. <br>
                        Walaupun pengasuh dan keluarga pengasuh ikut serta dalam pengarahan dan permodalan Koppontren, namun pada prinsipnya adalah dalam rangka untuk media pelatihan santri dalam bidang pengelolaan dan juga membangun jiwa enterpreneurship santri. <br>
                        Hingga kini, koppontren Darun Najah telah memiliki divisi usaha yang meliputi:

                        <ol>
                            <li>Kantin Putera</li>
                            <li>Kantin Puteri</li>
                            <li>Produksi air mineral</li>
                        </ol>

                        Dimana ketiga usaha tersebut secara keseluruhan ditangani oleh santri sendiri dan kemanfaatannya kembali ke pesantren dan juga santri.

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
