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
				@foreach($agens as $agen)
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="product">
							<a href="{{route('lihat_daftar_agen_detail',['id_agen'=>$agen->id_agen])}}" class="img-prod"><img class="img-fluid" src="{{asset($agen->gambar_lokasi)}}" alt="Colorlib Template">
								<!-- <span class="status">30%</span> -->
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3 text-center">
								<h3><a href="FrensDetail.html" class="text-primary font-weight-bold">{{$agen->nama}}</a></h3>
								<div class="d-flex ">
									<div class="rating d-flex m-auto">
										<p class="text-center">
											@for($i=0;$i<5;$i++)
												@if($agen->bintang($agen->id_agen)-$i > 0)
												<a href="#"><span class="ion-ios-star"></span></a>
												@elseif($agen->bintang($agen->id_agen)-$i == -0.5)
												<a href="#"><span class="ion-ios-star-half"></span></a>
												@else
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												@endif
											@endfor
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
				
			</div>
    		<div class="row mt-5">
				<div class="col text-center">
					<div class="block-27">
						<ul>
							<li><a href="{{$agens->previousPageUrl()}}">&lt;</a></li>
							@for($i=1;$i<=$agens->lastPage();$i++)
								@if($i == $agens->currentPage())
									<a href="?page={{$i}}"><li class="active"><span>{{$i}}</span></li></a>
								@else
									<a href="?page={{$i}}"><li class=""><span>{{$i}}</span></li></a>
								@endif
							@endfor									
							<li><a href="{{$agens->nextPageUrl()}}">&gt;</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection	

@section('add_javascript')

@endsection