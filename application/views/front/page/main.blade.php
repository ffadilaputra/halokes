@extends('front.template')

@section('content')
<!--welcome-hero start -->
<section id="beranda" class="welcome-hero">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="header-text">
          <h2>Selamat datanng
            <span>,</span> di website
            <br> Ma'had Darun Najah
            <span>.</span>
          </h2>
        </div>
        <!--/.header-text-->
      </div>
      <!--/.col-->
    </div>
    <!-- /.row-->
  </div>
  <!-- /.container-->
</section>
<!--/.welcome-hero-->
<!--welcome-hero end -->
<!--profil start -->
<section id="profil" class="about">
  <div class="section-heading text-center">
    <h2>Profil</h2>
  </div>
  <div class="container">
    <div class="about-content">
      <div class="row">
        <div class="col-sm-6">
          <div class="single-about-txt">
            <h3>
              PONDOK PESANTREN SALAFIYAH PPAI DARUN NAJAH
            </h3>
            <p>
              Pondok pesantren PPAI Darun Najah merupakan lembaga sosial publik yang berada di bawah naungan Yayasan Ma’had Darun Najah as-Salafiy, yang didirikan dengan tujuan utama untuk menjaga moral umat dan mencetak kader-kader dakwah Islam di kalangan masyarakat. Didirikan oleh KH. Achmad Muchtar Ghozali, pesantren ini telah berdiri sejak tahun 1967. Hingga kini pesantren ini masih diasuh dibawah bimbingan beliau langsung dan sebagai Ketua Dewan Pembina Yayasan Ma’had Darun Najah as-Salafy Pondok Pesantren Salafiyah PPAI Darun Najah.
              <a href="{{ base_url('blog/profil') }}" target="_blank">Baca Selengkapnya ...</a>
            </p>
            <div class="row">
              <div class="col-sm-4">
                <div class="single-about-add-info">
                  <h3>Telepon</h3>
                  <p>987-123-6547</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="single-about-add-info">
                  <h3>email</h3>
                  <p>email@info.com</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="single-about-add-info">
                  <h3>website</h3>
                  <p>www.web.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-offset-1 col-sm-5">
          <div class="single-about-img">
            <img src="{{ base_url('assets/browny') }}/assets/images/about/profile_image.jpg" alt="profile_image">
            <div class="about-list-icon">
              <ul>
                <li>
                  <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <!-- / li -->
                <li>
                  <a href="#">
                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                  </a>

                </li>
                <!-- / li -->
                <li>
                  <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
                <!-- / li -->


              </ul>
              <!-- / ul -->
            </div>
            <!-- /.about-list-icon -->

          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!--/.profil-->
<!--profil end -->

<!--lembaga start -->
<section id="lembaga" class="clients">
  <div class="section-heading text-center">
    <h2>Lembaga</h2>
  </div>
  <div class="clients-area">
    <div class="container">
      <div id="client">
        <div class="item col-lg-2 col-sm-12">
          <span class="nama-lembaga">
            <button type="button" data-toggle="modal" data-target=".modal-mts">MTs</button>
          </span>
        </div>
        <!--/.item-->
        <div class="item col-lg-2 col-sm-12">
          <span class="nama-lembaga">
            <button type="button" data-toggle="modal" data-target=".modal-ma">MA</button>
          </span>
        </div>
        <!--/.item-->
        <div class="item col-lg-2 col-sm-12">
          <span class="nama-lembaga">
            <button type="button" data-toggle="modal" data-target=".modal-tpq">TPQ-MQ</button>
          </span>
        </div>
        <!--/.item-->
        <div class="item col-lg-2 col-sm-12">
          <span class="nama-lembaga">
            <button type="button" data-toggle="modal" data-target=".modal-madin">Madin</button>
          </span>
        </div>
        <!--/.item-->
        <div class="item col-lg-2 col-sm-12">
          <span class="nama-lembaga">
            <button type="button" data-toggle="modal" data-target=".modal-majlis">Majlis Ta'lim</button>
          </span>
        </div>
        <!--/.item-->
        <div class="item col-lg-2 col-sm-12">
          <span class="nama-lembaga">
            <button type="button" data-toggle="modal" data-target=".modal-koppontren">Koppontren</button>
          </span>
        </div>
        <!--/.item-->
      </div>

      <!--/.owl-carousel-->
    </div>
    <!--/.container-->
  </div>
  <!--/.lembaga-area-->
</section>
<!--/.lembaga-->

<!--info start -->
<section id="info" class="education">
  <div class="section-heading text-center">
    <h2>Informasi</h2>
  </div>
  <div class="container">
    <div class="experience-content col-lg-12">

      @foreach($info as $data)
      <div class="mau-panel col-lg-4 col-sm-12">
        <div class="panel">
          <div class="panel-heading panel-heading-plus">
              <h3 class="panel-title"><a href="{{base_url()}}blog/informasi/show/{{$data->id}}">{{ $data->title }}</a></h3>
              <?php
              $date = new DateTime($data->created_at);
              ?>
              <span>{{ $date->format('d-m-Y h:m:s') }} WIB</span>
          </div>
          <div class="panel-body">
            {!! $data->description !!}
          </div>
        </div>
      </div>
      @endforeach
      <!-- end panel -->

    </div>
    <!--.mauidhoh-content-->
  </div>

</section>
<!--/.info-->
<!--info end -->

<!--mauidhoh start -->
<section id="mauidhoh" class="experience">
  <div class="section-heading text-center">
    <h2>Mauidhoh</h2>
  </div>
  <div class="container">
    <div class="experience-content col-lg-12">

      @foreach($mauidhoh as $data)
      <div class="mau-panel col-lg-4 col-sm-12">
        <div class="panel">
          <div class="panel-heading panel-heading-plus">
              <h3 class="panel-title"><a href="{{base_url()}}blog/mauidhoh/show/{{$data->id}}">{{ $data->title }}</a></h3>
              <?php
              $date = new DateTime($data->created_at);
              ?>
              <span>{{ $date->format('d-m-Y h:m:s') }} WIB</span>
          </div>
          <div class="panel-body">
            {!! $data->description !!}
          </div>
        </div>
      </div>
      @endforeach
      <!-- end panel -->

    </div>
    <!--.mauidhoh-content-->
  </div>

</section>
<!--/.mauidhoh-->
<!--mauidhoh end -->

<!--galeri start -->
<section id="galeri" class="portfolio">
  <div class="portfolio-details">
    <div class="section-heading text-center">
      <h2>Galeri</h2>
    </div>
    <div class="container">
      <div class="portfolio-content">
        <div class="isotope">
          <div class="row" id="data">
            {{-- <div class="col-sm-4">
              <div class="item">
                <div class="isotope-overlay">
                  <a href="#">
                    ui/ux design
                  </a>
                </div>
                <!-- /.isotope-overlay -->
              </div>
              <!-- /.item -->
            </div> --}}
            <!-- /.col -->
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!--/.isotope-->
      </div>
      <!--/.gallery-content-->
    </div>
    <!--/.container-->
  </div>
  <!--/.portfolio-details-->

</section>
<!--/.portfolio-->
<!--portfolio end -->

</section>
<!--/.clients-->
<!--clients end -->
@endsection
