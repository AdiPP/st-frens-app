@extends('layouts.backend_layout')

@section('isi')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>PRODUK 1</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="body">
                        <p class="lead">DESKIPSI PRODUK</p>
                        <div class="content">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure corporis aperiam quaerat quisquam modi perspiciatis, soluta quas excepturi qui facilis molestias aspernatur atque saepe alias quod. Quaerat unde accusamus magnam veritatis odit provident consequuntur nobis id, voluptatibus sint quae ad harum distinctio esse! Quia doloremque dolorem amet deserunt hic deleniti!
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="body">
                        <p class="lead">FOTO PRODUK</p>
                        <div class="row">
                            <div class="col-lg-4">
                            image-1
                            </div>
                            <div class="col-lg-4">
                                image-2
                            </div>
                            <div class="col-lg-4">
                                image-3
                            </div>
                            <div class="col-lg-4">
                                image-4
                            </div>
                            <div class="col-lg-4">
                                image-5
                            </div>
                            <div class="col-lg-4">
                                image-6
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <p class="pull-left lead">PAKET PRODUK</p>
                        <a class="pull-right btn" href="{{ url('/dashboard/produk/paket/tambah', []) }}">TAMBAH PAKET</a>
                        <div style="clear:both;"></div>
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>NAMA PAKET</th>
                                        <th>DESKRIPSI</th>
                                        <th>STATUS</th>
                                        <th class="col-lg-1" colspan="3"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Paket A</td>
                                        <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, iure!</td>
                                        <td><span class="label bg-green">Enable</span></td>
                                        <td><i class="material-icons">remove_red_eye</i></td>
                                        <td><i class="material-icons">mode_edit</i></td>
                                        <td><i class="material-icons">delete</i></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Paket B</td>
                                        <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, iure!</td>
                                        <td><span class="label bg-red">Disable</span></td>
                                        <td><i class="material-icons">remove_red_eye</i></td>
                                        <td><i class="material-icons">mode_edit</i></td>
                                        <td><i class="material-icons">delete</i></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Paket C</td>
                                        <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, iure!</td>
                                        <td><span class="label bg-green">Disable</span></td>
                                        <td><i class="material-icons">remove_red_eye</i></td>
                                        <td><i class="material-icons">mode_edit</i></td>
                                        <td><i class="material-icons">delete</i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="{{ url('/dashboard/produk/ubah', []) }}" class="btn btn-block btn-lg btn-primary waves-effect m-b-30">PERBARUI</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection