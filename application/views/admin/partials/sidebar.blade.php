<nav class="sidebar-nav">
  <ul class="nav">
    <li class="nav-item">
    <a class="nav-link" href="{{ base_url('dashboard') }}">
        <i class="nav-icon icon-speedometer"></i> Dashboard
      </a>
    </li>
    <li class="nav-title">Pemohon</li>
    <li class="nav-item">
        <a class="nav-link" href="{{ base_url('pemohon') }}">
        <i class="nav-icon icon-user"></i> Data Pemohon</a>
    </li>
    <li class="nav-title">Components</li>
    <li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="{{ base_url('admin') }}">
        <i class="nav-icon icon-puzzle"></i> Manajemen TUK</a>
      <ul class="nav-dropdown-items">
        <li class="nav-item">
        <a class="nav-link" href="{{ base_url('tuk') }}">
            <i class="nav-icon icon-file"></i> TUK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ base_url('kuk') }}">
            <i class="nav-icon icon-puzzle"></i> KUK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ base_url('skema') }}">
            <i class="nav-icon icon-puzzle"></i> Skema</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ base_url('ElemenKopetensi') }}">
              <i class="nav-icon icon-puzzle"></i> Elemen Kopetensi</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ base_url('UnitKopetensi') }}">
                <i class="nav-icon icon-puzzle"></i> Unit Kopetensi</a>
            </li>
      </ul>
    </li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="{{ base_url('admin') }}">
          <i class="nav-icon icon-user"></i> Manajemen Admin</a>
        <ul class="nav-dropdown-items">
          <li class="nav-item">
          <a class="nav-link" href="{{ base_url('admin') }}">
              <i class="nav-icon icon-user"></i> Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ base_url('role') }}">
              <i class="nav-icon icon-settings"></i> Role</a>
          </li>
      </li>
  </ul>
</nav>
<button class="sidebar-minimizer brand-minimizer" type="button"></button>
