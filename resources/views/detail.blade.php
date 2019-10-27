@extends('master_layout')

@section('isi')
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url({{asset('images/frens_bg_3.jpg')}});">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-0 bread">{{$brand['nama_brand']}}</h1>
				</div>
			</div>
		</div>
	</div>

    <section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-5 ftco-animate">
					<a href="{{$brand['path_foto_brand']}}" class="image-popup"><img src="{{asset($brand['path_foto_brand'])}}" class="img-fluid" alt="Colorlib Template"></a>
				</div>
				<div class="col-lg-6 product-details pl-md-5 ftco-animate">
					<h3>{{$brand['nama_brand']}}</h3>
					<div class="rating d-flex">
						<p class="text-left mr-4">
							@if($brand['bintang'] == 0)
								<a href="#" class="mr-2">0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							@elseif($brand['bintang'] == 0.5)
								<a href="#" class="mr-2">0.5</a>									
								<a href="#"><span class="ion-ios-star-half"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							@elseif($brand['bintang'] == 1)
								<a href="#" class="mr-2">1</a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							@elseif($brand['bintang'] == 1.5)
								<a href="#" class="mr-2">1.5</a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star-half"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							@elseif($brand['bintang'] == 2)
								<a href="#" class="mr-2">2</a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							@elseif($brand['bintang'] == 2.5)
								<a href="#" class="mr-2">2.5</a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star-half"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							@elseif($brand['bintang'] == 3)
								<a href="#" class="mr-2">3</a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							@elseif($brand['bintang'] == 3.5)
								<a href="#" class="mr-2">3.5</a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star-half"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							@elseif($brand['bintang'] == 4)
								<a href="#" class="mr-2">4</a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							@elseif($brand['bintang'] == 4.5)
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
					<p>{{$brand['lokasi']}}</p>
					<p class="price"><span>{{$brand['harga']}}</span></p>
					<p>{{$brand['kontak']}}</p>
					<p>{{$brand['deskripsi']}}</p>
					<div class="row mt-4">
						<p><a href="/login" class="btn btn-primary py-3 px-5">Jadi Agen</a></p>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">Produk</span>
						<h2 class="mb-4">Paket</h2>
						<p>Paket yang tersedia dari brand ini</p>
					</div>
				</div>   		
			</div>
			<div class="container">
				<div class="row">
					@foreach($brand['produk'] as $produk)
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="product">
							<a href="#" data-toggle="modal" data-nama-produk="{{$produk['nama_produk']}}" data-path-foto-produk="{{asset($produk['path_foto_produk'])}}" data-harga-produk="{{$produk['harga_produk']}}" data-deskripsi-produk="{{$produk['deskripsi_produk']}}" data-target="#detilProdukModal" onclick="sendData(this)" class="img-prod"><img class="img-fluid" src="{{asset($produk['path_foto_produk'])}}" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3 text-center">
								<h3><a href="#">{{$produk['nama_produk']}}</a></h3>
								<div>{{$produk['harga_produk']}}</div>
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

	{{-- <section class="ftco-section testimony-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Testimoni</span>
					<h2 class="mb-4">Testimoni Agen Kami</h2>
					<p>Berikut Komentar dari Agen-Agen terhadap produk ini</p>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						@foreach($testimonis as $testimoni)
						<div class="item">
							<div class="testimony-wrap p-4 pb-5">
								<div class="user-img mb-2" style="background-image: url('{{asset($testimoni['path_foto'])}}')">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="d-flex ">
									<div class="rating d-flex m-auto">
										<p class="text-center">
											@if($testimoni['bintang'] == 0)
												<a href="#" class="mr-2">0</a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
											@elseif($testimoni['bintang'] == 0.5)
												<a href="#" class="mr-2">0.5</a>									
												<a href="#"><span class="ion-ios-star-half"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
											@elseif($testimoni['bintang'] == 1)
												<a href="#" class="mr-2">1</a>
												<a href="#"><span class="ion-ios-star"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
											@elseif($testimoni['bintang'] == 1.5)
												<a href="#" class="mr-2">1.5</a>
												<a href="#"><span class="ion-ios-star"></span></a>
												<a href="#"><span class="ion-ios-star-half"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
											@elseif($testimoni['bintang'] == 2)
												<a href="#" class="mr-2">2</a>
												<a href="#"><span class="ion-ios-star"></span></a>
												<a href="#"><span class="ion-ios-star"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
											@elseif($testimoni['bintang'] == 2.5)
												<a href="#" class="mr-2">2.5</a>
												<a href="#"><span class="ion-ios-star"></span></a>
												<a href="#"><span class="ion-ios-star"></span></a>
												<a href="#"><span class="ion-ios-star-half"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
											@elseif($testimoni['bintang'] == 3)
												<a href="#" class="mr-2">3</a>
												<a href="#"><span class="ion-ios-star"></span></a>
												<a href="#"><span class="ion-ios-star"></span></a>
												<a href="#"><span class="ion-ios-star"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
											@elseif($testimoni['bintang'] == 3.5)
												<a href="#" class="mr-2">3.5</a>
												<a href="#"><span class="ion-ios-star"></span></a>
												<a href="#"><span class="ion-ios-star"></span></a>
												<a href="#"><span class="ion-ios-star"></span></a>
												<a href="#"><span class="ion-ios-star-half"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
											@elseif($testimoni['bintang'] == 4)
												<a href="#" class="mr-2">4</a>
												<a href="#"><span class="ion-ios-star"></span></a>
												<a href="#"><span class="ion-ios-star"></span></a>
												<a href="#"><span class="ion-ios-star"></span></a>
												<a href="#"><span class="ion-ios-star"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
											@elseif($testimoni['bintang'] == 4.5)
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
								<div class="text text-center">
									<p class="mb-5 pl-4 line">{{$testimoni['deskripsi']}}</p>
									<p class="name">{{$testimoni['nama']}}</p>
									<span class="position">{{$testimoni['lokasi']}}</span>
								</div>
							</div>
						</div>	
						@endforeach			
					</div>								
				</div>
			</div>
		</div>
	</section> --}}


	{{-- <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Products</span>
					<h2 class="mb-4">Franchise Serupa</h2>
					<p>Atau Anda Tertarik Untuk Melihat Produk - Produk Serupa</p>
				</div>
			</div>   		
		</div>
		<div class="container">
			<div class="row">
				@foreach($brandSerupa as $brand)
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid" src="{{asset($brand['path_foto'])}}" alt="Colorlib Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">{{$brand['nama_brand']}}</a></h3>
							<div class="d-flex ">
								<div class="rating d-flex m-auto">
									<p class="text-center">							
									@if($brand['bintang'] == 0)
										<a href="#" class="mr-2">0</a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
									@elseif($brand['bintang'] == 0.5)
										<a href="#" class="mr-2">0.5</a>									
										<a href="#"><span class="ion-ios-star-half"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
									@elseif($brand['bintang'] == 1)
										<a href="#" class="mr-2">1</a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
									@elseif($brand['bintang'] == 1.5)
										<a href="#" class="mr-2">1.5</a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star-half"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
									@elseif($brand['bintang'] == 2)
										<a href="#" class="mr-2">2</a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
									@elseif($brand['bintang'] == 2.5)
										<a href="#" class="mr-2">2.5</a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star-half"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
									@elseif($brand['bintang'] == 3)
										<a href="#" class="mr-2">3</a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
									@elseif($brand['bintang'] == 3.5)
										<a href="#" class="mr-2">3.5</a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star-half"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
									@elseif($brand['bintang'] == 4)
										<a href="#" class="mr-2">4</a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
									@elseif($brand['bintang'] == 4.5)
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