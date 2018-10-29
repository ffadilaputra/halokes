<header class="top-area">
  <div class="header-area">
    <!-- Start Navigation -->
    <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">

      <div class="container-fluid">

        <!-- Start Header Navigation -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="#beranda">Yayasan Ma'had Darun Najah</a>
        </div>
        <!--/.navbar-header-->
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
          <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
            <li class=" smooth-menu active"></li>
            <li class="smooth-menu">
              <a href="{{ base_url('blog/profil') }}" target="_blank">Profil</a>
            </li>
            <li class="nav-item dropdown smooth-menu">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Lembaga
              </a>
              <ul class="dropdown-menu multi-column columns-2" aria-labelledby="navbarDropdown">
              <div class="row">
                <div class="col-sm-6">
                  <ul class="multi-column-dropdown">
                  <li>
                    <a class="dropdown-item" href="#">MTs</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">MA</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">TPQ</a>
                  </li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul class="multi-column-dropdown">
                  <li>
                    <a class="dropdown-item" href="#">Madin</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Pesantren</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Sosial</a>
                  </li>
                  </ul>
                </div>
              </div>
              </ul>
            </li>
            <li class="smooth-menu">
              <a href="#">Informasi</a>
            </li>
            <li class="smooth-menu">
              <a href="#">Mauidhoh</a>
            </li>
            <li class="smooth-menu">
            <!-- video dari IG -->
              <a href="#">Galeri</a>
            </li>
            <li>
            <a href="{{ base_url('ppdb/santri') }}" target="_blank">Pendaftaran</a>
            </li>
          </ul>
          <!--/.nav -->
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
    <!-- End Navigation -->
  </div>
  <!--/.header-area-->

  <div class="clearfix"></div>

</header>
