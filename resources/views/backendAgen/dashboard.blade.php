@extends('layouts.backendAgen_layout')

@section('isi')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body table-responsive">
                            <p class="pull-left lead">LAPORAN FRANCHISE</p>
                            <a href="{{ url('/dashboard/agen/laporan/tambah', []) }}" class="btn btn-default pull-right">UPLOAD LAPORAN</a>
                            <div style="clear: both;"></div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 1%;"></th>
                                        <th>NAMA LAPORAN</th>
                                        <th>TANGGAL UPLOAD</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Produk 1 - Oktober 2019</td>
                                        <td>03 November 2019</td>
                                        <td><span class="label bg-green">Approved</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection	
