<!doctype html>
<html class="no-js" lang="en">
  @include('front.wpartials.head')
<body>
  <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
  <!-- top-area Start -->
  @include('front.wpartials.header')
  <!-- /.top-area-->
  <!-- top-area End -->
  @yield('content')
  <!--footer-copyright start-->
  @include('front.wpartials.footer')
  <!--/.footer-copyright-->
  <!--footer-copyright end-->
  @include('front.wpartials.scripts')
</body>

</html>
