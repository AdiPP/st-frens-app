@extends('master_login')

@section('isi')
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/frens_bg_5.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
					<span class="login100-form-title p-b-59">
						Daftar
					</span>

					<div class="container-login100-form-btn ">
						<div class="wrap-login100-form-btn m-l-r-auto m-b-50 ">
							<div class="login100-form-bgbtn"></div>
							<a href="/daftar_franchisor" class="login100-form-btn">
								sebagai Francisor
							</a>
						</div>
						<div class="wrap-login100-form-btn m-l-r-auto m-b-50">
							<div class="login100-form-bgbtn"></div>
							<a href="/daftar_agen" class="login100-form-btn">
								sebagai Agen
							</a>
						</div>
					</div>
			</div>
		</div>
	</div>
@endsection	
