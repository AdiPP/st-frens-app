@extends('layouts.backend_layout')

@section('isi')
<form action="{{ url('/dashboard/produk', []) }}">
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>TAMBAH PRODUK</h2>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            INFORMASI PRODUK
                            <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum, earum.</small>
                        </h2>
                        {{-- <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul> --}}
                    </div>
                    <div class="body">
                        <!-- <h2 class="card-inside-title">Basic Examples</h2> -->
                            <div class="row clearfix">
                                <div class="col-lg-2 form-control-label">
                                    <label for="" class="pull-left">Nama Produk</label>
                                </div>
                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 form-control-label">
                                    <label for="" class="pull-left">Lokasi</label>
                                </div>
                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 form-control-label">
                                    <label for="" class="pull-left">Deskripsi Produk</label>
                                </div>
                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input -->
    </div>
</section>
</form>
@endsection	