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
					<div class="row mt-2"><p>
						@if($brand['status']=='Menunggu Konfirmasi')
							<a href="" class="btn btn-primary py-3 px-5">Menuggu Konfirmasi</a>
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
					@foreach($brand['produk'] as $produk)
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="product">
							<a href="#" data-toggle="modal" data-nama-produk="{{$produk['nama_produk']}}" data-path-foto-produk="{{asset($produk['path_foto_produk'])}}" data-harga-produk="{{$produk['harga_produk']}}" data-deskripsi-produk="{{$produk['deskripsi_produk']}}" data-target="#detilProdukModal" onclick="sendData(this)" class="img-prod"><img class="img-fluid" src="{{asset($produk['path_foto_produk'])}}" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3 text-center">
								<h3><a href="#">{{$produk['nama_produk']}}</a></h3>
								<div>{{$produk['harga_produk']}}</div>
								<div class="bottom-area d-flex px-3">
									<div class="m-auto d-flex">
										<a onclick="pesanPaket({{$produk['id_paket']}},{{session('id_agen')}})" class="buy-now d-flex justify-content-center align-items-center mx-1">
											<span><i class="ion-ios-cart"></i></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					@csrf
				</div>
				<div id="containerAlert">
					<!-- <form action="{{route('post_pesan_paket',['id_brand'=>$brand['id_produk']])}}" method="post">
						<input type="hidden" name="id_paket" value="1">
						<input type="hidden" name="id_agen" value="{{session('id_agen')}}">
						<input type="hidden" name="status" value="Menunggu Konfirmasi">
						<input type="submit" value="Masukan Nilai">
					</form> -->
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

		function pesanPaket(id_paket,id_agen) {
			let formData = new FormData();
			formData.append('id_paket', id_paket);
			formData.append('id_agen', id_agen);
			formData.append('status', 'Keranjang');
			formData.append('_token', $("[name='_token']").val());

			fetch("{{route('post_pesan_paket',['id_brand'=>$brand['id_produk']])}}",
				{
					body: formData,
					method: "post"
				}).then(()=>{
					$('#containerAlert').html($('#containerAlert').html()+`<div class="alert alert-success alert-dismissible fade show " role="alert">
						Sukses menambah ke <a href="/pemesanan" class="alert-link">Keranjang</a>.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>`)
					setTimeout(() => {
						$('.alert').alert('close')
					}, 5000);
				})
		} 
	</script>
@endsection