@extends('layouts.backend_layout')

@section('isi')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DAFTAR PRODUK</h2>
        </div>
        <!-- Basic Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 class="pull-left vcenter">
                            PRODUK
                            <!-- <small>Basic example without any additional modification classes</small> -->
                        </h2>
                        <a href="{{ url('/dashboard/franchisor/produk/tambah', []) }}" class="btn btn-lg btn-default waves-effect pull-right">TAMBAH PRODUK</a>
                        <div style="clear: both;"></div>
                        <!-- <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 1%;"></th>
                                    <th class="col-lg-2">NAMA PRODUK</th>
                                    <th>DESKRIPSI</th>
                                    <th>HARGA</th>
                                    <th colspan="3" class="col-lg-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Produk 1</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, et.</td>
                                    <td>Rp. 100.000 - Rp. 1.000.000</td>
                                    <td><a href="{{ url('/dashboard/franchisor/produk/lihat', []) }}"><i class="material-icons">remove_red_eye</i></a></td>
                                    <td><a href="{{ url('/dashboard/franchisor/produk/ubah', []) }}"><i class="material-icons">mode_edit</i></a></td>
                                    <td><a href="{{ url('#', []) }}"><i class="material-icons">delete</i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Table -->
    </div>
</section>
@endsection	
