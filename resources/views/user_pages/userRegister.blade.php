<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<script src="{{ asset ('assets/js/jquery.js') }}"></script>
	<title>Daftar Akun</title>
</head>

<body>
	<div class="wave">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#39E27F" fill-opacity="1" d="M0,160L21.8,133.3C43.6,107,87,53,131,48C174.5,43,218,85,262,117.3C305.5,149,349,171,393,149.3C436.4,128,480,64,524,58.7C567.3,53,611,107,655,133.3C698.2,160,742,160,785,144C829.1,128,873,96,916,117.3C960,139,1004,213,1047,208C1090.9,203,1135,117,1178,90.7C1221.8,64,1265,96,1309,106.7C1352.7,117,1396,107,1418,101.3L1440,96L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path></svg>
	</div>
	<div class="container">
		<div class="row jarak">
			<div class="col">
				<h2 class="text-center" >Intelligenz Struktur Test</h2>
                <img class="ukuran-gambar" src="{{ asset ('assets/image/image02.png') }}" alt="logo">
			</div>
			<div class="col">
				<form method="POST" action="{{ route ('sendData') }}">
                    @csrf
					<div class="form-group">
						<label for="user">Nama Lengkap</label>
						<input id="user" class="form-control @error('namaLengkap') is-invalid @enderror" type="text" name="namaLengkap" value="{{ old('namaLengkap') }}" >
						@error('namaLengkap')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{ old('email') }}">
						@error('email')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
                    </div>
					<div class="form-group">
						<label for="pass">Password</label>
						<input id="pass" class="form-control @error('password') is-invalid @enderror" type="password" name="password" value="{{ old('password') }}" >
						@error('password')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<label for="show">Show Password</label>
						<input id="show" type="checkbox" name="show">
					</div>
					<div class="form-group ">
						<input id="submitLogin" class="form-control" type="submit" name="daftar" value='Daftar'>
					</div>
					<div class="form-group ">
						<a href="{{ route ('view.login')}}" id="submitDaftar" class="form-control text-center ">Login</a>
					</div>			
				</form>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			$('#show').click(function () {
				if ($(this).is(':checked')) {
					$('#pass').attr('type', 'text');
				} else {
					$('#pass').attr('type', 'password');
				}
			});
			
		});
	</script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>