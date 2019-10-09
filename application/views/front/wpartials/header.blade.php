<div class="wrap">
  <header role="banner">
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-9 social">
            <a href="https://web.facebook.com/DarunNajahMalang/" target="_blank"><span class="fa fa-facebook"></span></a>
            <a href="https://www.instagram.com/santridarunnajah/" target="_blank"><span class="fa fa-instagram"></span></a>
            <!-- <a href="#"><span class="fa fa-youtube-play"></span></a> -->
          </div>
          <div class="col-3 search-top">
            <!-- <a href="#"><span class="fa fa-search"></span></a> -->
            <!-- <form action="#" class="search-top-form">
            <span class="icon fa fa-search"></span>
            <input type="text" id="s" placeholder="Pencarian...">
          </form> -->
        </div>
      </div>
    </div>
  </div>

  <div class="container logo-wrap">
    <div class="row pt-5">
      <div class="col-12 text-center">
        <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
        <h2 class="site-logo">
          <a href=" {{ base_url() }}">
            <img src="{{base_url('assets/images/header-min.jpg')}}" style="max-width:100%;" alt="">
          </a>
        </h2>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-md  navbar-light bg-light">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" href="{{ base_url('main') }}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="{{ base_url('profile') }}">Sejarah</a>
              <a class="dropdown-item" href="{{ base_url('profile/fasilitas') }}">Fasilitas</a>
              <a class="dropdown-item" href="{{ base_url('profile/kajian') }}">Kajian</a>
              <a class="dropdown-item" href="{{ base_url('profile/kegiatan') }}">Kegiatan</a>
              <a class="dropdown-item" href="{{ base_url('profile/alumni') }}">Alumni</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lembaga</a>
            <div class="dropdown-menu" aria-labelledby="dropdown05">
              <a class="dropdown-item" href="{{ base_url('lembaga') }}">MTs</a>
              <a class="dropdown-item" href="{{ base_url('lembaga/ma') }}">MA</a>
              <a class="dropdown-item" href="{{ base_url('lembaga/tpq') }}">TPQ-MQ</a>
              <a class="dropdown-item" href="{{ base_url('lembaga/madin') }}">Madin</a>
              <a class="dropdown-item" href="{{ base_url('lembaga/majlis') }}">Majlis Ta'lim</a>
              <a class="dropdown-item" href="{{ base_url('lembaga/koppontren') }}">Koppontren</a>
            </div>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ base_url('informasi') }}">Informasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ base_url('mauidhoh') }}">Mauidhoh</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ base_url('galeri') }}">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ base_url('contact') }}">Tentang Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<div class="container">
  <div class="nav-box">
    <div class="sub-nav mx-auto">

      <a class="nav-link" href="{{ base_url('ppdb/santri/informasi') }}">Pendaftaran</a>

      <a class="nav-link" href="{{ base_url('guest/login') }}">Masuk</a>

    </div>
  </div>
</div>
</div>
<!-- END header -->
