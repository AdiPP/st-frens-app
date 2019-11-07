@extends('master_login')

@section('isi')
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/frens_bg_5.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form action="/daftar/store" class="login100-form validate-form" method="post" enctype="multipart/form-data">
					@csrf
					<input type="hidden" name="jabatan" value="franchisor">
					<span class="login100-form-title p-b-59">
						Daftar sebagai Franchisor
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Wajib Diisi">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="xyz@mail.com">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Wajib Diisi">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Wajib Diisi">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Wajib Diisi">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" name="name" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Wajib Diisi">
						<span class="label-input100">Nomor Telepon</span>
						<input class="input100" type="number" name="noTelepon" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Menerima File Gambar">
						<span class="label-input100">Foto KTP</span>
						<input class="input100" type="file" name="KTP" required placeholder="" accept="image/*">
					</div>

					<div class="wrap-input100 validate-input" data-validate="Menerima File Gambar">
						<span class="label-input100">Foto NPWP</span>
						<input class="input100" type="file" name="NPWP" required placeholder="" accept="image/*">
					</div>

					{{-- <div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="text" name="repeat-pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div> --}}

					{{-- <div class="wrap-input100 validate-input" data-validate="Menerima File Gambar">
						<span class="label-input100">Foto Diri</span>
						<input class="input100" type="file" name="foto_diri" placeholder="" accept="image/*">
					</div> --}}

					{{-- <div class="wrap-input100 validate-input" data-validate="Menerima File Gambar">
						<span class="label-input100">Kota</span>
						<select class="input100" name="" id="">
							<option value="purwokerto">PURWOKERTO</option>
							<option value="jabodetabek">JABODETABEK</option>
							<option value="semarang">SEMARANG</option>
						</select>
					</div> --}}


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								DAFTAR
							</button>
						</div>

						<a href="/login" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Kembali
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection	
