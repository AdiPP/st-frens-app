@extends('layouts.backend_layout')

@section('isi')   
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DAFTAR CALON AGEN</h2>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <!-- <div class="header">
                            <h2>
                                BASIC TABLES
                                <small>Basic example without any additional modification classes</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
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
                            </ul>
                        </div> -->
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="col-lg-1"></th>
                                        <th>NAMA</th>
                                        <th>PESAN</th>
                                        <th class="col-lg-1" colspan="3">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John Doe</td>
                                        <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, excepturi!</td>
                                        <td><a href="#"><i class="material-icons">remove_red_eye</i></a></td>
                                        <td><a href="#"><i class="material-icons">check</i></a></td>
                                        <td><a href="#"><i class="material-icons">cancel</i></a></td>
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