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
            <br>
            <!-- <a href="{{ base_url('assets/front') }}/assets/download/browney.txt" download>download resume</a> -->
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
                I am a Professional UI/UX Designer and Web developer. Consectetur an adipisi elita, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam quis nostrud.
              </h3>
              <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspi unde
                omnis iste natus error sit voluptatem accusantium doloremque lauda ntium, totam rem aperiam, eaque ipsa quae
                ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam vo luptatem
                quia voluptas sit aspernatur aut odit aut fugit,
              </p>
              <div class="row">
                <div class="col-sm-4">
                  <div class="single-about-add-info">
                    <h3>phone</h3>
                    <p>987-123-6547</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="single-about-add-info">
                    <h3>email</h3>
                    <p>browny@info.com</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="single-about-add-info">
                    <h3>website</h3>
                    <p>www.brownsine.com</p>
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
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>

                  </li>
                  <!-- / li -->
                  <li>
                    <a href="#">
                      <i class="fa fa-linkedin" aria-hidden="true"></i>
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
        <div class="owl-carousel owl-theme" id="client">
          <div class="item">
            <a href="#">
            <span class="nama-lembaga">| MTs</span>
            </a>
          </div>
          <!--/.item-->
          <div class="item">
            <a href="#">
            <span class="nama-lembaga">| MA</span>
            </a>
          </div>
          <!--/.item-->
          <div class="item">
            <a href="#">
            <span class="nama-lembaga">TPQ</span>
            </a>
          </div>
          <!--/.item-->
          <div class="item">
            <a href="#">
            <span class="nama-lembaga">Madin</span>
            </a>
          </div>
          <!--/.item-->
          <div class="item">
            <a href="#">
            <span class="nama-lembaga">Pesantren</span>
            </a>
          </div>
          <!--/.item-->
          <div class="item">
            <a href="#">
            <span class="nama-lembaga">Sosial</span>
            </a>
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
      <div class="education-horizontal-timeline">
        <div class="row">
          <div class="col-sm-4">
            <div class="single-horizontal-timeline">
              <div class="experience-time">
                <h2>2008 - 2010</h2>
                <h3>master
                  <span>of </span> computer science</h3>
              </div>
              <!--/.experience-time-->
              <div class="timeline-horizontal-border">
                <i class="fa fa-circle" aria-hidden="true"></i>
                <span class="single-timeline-horizontal"></span>
              </div>
              <div class="timeline">
                <div class="timeline-content">
                  <h4 class="title">
                    university of north carolina
                  </h4>
                  <h5>north carolina, USA</h5>
                  <p class="description">
                    Duis aute irure dolor in reprehenderit in vol patate velit esse cillum dolore eu fugiat nulla pari. Excepteur sint occana
                    inna tecat cupidatat non proident.
                  </p>
                </div>
                <!--/.timeline-content-->
              </div>
              <!--/.timeline-->
            </div>
          </div>
          <div class="col-sm-4">
            <div class="single-horizontal-timeline">
              <div class="experience-time">
                <h2>2004 - 2008</h2>
                <h3>bachelor
                  <span>of </span> computer science</h3>
              </div>
              <!--/.experience-time-->
              <div class="timeline-horizontal-border">
                <i class="fa fa-circle" aria-hidden="true"></i>
                <span class="single-timeline-horizontal"></span>
              </div>
              <div class="timeline">
                <div class="timeline-content">
                  <h4 class="title">
                    university of north carolina
                  </h4>
                  <h5>north carolina, USA</h5>
                  <p class="description">
                    Duis aute irure dolor in reprehenderit in vol patate velit esse cillum dolore eu fugiat nulla pari. Excepteur sint occana
                    inna tecat cupidatat non proident.
                  </p>
                </div>
                <!--/.timeline-content-->
              </div>
              <!--/.timeline-->
            </div>
          </div>
          <div class="col-sm-4">
            <div class="single-horizontal-timeline">
              <div class="experience-time">
                <h2>2004 - 2008</h2>
                <h3>bachelor
                  <span>of </span> creative design</h3>
              </div>
              <!--/.experience-time-->
              <div class="timeline-horizontal-border">
                <i class="fa fa-circle" aria-hidden="true"></i>
                <span class="single-timeline-horizontal spacial-horizontal-line
									"></span>
              </div>
              <div class="timeline">
                <div class="timeline-content">
                  <h4 class="title">
                    university of bolton
                  </h4>
                  <h5>bolton, united kingdome</h5>
                  <p class="description">
                    Duis aute irure dolor in reprehenderit in vol patate velit esse cillum dolore eu fugiat nulla pari. Excepteur sint occana
                    inna tecat cupidatat non proident.
                  </p>
                </div>
                <!--/.timeline-content-->
              </div>
              <!--/.timeline-->
            </div>
          </div>
        </div>
      </div>
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
      <div class="experience-content">
        <div class="main-timeline">
          <ul>
            <li>
              <div class="single-timeline-box fix">
                <div class="row">
                  <div class="col-md-5">
                    <div class="experience-time text-right">
                      <h2>2018 - Present</h2>
                      <h3>creative director</h3>
                    </div>
                    <!--/.experience-time-->
                  </div>
                  <!--/.col-->
                  <div class="col-md-offset-1 col-md-5">
                    <div class="timeline">
                      <div class="timeline-content">
                        <h4 class="title">
                          <span>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                          </span>
                          hoplony tech limited
                        </h4>
                        <h5>newyork, USA</h5>
                        <p class="description">
                          Duis aute irure dolor in reprehenderit in vol patate velit esse cillum dolore eu fugiat nulla pari. Excepteur sint occana
                          inna tecat cupidatat non proident.
                        </p>
                      </div>
                      <!--/.timeline-content-->
                    </div>
                    <!--/.timeline-->
                  </div>
                  <!--/.col-->
                </div>
              </div>
              <!--/.single-timeline-box-->
            </li>

            <li>
              <div class="single-timeline-box fix">
                <div class="row">
                  <div class="col-md-offset-1 col-md-5 experience-time-responsive">
                    <div class="experience-time">
                      <h2>
                        <span>
                          <i class="fa fa-circle" aria-hidden="true"></i>
                        </span>
                        2016 - 2018
                      </h2>
                      <h3>associate design director</h3>
                    </div>
                    <!--/.experience-time-->
                  </div>
                  <!--/.col-->
                  <div class="col-md-5">
                    <div class="timeline">
                      <div class="timeline-content text-right">
                        <h4 class="title">
                          hoplony tech limited
                        </h4>
                        <h5>newyork, USA</h5>
                        <p class="description">
                          Duis aute irure dolor in reprehenderit in vol patate velit esse cillum dolore eu fugiat nulla pari. Excepteur sint occana
                          inna tecat cupidatat non proident.
                        </p>
                      </div>
                      <!--/.timeline-content-->
                    </div>
                    <!--/.timeline-->
                  </div>
                  <!--/.col-->
                  <div class="col-md-offset-1 col-md-5 experience-time-main">
                    <div class="experience-time">
                      <h2>
                        <span>
                          <i class="fa fa-circle" aria-hidden="true"></i>
                        </span>
                        2016 - 2018
                      </h2>
                      <h3>associate design director</h3>
                    </div>
                    <!--/.experience-time-->
                  </div>
                  <!--/.col-->
                </div>
              </div>
              <!--/.single-timeline-box-->
            </li>

            <li>
              <div class="single-timeline-box fix">
                <div class="row">
                  <div class="col-md-5">
                    <div class="experience-time text-right">
                      <h2>2013 - 2016</h2>
                      <h3>senior UI/UX designer</h3>
                    </div>
                    <!--/.experience-time-->
                  </div>
                  <!--/.col-->
                  <div class="col-md-offset-1 col-md-5">
                    <div class="timeline">
                      <div class="timeline-content">
                        <h4 class="title">
                          <span>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                          </span>
                          hoplony tech limited
                        </h4>
                        <h5>newyork, USA</h5>
                        <p class="description">
                          Duis aute irure dolor in reprehenderit in vol patate velit esse cillum dolore eu fugiat nulla pari. Excepteur sint occana
                          inna tecat cupidatat non proident.
                        </p>
                      </div>
                      <!--/.timeline-content-->
                    </div>
                    <!--/.timeline-->
                  </div>
                  <!--/.col-->
                </div>
              </div>
              <!--/.single-timeline-box-->
            </li>

            <li>
              <div class="single-timeline-box fix">
                <div class="row">
                  <div class="col-md-offset-1 col-md-5 experience-time-responsive">
                    <div class="experience-time">
                      <h2>
                        <span>
                          <i class="fa fa-circle" aria-hidden="true"></i>
                        </span>
                        2012 - 2013
                      </h2>
                      <h3>UI/UX designer</h3>
                    </div>
                    <!--/.experience-time-->
                  </div>
                  <!--/.col-->
                  <div class="col-md-5">
                    <div class="timeline">
                      <div class="timeline-content text-right">
                        <h4 class="title">
                          hoplony tech limited
                        </h4>
                        <h5>newyork, USA</h5>
                        <p class="description">
                          Duis aute irure dolor in reprehenderit in vol patate velit esse cillum dolore eu fugiat nulla pari. Excepteur sint occana
                          inna tecat cupidatat non proident.
                        </p>
                      </div>
                      <!--/.timeline-content-->
                    </div>
                    <!--/.timeline-->
                  </div>
                  <!--/.col-->
                  <div class="col-md-offset-1 col-md-5 experience-time-main">
                    <div class="experience-time">
                      <h2>
                        <span>
                          <i class="fa fa-circle" aria-hidden="true"></i>
                        </span>
                        2012 - 2013
                      </h2>
                      <h3>UI/UX designer</h3>
                    </div>
                    <!--/.experience-time-->
                  </div>
                  <!--/.col-->
                </div>
              </div>
              <!--/.single-timeline-box-->
            </li>

            <li>
              <div class="single-timeline-box fix">
                <div class="row">
                  <div class="col-md-5">
                    <div class="experience-time text-right">
                      <h2>2010 - 2012</h2>
                      <h3>frontend developer</h3>
                    </div>
                    <!--/.experience-time-->
                  </div>
                  <!--/.col-->
                  <div class="col-md-offset-1 col-md-5">
                    <div class="timeline">
                      <div class="timeline-content">
                        <h4 class="title">
                          <span>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                          </span>
                          hoplony tech limited
                        </h4>
                        <h5>newyork, USA</h5>
                        <p class="description">
                          Duis aute irure dolor in reprehenderit in vol patate velit esse cillum dolore eu fugiat nulla pari. Excepteur sint occana
                          inna tecat cupidatat non proident.
                        </p>
                      </div>
                      <!--/.timeline-content-->
                    </div>
                    <!--/.timeline-->
                  </div>
                  <!--/.col-->
                </div>
              </div>
              <!--/.single-timeline-box-->
            </li>

          </ul>
        </div>
        <!--.main-timeline-->
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
            <div class="row">

              <div class="col-sm-4">
                <div class="item">
                  <img src="{{ base_url('assets/browny') }}/assets/images/portfolio/p1.jpg" alt="portfolio image" />
                  <div class="isotope-overlay">
                    <a href="#">
                      ui/ux design
                    </a>
                  </div>
                  <!-- /.isotope-overlay -->
                </div>
                <!-- /.item -->
                <div class="item">
                  <img src="{{ base_url('assets/browny') }}/assets/images/portfolio/p2.jpg" alt="portfolio image" />
                  <div class="isotope-overlay">
                    <a href="#">
                      ui/ux design
                    </a>
                  </div>
                  <!-- /.isotope-overlay -->
                </div>
                <!-- /.item -->
              </div>
              <!-- /.col -->

              <div class="col-sm-4">
                <div class="item">
                  <img src="{{ base_url('assets/browny') }}/assets/images/portfolio/p3.jpg" alt="portfolio image" />
                  <div class="isotope-overlay">
                    <a href="#">
                      web design
                    </a>
                  </div>
                  <!-- /.isotope-overlay -->
                </div>
                <!-- /.item -->
              </div>
              <!-- /.col -->

              <div class="col-sm-4">
                <div class="item">
                  <img src="{{ base_url('assets/browny') }}/assets/images/portfolio/p4.jpg" alt="portfolio image" />
                  <div class="isotope-overlay">
                    <a href="#">
                      web development
                    </a>
                  </div>
                  <!-- /.isotope-overlay -->
                </div>
                <!-- /.item -->
                <div class="item">
                  <img src="{{ base_url('assets/browny') }}/assets/images/portfolio/p5.jpg" alt="portfolio image" />
                  <div class="isotope-overlay">
                    <a href="#">
                      web development
                    </a>
                  </div>
                  <!-- /.isotope-overlay -->
                </div>
                <!-- /.item -->
              </div>
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
