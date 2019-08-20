@extends('admin.template')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
          Data Santri
        </h1>
    </div>
</div>
<!-- berkas-berkas -->
<div class="panel panel-default">
   <div class="panel-heading">
      <div class="row">
        <?= form_open_multipart('admin/parents/file/'.$archive->id_santri) ?>
         <div class="col-lg-12">
            <h2>Berkas Berkas</h2>

            <hr>
            <!-- foto -->
            <div class="col-lg-12">
               <div>
                    <h3>Berkas Foto-foto</h3>
                    <hr>
               </div>
               <table class="table table-bordered table-hover table-responsive">
                   <thead>
                        <tr>
                            <th style="text-align:center">Foto Santri</th>
                            <th style="text-align:center">Foto Wali Santri</th>
                            <th style="text-align:center">Foto Ayah Santri</th>
                            <th style="text-align:center">Foto Ibu Santri</th>
                        </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <td>
                                <center>
                                  @if($archive->foto_santri)
                                    <img id="santri" src="{{ base_url('assets/uploads/').$archive->foto_santri }}" alt="your image" style="width:150px; height:200px; background-color:#eeeeee;" />
                                  @else
                                    <span class="label label-danger">File belum di unggah</span>
                                  @endif
                                  </center>
                           </td>
                           <td>
                                <center>
                                  @if($archive->foto_wali_santri)
                                    <img id="santri" src="{{ base_url('assets/uploads/').$archive->foto_wali_santri }}" alt="your image" style="width:150px; height:200px; background-color:#eeeeee;" />
                                  @else
                                    <span class="label label-danger">File belum di unggah</span>
                                  @endif
                                </center>
                           </td>
                           <td>
                                <center>
                                    @if($archive->foto_ayah_santri)
                                      <img id="santri" src="{{ base_url('assets/uploads/').$archive->foto_ayah_santri }}" alt="your image" style="width:150px; height:200px; background-color:#eeeeee;" />
                                    @else
                                      <span class="label label-danger">File belum di unggah</span>
                                    @endif
                                </center>
                           </td>
                           <td>
                                <center>
                                    @if($archive->foto_ibu_santri)
                                      <img id="santri" src="{{ base_url('assets/uploads/').$archive->foto_ibu_santri }}" alt="your image" style="width:150px; height:200px; background-color:#eeeeee;" />
                                    @else
                                      <span class="label label-danger">File belum di unggah</span>
                                    @endif
                                </center>
                           </td>
                       </tr>
                   </tbody>
                   <tfoot>
                     <tr>
                       <th>
                        @if($archive->foto_santri)
                            <label>Ubah Foto santri</label>
                            <input class="form-control" type="file" name="foto_santri" id="">
                          @else
                            <label>Unggah gambar</label>
                            <input class="form-control" type="file" name="foto_santri" id="">
                        @endif
                        </th>
                        <th>
                            @if($archive->foto_wali_santri)
                                <label>Ubah Foto wali</label>
                                <input class="form-control" type="file" name="foto_wali_santri" id="">
                              @else
                                <label>Unggah gambar</label>
                                <input class="form-control" type="file" name="foto_wali_santri" id="">
                            @endif
                        </th>
                        <th>
                            @if($archive->foto_ayah_santri)
                                <label>Ubah Foto wali</label>
                                <input class="form-control" type="file" name="foto_ayah_santri" id="">
                              @else
                                <label>Unggah gambar</label>
                                <input class="form-control" type="file" name="foto_ayah_santri" id="">
                            @endif
                        </th>
                        <th>
                            @if($archive->foto_ibu_santri)
                                <label>Ubah Foto wali</label>
                                <input class="form-control" type="file" name="foto_ibu_santri" id="">
                              @else
                                <label>Unggah gambar</label>
                                <input class="form-control" type="file" name="foto_ibu_santri" id="">
                            @endif
                        </th>
                     </tr>
                   </tfoot>
               </table>



            </div>
            <!-- foto end -->

            <!-- dokumen -->
            <div class="col-lg-12">
                <div>
                    <h3>Dokumen</h3>
                    <hr>
               </div>
               <table class="table table-bordered table-hover">
                   <tbody>
                       <tr>
                           <th class="col-sm-4 col-xs-4">Akte</th>
                           <td class="col-sm-4 col-xs-4">
                            @if($archive->akta_santri)
                              <a target="_blank" href="{{ base_url('assets/uploads/').$archive->akta_santri }}">File akta santri</a>
                            @else
                              <span class="label label-danger">File belum di unggah</span>
                            @endif
                           </td>
                           <td class="col-sm-8 col-xs-8">
                             @if($archive->akta_santri)
                              <label>Ubah</label>
                             @else
                              <label>Unggah</label>
                             @endif
                              <input type="file" name="akta_santri">
                           </td>
                       </tr>
                       <tr>
                           <th class="col-sm-4 col-xs-4">KK</th>
                           <td class="col-sm-8 col-xs-8">
                              @if($archive->kk_santri)
                                <a target="_blank" href="{{ base_url('assets/uploads/').$archive->kk_santri }}">File akta santri</a>
                              @else
                              <span class="label label-danger">File belum di unggah</span>
                              @endif
                           </td>
                           <td class="col-sm-8 col-xs-8">
                              @if($archive->kk_santri)
                                <label>Ubah</label>
                              @else
                                <label>Unggah</label>
                              @endif
                              <input type="file" name="kk_santri">
                           </td>
                       </tr>
                       <tr>
                           <th class="col-sm-4 col-xs-4">BPJS</th>
                           <td class="col-sm-8 col-xs-8">
                              @if($archive->bpjs_santri)
                                <a target="_blank" href="{{ base_url('assets/uploads/').$archive->bpjs_santri }}">File akta santri</a>
                              @else
                              <span class="label label-danger">File belum di unggah</span>
                              @endif
                           </td>
                           <td class="col-sm-8 col-xs-8">
                              @if($archive->bpjs_santri)
                                <label>Ubah</label>
                              @else
                                <label>Unggah</label>
                              @endif
                              <input type="file" name="bpjs_santri">
                           </td>
                       </tr>
                       <tr>
                           <th class="col-sm-4 col-xs-4">KTP</th>
                           <td class="col-sm-8 col-xs-8">
                              @if($archive->ktp_santri)
                                <a target="_blank" href="{{ base_url('assets/uploads/').$archive->kk_santri }}">File akta santri</a>
                              @else
                              <span class="label label-danger">File belum di unggah</span>
                              @endif
                           </td>
                           <td class="col-sm-8 col-xs-8">
                              @if($archive->ktp_santri)
                              <label>Ubah</label>
                              @else
                                <label>Unggah</label>
                              @endif
                              <input type="file" name="ktp_santri">
                           </td>
                       </tr>
                       <tr>
                           <th class="col-sm-4 col-xs-4">KTP Wali</th>
                           <td class="col-sm-8 col-xs-8">
                              @if($archive->ktp_wali)
                                <a target="_blank" href="{{ base_url('assets/uploads/').$archive->ktp_wali }}">File akta santri</a>
                              @else
                                <span class="label label-danger">File belum di unggah</span>
                              @endif
                           </td>
                           <td class="col-sm-8 col-xs-8">
                              @if($archive->ktp_wali)
                              <label>Ubah</label>
                              @else
                                <label>Unggah</label>
                              @endif
                              <input type="file" name="ktp_wali">
                           </td>
                       </tr>
                       <tr>
                           <th class="col-sm-4 col-xs-4">KTP Ayah</th>
                           <td class="col-sm-8 col-xs-8">
                              @if($archive->ktp_ayah)
                                <a target="_blank" href="{{ base_url('assets/uploads/').$archive->ktp_ayah }}">File akta santri</a>
                              @else
                                <span class="label label-danger">File belum di unggah</span>
                              @endif
                           </td>
                           <td class="col-sm-8 col-xs-8">
                              @if($archive->ktp_ayah)
                              <label>Ubah</label>
                              @else
                                <label>Unggah</label>
                              @endif
                              <input type="file" name="ktp_ayah">
                           </td>
                       </tr>
                       <tr>
                           <th class="col-sm-4 col-xs-4">KTP Ibu</th>
                           <td class="col-sm-8 col-xs-8">
                              @if($archive->ktp_ibu)
                                <a target="_blank" href="{{ base_url('assets/uploads/').$archive->ktp_ibu }}">File akta santri</a>
                              @else
                                <span class="label label-danger">File belum di unggah</span>
                              @endif
                           </td>
                           <td class="col-sm-8 col-xs-8">
                              @if($archive->ktp_ibu)
                              <label>Ubah</label>
                              @else
                                <label>Unggah</label>
                              @endif
                              <input type="file" name="ktp_ibu">
                           </td>
                       </tr>
                       <tr>
                           <th class="col-sm-4 col-xs-4">Ijazah</th>
                           <td class="col-sm-8 col-xs-8">
                              @if($archive->ijazah_santri)
                                <a target="_blank" href="{{ base_url('assets/uploads/').$archive->ijazah_santri }}">File akta santri</a>
                              @else
                                <span class="label label-danger">File belum di unggah</span>
                              @endif
                           </td>
                           <td class="col-sm-8 col-xs-8">
                              @if($archive->ijazah_santri)
                              <label>Ubah</label>
                              @else
                                <label>Unggah</label>
                              @endif
                              <input type="file" name="ijazah_santri">
                           </td>
                       </tr>
                       <tr>
                           <th class="col-sm-4 col-xs-4">SKHUN</th>
                           <td class="col-sm-8 col-xs-8">
                              @if($archive->skhun_santri)
                                <a target="_blank" href="{{ base_url('assets/uploads/').$archive->skhun_santri }}">File akta santri</a>
                              @else
                                <span class="label label-danger">File belum di unggah</span>
                              @endif
                           </td>
                           <td class="col-sm-8 col-xs-8">
                              @if($archive->skhun_santri)
                              <label>Ubah</label>
                              @else
                                <label>Unggah</label>
                              @endif
                              <input type="file" name="skhun_santri">
                           </td>
                       </tr>

                   </tbody>
               </table>
               <div class="form-group">
                  <input type="submit" class="btn btn-success" value="Ubah data berkas">
              </div>
            </div>
            <!-- dokumen end -->
         </div>
         <?= form_close() ?>
        </div>
   </div>
</div>
<!-- berkas-berkas end -->
@stop

