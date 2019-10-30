@extends('master_layout')

@section('isi')
    <!-- END nav -->

	<section id="home-section" class="hero">
		<div class="hero-wrap hero-bread" style="background-image: url('{{asset('images/frens_bg_3.jpg')}}')">
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center">
					<div class="col-md-9 ftco-animate text-center">
						<h1 class="mb-0 bread">Agen</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	
    <section class="ftco-section" id="katalog">
		<div class="container">	
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Laporan Detail</span>
					<h2 class="mb-4">Grafik Pemesanan</h2>
					<p>Perbandingan pemesanan perbulan</p>
				</div>
			</div>
			<div class="row justify-content-center mb-5 pb-3">
				<form id="formUpdateTahun" method="get">
					<select required class="form-control" name="tahun" id="tahunSelect">
						@for($i=0;$i<5;$i++)
							<option value="{{date('Y')-$i}}">{{date('Y')-$i}}</option>
						@endfor
					</select>
					<input type="hidden" name="id_agen" id="id_agenHid" value="{{$agen->id_agen}}">
					<input type="submit" value="Tampilkan" class="btn btn-primary btn-outline-primary m-3">
				</form>
			</div>
			<div class="row text-center">
				<!-- Product Sejumlah 12  -->
				<div class="mx-auto">
					<canvas id="myChart" width="800" height="500"></canvas>
				</div>
				
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Pemesanan</span>
					<h2 class="mb-4">Riwayat Pemesanan</h2>
					<p>Daftar Pemesanan yang diminta Agen Anda</p>
				</div>
			</div>   		
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 ftco-animate">
					<div class="cart-list">
						<table class="table">
							<thead class="thead-primary">
								<tr class="text-center">
									<th>Pemesanan</th>
									<th>&nbsp;</th>
									<th>Alamat Pengiriman</th>
									<th>Tanggal</th>
									<th>Harga</th>
									<th>Kuantitas</th>
									<th>Total</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								@forelse($riwayats as $riwayat)
								<tr class="text-center">
									
									<td class="image-prod"><div class="img" style="background-image:url('{{asset($riwayat->paket->foto_paket)}}');"></div></td>
									
									<td class="product-name">
										<h3>{{$riwayat->agen->nama}}</h3>
										<p>{{$riwayat->paket->nama_paket}}</p>
									</td>
									<td>
										<p>{{$riwayat->alamat_detil}}</p>
									</td>
									<td>
										<p>{{date('d M Y',strtotime($riwayat->tanggal))}}</p>
									</td>
									
									<td class="price">{{$riwayat->paket->harga}}</td>
									
									<td class="quantity">
										{{$riwayat->jumlah}}
									</td>
									
									<td class="total">{{$riwayat->jumlah*$riwayat->paket->harga}}</td>
									<td class="Aksi">
										{{$riwayat->status}}
									</td>
								</tr><!-- END TR-->

								@empty
									<tr class="text-center">
										<td colspan=7>Tidak ada Riwayat</td>
									</tr>
								@endforelse
							</tbody>
						</table>
					</div>
					<div class="row mt-2">
						<div class="col text-center">
							<div class="block-27">
								<ul>
									<li><a href="{{$riwayats->previousPageUrl()}}">&lt;</a></li>
									@for($i=1;$i<=$riwayats->lastPage();$i++)
										@if($i == $riwayats->currentPage())
											<a href="?page={{$i}}"><li class="active"><span>{{$i}}</span></li></a>
										@else
											<a href="?page={{$i}}"><li class=""><span>{{$i}}</span></li></a>
										@endif
									@endfor									
									<li><a href="{{$riwayats->nextPageUrl()}}">&gt;</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>	
<script>
	fetch("{{route('get_data_yearly',['tahun'=>date('Y'),'id_agen'=>$agen->id_agen])}}")
		.then((res)=>{return res.json()})
		.then((data)=>{
		console.log(data)
		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July','Agustus','September','Oktober','November','Desember'],
				datasets: [{
					label: 'Pemesanan',
					data: data,
					backgroundColor:
						'#82ae4666'
					,
					borderColor: 
						'#82ae46'
					,
					borderWidth: 1
				}]
			},
			options:{
				scales: {
					yAxes: [{
						display: true,
						stacked: true,
						ticks: {
							min: 0, // minimum value
						}
					}]
				}
			}
		});
	})
	
	document.getElementById("formUpdateTahun").addEventListener("submit", function(event){
		event.preventDefault()
		var tahunPilih = ($('#tahunSelect').val())
		var id_agen = ($('#id_agenHid').val())
		var url = window.location.origin+'/agen/'+id_agen+'/getData/'+tahunPilih
		fetch(url)
		.then((res)=>{return res.json()})
		.then((data)=>{
		console.log(data)
		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July','Agustus','September','Oktober','November','Desember'],
				datasets: [{
					label: 'Pemesanan',
					data: data,
					backgroundColor:
						'#82ae4666'
					,
					borderColor: 
						'#82ae46'
					,
					borderWidth: 1
				}]
			}
		});
	})

	});
	
</script>
@endsection