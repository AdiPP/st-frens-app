@extends('master_layout')

@section('isi')
	@php
	if (file_exists(public_path('storage/'.$produk['foto_produk']))) {
		$produkPath = asset('storage/'.$produk['foto_produk']);
	} else $produkPath = asset('storage/default/noImage.jpeg');
	@endphp
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
					<a href="{{asset($produkPath)}}" class="image-popup"><img src="{{asset($produkPath)}}" class="img-fluid" alt="Colorlib Template"></a>
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

					<form action="/produk/update" method="post">
						{{ csrf_field() }}
						<input type="hidden" name="idProduk" value="{{ $produk->id_produk }}"> <br/>
						<p>Lokasi : </p>
						<div class="form-group">
							<div class="select-wrap">
								<div class="icon"><span class="ion-ios-arrow-down"></span></div>
								<select name="" id="" class="form-control">
									<option value="" checked>PURWOKERTO</option>
								</select>
							</div>
						</div>
						<p>Kontak : </p>
						<p class="price">
							<div class="input-group">
								{{-- <input id="msg" type="text" class="form-control mx-4" name="harga" placeholder="Harga" value="{{$brand['kontak']}}"> --}}
								<input id="msg" type="number" class="form-control" name="handphone" placeholder="Kontak" value="{{$produk['no_hp']}}">
							</div>
						</p>
						<p>Deskripsi : </p>
						<div class="form-group">
							<textarea name="deskProduk" style="height: auto !important; text-align: left;" id="" cols="30" rows="7" class="form-control" placeholder="Message">{{$produk['deskripsi']}}</textarea>
						</div>
						<div class="d-flex justify-content-center">
							<div class="col-6">
								<input type="submit" class="btn btn-primary w-100 text-center" value="UBAH">
							</div>
							<div class="col-6">
								<a href="#" class="btn btn-secondary w-100 text-center disabled">NONAKTIFKAN</a>
							</div>
						</div>
					</form>
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
				<div class="row justify-content-end mb-3 mx-3">
					<button class="btn btn-primary " data-target="#tambahProduk" data-toggle="modal">+ Tambah Paket</button>
				</div>
				<div class="row">
					@foreach($pakets as $paket)
					@php
						if (file_exists(public_path('storage/'.$paket['foto_paket']))) {
							$paketPath = asset('storage/'.$paket['foto_paket']);
						} else $paketPath = asset('storage/default/noImage.jpeg');
					@endphp
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="product">
							<a href="#" data-toggle="modal" data-nama-produk="{{$paket['nama_paket']}}" data-path-foto-produk="{{ $paketPath }}" data-harga-produk="{{$paket['harga']}}" data-deskripsi-produk="{{$paket['deskripsi_paket']}}" data-target="#detilProdukModal" onclick="sendData(this)" class="img-prod"><img class="img-fluid" src="{{ $paketPath }}" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3 text-center">
								<h3><a href="#">{{$paket['nama_paket']}}</a></h3>
								<div>{{$paket['harga']}}</div>
								<div class="bottom-area d-flex px-3">
									<div class="m-auto d-flex">
										<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
											<span><i class="ion-ios-cart"></i></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>

		<div class="modal fade" id="tambahProduk">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">

				<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Tambah Paket</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<form action="/paket/store" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}
						<input type="hidden" name="idProduk" value="{{$produk['id_produk']}}">
						<div class="modal-body">
							<div class="column align-items-end">
								<div class="col-md-12">
									<div class="form-group">
										<label for="firstname">Nama Paket</label>
										<input type="text" required class="form-control" placeholder="Nama Paket" name="namaPaket">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="firstname">Foto Paket</label>
										<input type="file" required class="form-control" placeholder="" name="fotoPaket">
										<p>Ukuran Foto 500x500</p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="lastname">Harga Paket</label>
										<input type="number" required  class="form-control" placeholder="Harga" name="hargaPaket">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="lastname">Deskripsi Paket</label>
										<textarea required  class="form-control" placeholder="Deskripsi" name="deskPaket"></textarea>
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

		{{-- <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">Agen</span>
						<h2 class="mb-4">Agen-Agen</h2>
						<p>Daftar agen yang tertarik Untuk terhadap produk ini</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					@foreach($agens as $agen)
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="product">
							<a href="/riwayat_agen/{{$agen['id_agen']}}" class="img-prod"><img class="img-fluid" src="{{asset($agen['path_foto'])}}" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3 text-center">
								<h3><a href="#">{{$agen['nama']}}</a></h3>
								<p>{{$agen['lokasi']}}</p>
								<div class="d-flex ">
									<div class="rating d-flex m-auto">
										<p class="text-center">
										@if($agen['bintang'] == 0)
											<a href="#" class="mr-2">0</a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
										@elseif($agen['bintang'] == 0.5)
											<a href="#" class="mr-2">0.5</a>
											<a href="#"><span class="ion-ios-star-half"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
										@elseif($agen['bintang'] == 1)
											<a href="#" class="mr-2">1</a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
										@elseif($agen['bintang'] == 1.5)
											<a href="#" class="mr-2">1.5</a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star-half"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
										@elseif($agen['bintang'] == 2)
											<a href="#" class="mr-2">2</a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
										@elseif($agen['bintang'] == 2.5)
											<a href="#" class="mr-2">2.5</a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star-half"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
										@elseif($agen['bintang'] == 3)
											<a href="#" class="mr-2">3</a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
										@elseif($agen['bintang'] == 3.5)
											<a href="#" class="mr-2">3.5</a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star-half"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
										@elseif($agen['bintang'] == 4)
											<a href="#" class="mr-2">4</a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
										@elseif($agen['bintang'] == 4.5)
											<a href="#" class="mr-2">4.5</a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star"></span></a>
											<a href="#"><span class="ion-ios-star-half"></span></a>
										@else
											<a href="#" class="mr-2">5</a>
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
