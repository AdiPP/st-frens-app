@extends('master_layout')

@section('isi')
    <!-- END nav -->
    <div class="hero-wrap hero-bread" style="background-image: url('{{asset('images/frens_bg_5.jpg')}}');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-0 bread">Pemesanan</h1>
				</div>
			</div>
		</div>
	</div>

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
										@if($riwayat->status=='Menuggu Konfirmasi')
											<a href="{{route('konfirmasi_pemesanan',['id_pemesanan'=>$riwayat->id_pesan,'jawaban'=>'Terima'])}}" class="btn btn-primary">Terima</a>
											<a href="{{route('konfirmasi_pemesanan',['id_pemesanan'=>$riwayat->id_pesan,'jawaban'=>'Tolak'])}}" class="btn btn-primary btn-outline-primary">Tolak</a>
										@else
										{{$riwayat->status}}
										@endif
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
		</section>
	
@endsection	

@section('add_javascript')
<script>
	function updateKuantitas(e) {
		var harga = e.dataset.harga;
		var kuantitas = e.value;
		console.log(harga);
		console.log(kuantitas);
		document.getElementById("totalKeranjang").innerHTML = harga*kuantitas;

	}
</script>
@endsection