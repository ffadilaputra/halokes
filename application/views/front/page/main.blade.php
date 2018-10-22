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
      <div class="experience-content col-lg-12">
                
        <div class="mau-panel col-lg-4 col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Basic panel example
            </div>
          </div>
        </div>
        <!-- end panel -->

        <div class="mau-panel col-lg-4 col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Basic panel example
            </div>
          </div>
        </div>
        
        <!-- end panel -->
        <div class="mau-panel col-lg-4 col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Basic panel example
            </div>
          </div>
        </div>
        <!-- end panel -->

        <div class="mau-panel col-lg-4 col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Basic panel example
            </div>
          </div>
        </div>
        <!-- end panel -->

        <div class="mau-panel col-lg-4 col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Basic panel example
            </div>
          </div>
        </div>
        
        <!-- end panel -->
        <div class="mau-panel col-lg-4 col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Basic panel example
            </div>
          </div>
        </div>
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
