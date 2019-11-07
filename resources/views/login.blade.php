@extends('master_login')

@section('isi')
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/frens_bg_5.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form action="/login/masuk" class="login100-form validate-form" method="POST">
					@csrf
					<span class="login100-form-title p-b-59">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Wajib Diisi">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Wajib Diisi">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn">Login</div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>

						<a href="/daftar" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Daftar
							<i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
					</div>
                    <a href="/lupa_password" class="dis-block txt3 hov1 p-r-30 p-t-20 p-b-10 p-l-30 m-auto">
                        Lupa Password
                    </a>
				</form>
			</div>
		</div>
	</div>
@endsection	
