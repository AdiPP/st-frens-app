@extends('master_layout')

@section('isi')
    <!-- END nav -->

    <section id="home-section" class="hero">
		<div class="hero-wrap hero-bread" style="background-image: url('{{asset('images/frens_bg_3.jpg')}}')">
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center">
					<div class="col-md-9 ftco-animate text-center">
						<h1 class="mb-0 bread">PASSION OF CHOCOLATE</h1>
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
			<div class="row text-center">
				<!-- Product Sejumlah 12  -->
				<div class="mx-auto">
					<canvas id="myChart" width="800" height="500"></canvas>
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
					<p>Perbandingan pemesanan perkota bulan lalu</p>
				</div>
			</div>
			<div class="row text-center">
				<!-- Product Sejumlah 12  -->
				<div class="mx-auto">
					<canvas id="myChart2" width="800" height="500"></canvas>
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
									<th>Tanggal Pemesanan</th>
									<th>Lokasi</th>
									<th>Harga</th>
									<th>Kuantitas</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr class="text-center">
									
									<td class="image-prod"><div class="img" style="background-image:url(images/product-1.jpg);"></div></td>
									
									<td class="product-name">
										<h3>Ananda Arief</h3>
										<p>Bubuk Coklat</p>
									</td>
									<td>
										<p>17 Oktober 2019</p>
									</td>
									<td>
										<p>SEMARANG</p>
									</td>
									
									<td class="price">Rp. 5.000</td>
									
									<td class="quantity">
										2
									</td>
									
									<td class="total">Rp. 10.000</td>
								</tr><!-- END TR-->
							</tbody>
						</table>
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
			</div>
		</section>
@endsection	

@section('add_javascript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>	
<script>
	var ctx = document.getElementById('myChart').getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July','Maret','April'],
			datasets: [{
				label: 'My First Dataset',
				data: [12, 19, 3, 5, 2, 3,5,1,0],
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

	var ctx2 = document.getElementById('myChart2').getContext('2d');
	var myChart2 = new Chart(ctx2, {
		type: 'bar',
		data: {
			labels: ['Semarang', 'jakarta', 'Bandung', 'Purwokerto', 'Cilacap'],
			datasets: [{
				label: 'Data Set 1',
				data: [6, 1, 4, 2, 1],
				backgroundColor: '#82ae4666',
				borderColor: '#82ae46',
				borderWidth: 1
			}]
		}
	});
</script>
@endsection