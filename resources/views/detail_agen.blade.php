@extends('master_layout')

@section('isi')
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url({{asset('images/frens_bg_3.jpg')}});">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-0 bread">{{$produk['nama_produk']}}</h1>
				</div>
			</div>
		</div>
	</div>

    <section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-5 ftco-animate">
					@php
					if (file_exists(public_path('storage/'.$produk['foto_produk']))) {
						$produkPath = asset('storage/'.$produk['foto_produk']);
					} else $produkPath = asset('storage/default/noImage.jpeg');
					@endphp
					<a href="{{$produkPath}}" class="image-popup"><img src="{{$produkPath}}" class="img-fluid" alt="Colorlib Template"></a>
				</div>
				<div class="col-lg-6 product-details pl-md-5 ftco-animate">
					<h3>{{$produk['nama_produk']}}</h3>
					<div class="rating d-flex">
						<p class="text-left mr-4">
							<a href="#" class="mr-2">5</a>
							<a href="#"><span class="ion-ios-star"></span></a>
							<a href="#"><span class="ion-ios-star"></span></a>
							<a href="#"><span class="ion-ios-star"></span></a>
							<a href="#"><span class="ion-ios-star"></span></a>
							<a href="#"><span class="ion-ios-star"></span></a>
						</p>
					</div>
					<p>{{$produk['alamat']}}</p>
					{{-- <p class="price"><span>{{$brand['harga']}}</span></p> --}}
					<p>{{$produk['no_hp']}}</p>
					<p>{{$produk['deskripsi']}}</p>
					<div class="row mt-2"><p>
						@php
							$partner = $partnership->where('id_agen', Session::get('user')->id_agen)->first();
						@endphp
						@if($partner != null)
							@if ($partnership->where('id_agen', Session::get('user')->id_agen)->where('id_produk', $produk['id_produk'])->first()->status == "Menunggu Konfirmasi")
								<a href="" class="btn btn-primary py-3 px-5">Menuggu Konfirmasi</a>
							@endif
						@else
							<a href="{{ url('/partnership/daftar/'.$produk['id_produk'].'/'.Session::get('user')->id_agen) }}" class="btn btn-primary py-3 px-5">Jadi Agen</a>
						@endif

					</p></div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">Paket</span>
						<h2 class="mb-4">Paket Yang Tersedia</h2>
						<p>Paket yang tersedia dari brand ini</p>
					</div>
				</div>   		
			</div>
			<div class="container">
				<div class="row">
					@foreach($pakets as $paket)
					@php
					if (file_exists(public_path('storage/'.$paket['foto_paket']))) {
						$paketPath = asset('storage/'.$paket['foto_paket']);
					} else $paketPath = asset('storage/default/noImage.jpeg');
					@endphp
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="product">
							<a href="#" data-toggle="modal" data-nama-produk="{{$paket['nama_paket']}}" data-path-foto-produk="{{$paketPath}}" data-harga-produk="{{$paket['harga']}}" data-deskripsi-produk="{{$paket['deskripsi_paket']}}" data-target="#detilProdukModal" onclick="sendData(this)" class="img-prod"><img class="img-fluid" src="{{$paketPath}}" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3 text-center">
								<h3><a href="#">{{$paket['nama_paket']}}</a></h3>
								<div>{{$paket['harga']}}</div>
								@if ($partner != null && $partnership->where('id_agen', Session::get('user')->id_agen)->where('id_produk', $produk['id_produk'])->first()->status == "Diterima")
									<div class="bottom-area d-flex px-3">
										<div class="m-auto d-flex">
											<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
												<span><i class="ion-ios-cart"></i></span>
											</a>
										</div>
									</div>
								@endif
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>

		<div class="modal fade" id="detilProdukModal">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">

				<!-- Modal Header -->
					<div class="modal-header">
						<h4 id="nama_produk_holder" class="modal-title"></h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<div class="column justify-content-center text-center">
							<img id="foto_produk_holder" class="w-25" src="" alt="Colorlib Template">
							<p id="harga_produk_holder" class="mt-4"></p>
							<p id="deskripsi_produk_holder" ></p>
						</div>
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-primary btn-outline-primary"  data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		{{-- <section class="ftco-section" id="katalog">
			<div class="container">	
				<div class="row justify-content-center mb-5 pb-3">
					<div class="col-md-7 heading-section ftco-animate text-center">
						<span class="subheading">Beri Testimoni</span>
						<h2 class="mb-4">Testimoni</h2>
						<p>Franchisor dapat memberi testimoni performa kepada agen</p>
					</div>
				</div>
				<div class="col">
					<div class="row align-items-end">
						<div class="col-md-12">
							<div class="form-group">
								<label for="country">Rating</label>
								<div class="select-wrap">
									<select name="" id="" class="form-control">
										<option value="">5</option>
										<option value="">4</option>
										<option value="">3</option>
										<option value="">2</option>
										<option value="">1</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="firstname">Testimoni</label>
								<textarea class="form-control" placeholder=""></textarea>
							</div>
							<div class="row justify-content-center">
								<button class="btn btn-primary">SUBMIT</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}


	
@endsection	

@section('add_javascript')
	<script>
		function sendData(e){
			document.getElementById('nama_produk_holder').innerHTML = e.dataset['namaProduk'];
			document.getElementById('foto_produk_holder').src = e.dataset['pathFotoProduk'];
			document.getElementById('harga_produk_holder').innerHTML = e.dataset['hargaProduk'];
			document.getElementById('deskripsi_produk_holder').innerHTML = e.dataset['deskripsiProduk'];
		}
	</script>
@endsection