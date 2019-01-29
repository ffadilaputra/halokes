
<!DOCTYPE html>
<html>
<head>
    @include('front.wpartials.head')
  <title>Laporan</title>

	<style>
	table{
		border-collapse: collapse;
		width:70%;
		margin: 0 auto;
	}
	table th{
		border:0px solid #000;
		padding: 3px;
		font-weight: bold;
		text-align: center;
	}
	table td{
		border: 0px solid #000;
		padding: 3px;
		vertical-align: top;
	}
	</style>
</head>
  <body>
    <div class="wrap">
        @yield('content')
    </div>
      @include('admin.partials.scripts')
  </body>
</html>
