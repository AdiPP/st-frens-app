@extends('master_layout')

@section('isi')
<!-- END nav -->
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(images/frens_bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">It's A Chance To Change Your Life</h1>
                        <h2 class="subheading mb-4">by getting the great partner</h2>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url(images/frens_bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-sm-12 ftco-animate text-center">
                        <h1 class="mb-2">Its 100% Possible</h1>
                        <h2 class="subheading mb-4">To Aim higher than you can imagine</h2>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="tambahBrand">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Brand</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="column align-items-end">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="firstname">Nama Brand</label>
                                <input type="text" required class="form-control" placeholder="Nama Brand" name="namaBrand">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="firstname">Foto Brand</label>
                                <input type="file" class="form-control" placeholder="" name="fileFoto">
                                <p>Ukuran Foto 500x500</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="lastname">Deskripsi Brand</label>
                                <textarea class="form-control" placeholder="Deskripsi" name="deskBrand"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="firstname">Scan Hak Paten</label>
                                <input type="file" class="form-control" placeholder="">
                                <p>Ukuran Foto 500x500</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-outline-primary"  data-dismiss="modal">Close</button>
                    <input type="submit" value="Upload" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

@if(session('jabatan')=='franchisor'||session('jabatan')=='agen')
<section class="ftco-section" id="katalog">
    <div class="container">	
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5 text-center">
                <ul class="product-category">
                    <li><a href="#"  class="font-weight-bolder" >BRAND ANDA</a></li>
                </ul>
            </div>
        </div>
        @if(session('jabatan')=='franchisor')
        <div class="row justify-content-end mb-3 mx-3">
            <button class="btn btn-primary " data-target="#tambahBrand" data-toggle="modal">+ Tambah Brand</button>
        </div>
        @endif
        <div class="row">

            <!-- Product Sejumlah 12  -->
            @foreach($franchise as $franchise)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{asset('images/frens_product_1.jpg')}}" alt="Colorlib Template">
                        <!-- <span class="status">30%</span> -->
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="{{ url('/detail', ["id_produk" => $franchise['id_frans']]) }}" class="text-primary font-weight-bold">{{$franchise['nama_brand']}}</a></h3>
                        <div class="d-flex ">
                            <div class="rating d-flex m-auto">
                                <p class="text-center">
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    {{-- @if($brand['bintang'] == 0)
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($brand['bintang'] == 0.5)
                                        <a href="#"><span class="ion-ios-star-half"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($brand['bintang'] == 1)
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($brand['bintang'] == 1.5)
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star-half"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($brand['bintang'] == 2)
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($brand['bintang'] == 2.5)
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star-half"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($brand['bintang'] == 3)
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($brand['bintang'] == 3.5)
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star-half"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($brand['bintang'] == 4)
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($brand['bintang'] == 4.5)
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star-half"></span></a>
                                    @else
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                    @endif --}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row mt-2">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<section class="ftco-section" id="katalog">
    <div class="container">	
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5 text-center">
                <ul class="product-category">
                    <li><a href="#"  class="font-weight-bolder" >KATALOG</a></li>
                </ul>
            </div>
        </div>
        <div class="row">

            <!-- Product Sejumlah 12  -->
            @foreach($katalogs as $katalog )
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="{{ url('/detail/'.$katalog['id_brand'], []) }}" class="img-prod"><img class="img-fluid" src="{{asset($katalog['path_foto'])}}" alt="Colorlib Template">
                        <!-- <span class="status">30%</span> -->
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="FrensDetail.html" class="text-primary font-weight-bold">{{$katalog['nama_produk']}}</a></h3>
                        <div class="d-flex ">
                            <div class="rating d-flex m-auto">
                                <p class="text-center">
                                    @if($katalog['bintang'] == 0)
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($katalog['bintang'] == 0.5)
                                        <a href="#"><span class="ion-ios-star-half"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($katalog['bintang'] == 1)
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($katalog['bintang'] == 1.5)
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star-half"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($katalog['bintang'] == 2)
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($katalog['bintang'] == 2.5)
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star-half"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($katalog['bintang'] == 3)
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($katalog['bintang'] == 3.5)
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star-half"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($katalog['bintang'] == 4)
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    @elseif($katalog['bintang'] == 4.5)
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star-half"></span></a>
                                    @else
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                        <a href="#"><span class="ion-ios-star"></span></a>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row mt-2">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('add_javascript')
    
@endsection