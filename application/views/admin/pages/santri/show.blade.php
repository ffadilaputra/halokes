<h1>{{ $santri->nis }}</h1>
<h1>{{ $santri->nama_lengkap }}</h1>

{{-- INI HARUS ADA DISEMUA LAYOUT SUPAYA BIAR BISA DI KLIK DROPDOWNNYA --}}
@section('scripts')
<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>
@stop