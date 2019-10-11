@extends('master_layout')

@section('isi')
    <!-- END nav -->

    <section id="home-section" class="hero">
		<div class="hero-wrap hero-bread" style="background-image: url('{{asset('images/frens_bg_3.jpg')}}');">
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
					<span class="subheading">Brand</span>
					<h2 class="mb-4">Daftar Agen dari Franchise</h2>
					<p>Detail agen dari brand anda</p>
				</div>
			</div>
			<div class="row">

				<!-- Product Sejumlah 12  -->

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="/agen/1" class="img-prod"><img class="img-fluid" src="{{asset('images/blank_login.png')}}" alt="Colorlib Template">
							<!-- <span class="status">30%</span> -->
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="FrensDetail.html" class="text-primary font-weight-bold">Asad Hamdani</a></h3>
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
    		<div class="row mt-5">
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