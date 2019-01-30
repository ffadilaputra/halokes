@extends('admin.template')
@section('content')

<div class="row">
    <div class="form-group">
        <h4>Foto Santri dan Orang tua</h4>
        <hr>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                    <img src="{{ base_url('assets/uploads/'.$archive->foto_santri) }}" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                      <h4> {{ $santri->nama_lengkap }}</h4>
                        <small><cite>Nama lengkap santri&nbsp;<i class="glyphicon glyphicon-user">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-picture"></i>Foto Santri
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                    <img src="{{ base_url('assets/uploads/'.$archive->ktp_santri) }}" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                      <h4> {{ $ayah->nama_lengkap }}</h4>
                        <small><cite>Nama lengkap santri&nbsp;<i class="glyphicon glyphicon-user">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-picture"></i>Foto KTP Santri
                        </p>
                    </div>
                </div>
              </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                    <img src="{{ base_url('assets/uploads/'.$archive->foto_ayah_santri) }}" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                      <h4> {{ $ayah->nama_lengkap }}</h4>
                        <small><cite>Nama lengkap ayah santri&nbsp;<i class="glyphicon glyphicon-user">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-picture"></i>Foto Ayah Santri
                        </p>
                    </div>
                </div>
                <div class="row">

                </div>
              </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                    <img src="{{ base_url('assets/uploads/'.$archive->ktp_ayah) }}" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                      <h4> {{ $ayah->nama_lengkap }}</h4>
                        <small><cite>Nama lengkap ayah santri&nbsp;<i class="glyphicon glyphicon-user">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-picture"></i>Foto KTP Ayah Santri
                        </p>
                    </div>
                </div>
              </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                    <img src="{{ base_url('assets/uploads/'.$archive->foto_ibu_santri) }}" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                      <h4> {{ $ibu->nama_lengkap }}</h4>
                        <small><cite>Nama lengkap ibu santri&nbsp;<i class="glyphicon glyphicon-user">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-picture"></i>Foto Ibu Santri
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                    <img src="{{ base_url('assets/uploads/'.$archive->ktp_ibu) }}" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                      <h4> {{ $ayah->nama_lengkap }}</h4>
                        <small><cite>Nama lengkap ibu santri&nbsp;<i class="glyphicon glyphicon-user">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-picture"></i>Foto KTP Ibu Santri
                        </p>
                    </div>
                </div>
              </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                    <img src="{{ base_url('assets/uploads/'.$archive->foto_ibu_santri) }}" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                      <h4> {{ $ibu->nama_lengkap }}</h4>
                        <small><cite>Nama lengkap ibu santri&nbsp;<i class="glyphicon glyphicon-user">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-picture"></i>Foto Ibu Santri
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                    <img src="{{ base_url('assets/uploads/'.$archive->ktp_wali) }}" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                      <h4> {{ $wali->nama_lengkap }}</h4>
                        <small><cite>Nama lengkap wali santri&nbsp;<i class="glyphicon glyphicon-user">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-picture"></i>Foto KTP IWali Santri
                        </p>
                    </div>
                </div>
              </div>
        </div>
    </div>

    <div class="form-group">
        <h4>Berkas pendidikan sebelumnya</h4>
        <hr>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-8">
                    <img src="{{ base_url('assets/uploads/'.$archive->ijazah_santri) }}" alt="" class="img-rounded img-responsive" />
                    <small><cite>Berkas Ijazah santri&nbsp;</cite></small>
                    </div>
                  </div>
            </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-8">
                    <img src="{{ base_url('assets/uploads/'.$archive->skhun_santri) }}" alt="" class="img-rounded img-responsive" />
                    <small><cite>Berkas SKHUN santri&nbsp;</cite></small>
                    </div>
                  </div>
            </div>
    </div>

  </div>
@stop

