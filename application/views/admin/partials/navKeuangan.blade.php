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
               <a href="{{ base_url('admin/login/logoutProcess')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
         </ul>
      </li>
   </ul>
   <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
   <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
         
         <!-- keuangan -->
         <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#keuangan"><i class="fa fa-fw fa-money"></i>Keuangan <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="keuangan" class="collapse">
               <li><a href="{{ base_url('admin/KategoriKeuangan') }}">Dashboard</a></li>
               <!-- <li><a href="{{ base_url('admin/berita') }}">Semua</a></li> -->
            </ul>
            </a>
         </li>
      </ul>
   </div>
   <!-- /.navbar-collapse -->
</nav>