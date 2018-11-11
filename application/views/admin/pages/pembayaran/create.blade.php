@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Pembayaran Santri
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Pembayaran
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-8">
   <?= form_open('admin/pembayaran/store'); ?>
   <div class="form-group">
      <label>Nama Santri</label>
      <select name="id_santri" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
          <option value="">-- Pilih --</option>
          @foreach ($santri as $item)
            <option value="{{ $item->id_santri }}">{{ $item->nama_lengkap }}</option>
          @endforeach
      </select>
   </div>
   <div class="form-group">
        <label for="">Status</label>
        <select name="status_pembayaran" id="stats" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
            <option value="">-- Pilih --</option>
            <option value="tunggakan">Tunggakan</option>
            <option value="lunas">Lunas</option>
        </select>
   </div>
   <div class="form-group">
        <label for="">Bukti Pembayaran</label>
        <input type="file" class="form-control">
   </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" style="float:right">
    </div>
   <?= form_close() ?>
</div>
@stop
{{-- INI HARUS ADA DISEMUA LAYOUT SUPAYA BIAR BISA DI KLIK DROPDOWNNYA --}}
@section('scripts')
<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

<script>
    // $('#stats').change(function() {
    //     if($(this).val() == 'lunas'){
    //         $('body').append('<input class="form-control" id="id_bukti" name="bukti" type="file">')
    //         console.log('Berhasil membuat element')
    //     }else{
    //         $('id_bukti').remove()
    //     }
    // })
</script>

@stop