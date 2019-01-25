<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo e(base_url('admin')); ?>">Laman Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">

        
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo e($admin->email); ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profil</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="<?php echo e(base_url('admin/login/logoutProcess')); ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#ppdb"><i class="fa fa-fw fa-arrows-v"></i> PPDB <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="ppdb" class="collapse">
                    <li>
                        <a href="<?php echo e(base_url('admin/santri')); ?>">Verifikasi Santri</a>
                        <a href="<?php echo e(base_url('admin/berkas')); ?>">Cek berkas Santri</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#pembayaran"><i class="fa fa-fw fa-user"></i>Pembayaran <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pembayaran" class="collapse">
                    <li>
                        <a href="<?php echo e(base_url('admin/pembayaran')); ?>">Semua</a>
                    </li>
                    
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#santri"><i class="fa fa-fw fa-user"></i>Santri <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="santri" class="collapse">
                    <li>
                        <a href="<?php echo e(base_url('admin/santri/all')); ?>">Semua</a>
                    </li>
                    <li>
                        <a href="<?php echo e(base_url('admin/santri/verifed')); ?>">Terverifikasi</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#pengumuman"><i class="fa fa-fw fa-book"></i>Artikel <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="pengumuman" class="collapse">
                        <li><a href="<?php echo e(base_url('admin/berita/create')); ?>">Buat Berita</a></li>
                        <li><a href="<?php echo e(base_url('admin/berita')); ?>">Semua</a></li>
                    </ul>
                </a>
            </li>
            
        </ul>
    </div>

    <!-- /.navbar-collapse -->
</nav>
