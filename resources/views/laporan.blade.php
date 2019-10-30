@extends('master_layout')

@section('isi')
    <!-- END nav -->

    <section id="home-section" class="hero">
		<div class="hero-wrap hero-bread" style="background-image: url('images/frens_bg_3.jpg');">
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center">
					<div class="col-md-9 ftco-animate text-center">
						<h1 class="mb-0 bread">Laporan</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="ftco-section" id="katalog">
		<div class="container">	
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Laporan Umum</span>
					<h2 class="mb-4">Grafik Pemesanan antar Brand</h2>
					<p>Perbandingan pemesanan secara keseluruhan antara brand anda</p>
				</div>
			</div>
			<div class="row text-center">
				<!-- Product Sejumlah 12  -->
				<div class="mx-auto">
					<canvas id="myChart" width="500" height="500"></canvas>
				</div>
				
			</div>
		</div>
	</section>

    {{-- <section class="ftco-section" id="katalog">
		<div class="container">	
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Laporan Detil</span>
					<h2 class="mb-4">Grafik Pemesanan Bulanan Brand</h2>
					<p>Detail laporan pemesanan brand anda</p>
				</div>
			</div>
			<div class="row">

				<!-- Product Sejumlah 12  -->

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="FrensDetail.html" class="img-prod"><img class="img-fluid" src="images/frens_product_1.jpg" alt="Colorlib Template">
							<!-- <span class="status">30%</span> -->
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="FrensDetail.html" class="text-primary font-weight-bold">Passion of Chocolate</a></h3>
							<div class="d-flex ">
								<div class="rating d-flex m-auto">
									<p class="text-center">
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star-half"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid" src="images/frens_product_2.jpg" alt="Colorlib Template">
							<!-- <span class="status">30%</span> -->
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#" class="text-primary font-weight-bold">King Coklat</a></h3>
							<div class="d-flex ">
								<div class="rating d-flex m-auto">
									<p class="text-center">
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star"></span></a>
										<a href="#"><span class="ion-ios-star-half"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>	
<script>
	var url = window.location.origin+'/laporan/getData';
	fetch(url)
		.then((res)=>{return res.json()})
		.then((data)=>{
			var ctx = document.getElementById('myChart').getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'doughnut',
				data: {
					labels: data['produks'],
					datasets: [{
						label: '# of Votes',
						data: data['pemesanan'],
						backgroundColor: data['bgColor'],
						borderColor: data['brColor'],
						borderWidth: 1
					}]
				}
			});
		})
</script>
@endsection