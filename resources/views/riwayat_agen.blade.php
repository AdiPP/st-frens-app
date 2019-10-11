@extends('master_layout')

@section('isi')
    <!-- END nav -->
    <div class="hero-wrap hero-bread" style="background-image: url('{{asset('images/frens_bg_3.jpg')}}');">
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
					<a href="{{asset($agen['path_foto'])}}" class="image-popup"><img src="{{asset($agen['path_foto'])}}" class="img-fluid" alt="Colorlib Template"></a>
				</div>
				<div class="col-lg-6 product-details pl-md-5 ftco-animate">
					<h3>{{$agen['nama']}}</h3>
					<div class="rating d-flex">
						<p class="text-left mr-4">
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
					<p>{{$agen['lokasi']}}</p>
					<div class="row mt-4 justify-content-around">
						<p><a href="" class="btn btn-primary btn-outline-primary py-3 px-5">Tolak Agen</a></p>
						<p><a href="" class="btn btn-primary py-3 px-5">Terima Agen</a></p>
					</div>
				</div>
			</div>
		</section>

	<section class="ftco-section testimony-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Testimoni</span>
					<h2 class="mb-4">Testimoni dari Franchisor</h2>
					<p>Berikut Komentar dari Franchisor terhadap Agen</p>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
            @foreach($testimonis as $testimoni)
						<div class="item">
							<div class="testimony-wrap p-4 pb-5">
								<div class="user-img mb-2" style="background-image: url({{asset($testimoni['path_foto'])}})">
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
									<span class="position">{{$testimoni['brand']}}</span>
								</div>
							</div>
            </div>	
            @endforeach				
          </div>					
				</div>
			</div>
		</div>
	</section>
@endsection	
