<!DOCTYPE html>
<html lang="en">
<head>
    @include('guest.partials.head')
    <meta charset="UTF-8">
</head>

  <body>
    <div id="wrapper">
      <!-- Maiin Navigation -->
      @include('guest.partials.nav')
      <div id="page-wrapper">
          <div class="container-fluid">
            <!-- Main Content -->
            @yield('content')
          </div>
      </div>
    </div>
    @include('guest.partials.scripts')
  </body>

</html>
