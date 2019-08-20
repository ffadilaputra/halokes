<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ base_url('admin') }}">Pondok Pesantren Darun Najah</a>
  </div>
  <!-- Top Menu Items -->
  <ul class="nav navbar-right top-nav">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ $admin->no_virtual_account}} <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <!-- <li>
        <a href="{{ base_url('admin/user/show/').$admin['id_users'] }}"><i class="fa fa-fw fa-user"></i> Profile</a>
      </li> -->
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
    <!-- guest -->
    <li>
      <a href="{{ base_url('guest') }}" data-toggle="collapse"><i class="fa fa-fw fa-home"></i>Dashboard</a>
    </li>
    <li>
      <a href="javascript:;" data-toggle="collapse" data-target="#santri"><i class="fa fa-fw fa-users"></i> Santri <i class="fa fa-fw fa-caret-down"></i></a>
      <ul id="santri" class="collapse">
        <li>
          <a href="{{ base_url('guest/santri') }}">Biodata Santri</a>
        </li>
        <li>
          <a href="{{ base_url('guest/santri/pembayaran') }}">Pembayaran</a>
        </li>
      </ul>
    </li>
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
        <a class="btn btn-danger" href="{{ base_url('guest/login/logoutProcess')}}">Keluar</a>
      </div>
    </div>
  </div>
</div>
