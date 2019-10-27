@extends('layouts.backend_layout')

@section('isi')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DAFTAR AGEN</h2>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="pull -left vcenter">
                                AGEN
                                {{-- <small>Basic example without any additional modification classes</small> --}}
                            </h2>
                            <a class="btn btn-lg btn-default waves-effect pull-right" href="{{ url('/dashboard/franchisor/agen/calonAgen', []) }}">CALON AGEN</a>
                            <div style="clear:both;"></div>
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
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width:1%;"></th>
                                        <th>NAMA AGEN</th>
                                        <th>LOKASI</th>
                                        <th>GAMBAR</th>
                                        <th class="col-lg-1">LAPORAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John Doe <br> <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, illo.</small></td>
                                        <td>Purbalingga</td>
                                        <td>Gambar 1</td>
                                        <td><i class="material-icons">remove_red_eye</i></td>
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