<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.head')
</head>

  <body>
    <div id="wrapper">
      <!-- Maiin Navigation -->
      @include('admin.partials.nav')
      <div id="page-wrapper">
          <div class="container-fluid">
            <!-- Main Content -->
            @yield('content')
          </div>
      </div>
    </div>
    {{-- @include('admin.partials.scripts') --}}
    @yield('scripts')
  </body>

</html>
