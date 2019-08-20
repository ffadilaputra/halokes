<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ base_url('admin') }}">Laman Admin</a>
  </div>
  <!-- Top Menu Items -->
  <ul class="nav navbar-right top-nav">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ $admin->email}} <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li>
          <a href="{{ base_url('admin/user/show/').$admin['id_users'] }}"><i class="fa fa-fw fa-user"></i> Profile</a>
        </li>
        <li class="divider"></li>
        <li>
          <a data-toggle="modal" data-target="#modalLogout" href=""><i class="fa fa-fw fa-power-off"></i> Log Out</a>
          <!-- Modal -->
        </li>
      </ul>
    </li>
  </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
        <!-- ppdb -->
        @if($admin->id_level == 10 || $admin->id_level == 16)
        <li>
          <a href="javascript:;" data-toggle="collapse" data-target="#ppdbs"><i class="fa fa-fw fa-arrows-v"></i> PPDB <i class="fa fa-fw fa-caret-down"></i></a>
          <ul id="ppdbs" class="collapse">
            <li>
              <a href="{{ base_url('admin/santri') }}">Verifikasi Santri</a>
            </li>
            <li>
              <a href="{{ base_url('admin/berkas') }}">Cek berkas Santri</a>
            </li>
            {{--
              <li>
                <a href="{{ base_url('admin/pembayaran/lunas') }}">Lunas</a>
              </li>
              --}}
            </ul>
          </li>
          @endif
          <!-- santri -->
          @if($admin->id_level == 10 || $admin->id_level == 12 || $admin->id_level == 16)
          <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#sc"><i class="fa fa-fw fa-user"></i>Santri <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="sc" class="collapse">
              <li>
                <a href="{{ base_url('admin/santri/all') }}">Semua</a>
              </li>
              <li>
                <a href="{{ base_url('admin/santri/ma') }}">Madarasah Aliyah</a>
              </li>
              <li>
                <a href="{{ base_url('admin/santri/mts') }}">Madarasah Tsanawiyah</a>
              </li>
              <li>
                <a href="{{ base_url('admin/santri/md') }}">Madarasah Diniyah</a>
              </li>
            </ul>
          </li>
          @endif
          <!-- artikel -->
          @if($admin->id_level == 10 || $admin->id_level == 11)
          <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#pengumuman"><i class="fa fa-fw fa-book"></i>Artikel <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="pengumuman" class="collapse">
              <li><a href="{{ base_url('admin/berita') }}">Berita</a></li>
              <li><a href="{{ base_url('admin/pengumuman') }}">Pengumuman</a></li>
            </ul>
          </a>
        </li>
        @endif
        <!-- keuangan -->
        @if($admin->id_level == 10 || $admin->id_level == 17 || $admin->id_level == 18 || $admin->id_level == 16)
        <li>
          <a href="javascript:;" data-toggle="collapse" data-target="#keuangan"><i class="fa fa-fw fa-money"></i>Keuangan <i class="fa fa-fw fa-caret-down"></i></a>
          <ul id="keuangan" class="collapse">
            <!-- <li><a href="{{ base_url('admin/KategoriKeuangan/dashboard') }}">Dashboard</a></li> -->
            <li>
              <a href="{{ base_url('admin/Pembayaran/angsuran') }}">Laporan Angsuran</a>
            </li>
            <li>
              <a href="{{ base_url('admin/Pembayaran/spp') }}">Laporan Syahriyah</a>
            </li>
            <li>
              <a href="{{ base_url('admin/KategoriKeuangan/index') }}">Kategori Keuangan</a>
            </li>
          </ul>
        </a>
      </li>
      @endif
      <!-- akademik -->
      @if($admin->id_level == 10 || $admin->id_level == 12)
      <li>
        <a href="javascript:;" data-toggle="collapse" data-target="#akademik"><i class="fa fa-fw fa-archive"></i>Akademik <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="akademik" class="collapse">
          <li><a href="{{ base_url('admin/guru') }}">Kelola Guru</a></li>
          <li><a href="{{ base_url('admin/GuruMatpel') }}">Guru Mata Pelajaran</a></li>
          <li><a href="{{ base_url('admin/matpel') }}">Mata Pelajaran</a></li>
          <li><a href="{{ base_url('admin/MatpelKelas') }}">Mata Pelajaran Kelas</a></li>
          <li><a href="{{ base_url('admin/kelas') }}">Kelola Kelas</a></li>
          <li><a href="{{ base_url('admin/jurusan') }}">Kelola Jurusan</a></li>
          <li><a href="{{ base_url('admin/PenempatanSiswa') }}">Penempatan Siswa</a></li>
        </ul>
      </a>
    </li>
    @endif
      <!-- akademik -->
      @if($admin->id_level == 10 || $admin->id_level == 12 || $admin->id_level == 14)
      <li>
        <a href="javascript:;" data-toggle="collapse" data-target="#akademikinput"><i class="fa fa-fw fa-archive"></i>Akademik Input <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="akademikinput" class="collapse">
          <li><a href="{{ base_url('admin/AbsensiSiswa') }}">Absensi Siswa</a></li>
        </ul>
      </a>
    </li>
    @endif
    <!-- master -->
    @if($admin->id_level == 10)
    <li>
      <a href="javascript:;" data-toggle="collapse" data-target="#master"><i class="fa fa-fw fa-archive"></i>Master <i class="fa fa-fw fa-caret-down"></i></a>
      <ul id="master" class="collapse">
        <li><a href="{{ base_url('admin/GenerateLogin') }}">Buat Login Santri</a></li>
        <li><a href="{{ base_url('admin/AkunSantri') }}">Akun Santri</a></li>
        <li><a href="{{ base_url('admin/TahunAkademik') }}">Tahun Akademik</a></li>
        <li><a href="{{ base_url('admin/User') }}">Akun Admin / Operator</a></li>
        <li><a href="{{ base_url('admin/level') }}">Pengelola Level</a></li>
      </ul>
    </a>
  </li>
  @endif
</ul>
</a>
</li>
</ul>
</div>

<!-- /.navbar-collapse -->
</nav>

<div id="modalLogout" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pemberitahuan</h4>
      </div>
      <div class="modal-body">
        <p>Anda yakin ingin keluar dari laman ini ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a class="btn btn-danger" href="{{ base_url('admin/login/logoutProcess')}}">Keluar</a>
      </div>
    </div>
  </div>
</div>
