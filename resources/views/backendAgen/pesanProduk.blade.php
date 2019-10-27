@extends('layouts.backendAgen_layout')

@section('isi')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PESAN PRODUK 1</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
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
                                    <label for="" class="pull-left">Paket</label>
                                </div>
                                <div class="col-lg-10" style="margin-bottom: 0px !important;">
                                    <div class="form-group">
                                        <div class="">
                                            <input name="group4" type="radio" id="radio_7" class="radio-col-red">
                                            <label for="radio_7">PAKET 1</label>
                                        </div>
                                        <div class="">
                                            <input name="group4" type="radio" id="radio_7" class="radio-col-red">
                                            <label for="radio_7">PAKET 2</label>
                                        </div>
                                        <div class="">
                                            <input name="group4" type="radio" id="radio_7" class="radio-col-red">
                                            <label for="radio_7">PAKET 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 form-control-label">
                                    <label for="" class="pull-left">Catatan</label>
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
                    <div>
                        <a href="{{ url('/dashboard/agen/produk', []) }}" class="btn btn-block btn-lg btn-primary waves-effect m-b-30">SELESAI</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection	
