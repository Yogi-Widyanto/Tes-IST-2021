<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<script src="{{ asset ('assets/js/jquery.js') }}"></script>
	<title>Tes IST 2021</title>
</head>

<body>
    <div class="wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#39E27F" fill-opacity="1" d="M0,256L21.8,250.7C43.6,245,87,235,131,213.3C174.5,192,218,160,262,144C305.5,128,349,128,393,122.7C436.4,117,480,107,524,133.3C567.3,160,611,224,655,213.3C698.2,203,742,117,785,96C829.1,75,873,117,916,128C960,139,1004,117,1047,133.3C1090.9,149,1135,203,1178,186.7C1221.8,171,1265,85,1309,64C1352.7,43,1396,85,1418,106.7L1440,128L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path>
        </svg>
    </div>
	<div class="container">
		<div class="row jarak">
			<div class="col">            
				<h2 class="text-center" >Intelligenz Struktur Test</h2>
                <img class="ukuran-gambar" src="{{ asset ('assets/image/image01.png') }}" alt="logo">
			</div>
			<div class="col">
				@if (session('eror-1'))
                    <h4>Tes akan tersedia pada {{ session('eror-1') }}</h4>
                @else
                    <h4>Tes Sudah Tidak Tersedia Lagi</h4>
                @endif
				
				<br>
				<a class="btn btn-danger mt-3" href="{{route('logout')}}">Keluar</a>
			</div>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>