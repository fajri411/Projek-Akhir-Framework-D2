<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('page_title','Halaman Utama') | Project Akhir Praktikum Framework</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">

		<style type="text/css">
				
				body {
		padding-top: 70px;
        padding-bottom: 70px;
        background-image: url({{asset('gambar/lab4.jpg')}});;
        }
    .starter-template {
        padding: 40px 15px;
        text-align: center;
        }
    .form-horizontal {
        padding: 15px 10px;
    }   
    footer {
        padding-top: 15px;
        text-align: right;
    }
    .navbar-inverse {
        background-color: #000000;
        border-color: #000000;

	}

		</style>

</head>
<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>	
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
		<a class="navbar-brand" href="{{url('/')}}"> SISTEM INFORMASI ATLET BINA OLAHRAGA BUSAM </a>		
				</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown active">
		<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Pengguna <span class="caret"></span></a>	
			<ul class="dropdown-menu" aria-labelledby="dLabel">
				<li><a href="{{url('pengguna')}}"> Admin dan User</a></li>
				<li><a href="{{url('atlet')}}"> Data Atlet</a></li>
				<li><a href="{{url('pelatih')}}"> Data Pelatih</a></li>
				<!-- <li><a href="{{url('praktikum')}}"> Data Praktikum</a></li>
				<li><a href="{{url('praktikan_praktikum')}}"> Data Praktikan Praktikum</a></li> -->
				<!-- <li class="divider"></li>
				<li><a href="{{url('jadwal_matakuliah')}}"> Jadwal Mahasiswa </a></li>	 -->
			</ul>	
				</li>
				<li class="dropdown active">
		<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Data Olahraga <span class="caret"></span></a>	
			<ul class="dropdown-menu" aria-labelledby="dLabel">
			<li><a href="{{url('olahraga')}}"> Data Olahraga</a></li>
			<li><a href="{{url('tempat')}}"> Data Tempat Olahraga</a></li>
			<li><a href="{{url('kategori')}}"> Data Kategori</a></li>
			<li><a href="{{url('prestasi')}}"> Data Prestasi</a></li>
			</ul>	
				</li>
				<li class="dropdown active">
		<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Jadwal Olahraga <span class="caret"></span></a>	
			<ul class="dropdown-menu" aria-labelledby="dLabel">
				<li><a href="{{url('pelatih_olahraga')}}"> Data Pelatih Olahraga</a></li>
				<li><a href="{{url('jadwal_olahraga')}}"> Data Jadwal Olahraga</a></li>
			</ul>	
				</li>
				<li class="dropdown active">
		<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Pengaturan Akun <span class="caret"></span></a>	
			<ul class="dropdown-menu" aria-labelledby="dLabel">
				
				<li><a href="{{url('logout')}}"> Logout</a></li>	
			</ul>	
				</li>
				<!-- <li>
				<a href="{{url('logout')}}"> Logout</a>
				</li>		 -->	
			</ul>	
		</div><!--/.nav-collapse -->		
			</div>	
		</nav>
		<div class="clearfix"></div>
		<div class="container">
			@if (Session::has('informasi'))
			<div class="alert alert-info">
				<strong>Informasi :</strong> {{Session::get('informasi')}}
			</div>	
		@endif
			@if(count(Session::get('errors')) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach(Session::get('errors')->all() as $error)
						<li>{{ $error }}</li>
					@endforeach	
				</ul>
			</div>
			@endif
			@yield('container')	
		</div>
		<nav class="navbar navbar-default navbar-fixed-bottom">
		<footer class="container">
			<!-- Please dont delete this -->
			created by <a href="https://twitter.com/triasbrata"><span><i class="fa fa-twitter" style="color:#1da1f2"></i> @triasbrata </span></a>
			<!--/ Please dont delete this -->
		</footer>	
		</nav>
		<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript">
			$(function() {
				$('[data-toggle="tooltip"]').tooltip()
			});	
			}
			</script>	
</body>
</html>	
