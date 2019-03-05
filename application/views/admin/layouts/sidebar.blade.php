<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.partials.head')
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      @include('admin.partials.header')
    </header>
    <div class="app-body">
      <div class="sidebar">
        @include('admin.partials.sidebar')
      </div>
      <main class="main">
        @yield('content')
      </main>
      <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
              <i class="icon-list"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
              <i class="icon-speech"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
              <i class="icon-settings"></i>
            </a>
          </li>
        </ul>
      </aside>
    </div>
    <footer class="app-footer">
      @include('admin.partials.footer')
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ base_url('assets/coreui') }}/vendors/jquery/js/jquery.min.js"></script>
    <script src="{{ base_url('assets/coreui') }}/vendors/popper.js/js/popper.min.js"></script>
    <script src="{{ base_url('assets/coreui') }}/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ base_url('assets/coreui') }}/vendors/pace-progress/js/pace.min.js"></script>
    <script src="{{ base_url('assets/coreui') }}/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="{{ base_url('assets/coreui') }}/vendors/@coreui/coreui/js/coreui.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ base_url('assets/js/validation_password.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('#main').DataTable();
      } );
    </script>
  </body>
</html>
