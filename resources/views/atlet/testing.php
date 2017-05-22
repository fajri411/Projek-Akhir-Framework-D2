
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Foundation | Welcome</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel='stylesheet' type='text/css'>
 
</head>
<body>
 
<a href="http://zurb.com/article/1470/the-new-foundation-docs-learn-your-way" class="docs-banner grid-banner">
<div class="info row">
<h5 class="columns small-10 small-centered"><strong>✨ Meet the New Foundation Docs: 3 Ways to Learn ✨</strong></h5>
</div>
</a>
 
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-2195009-2', 'auto');
      ga('send', 'pageview');

      ga('create', 'UA-2195009-27', 'auto', {name: "foundation"});
      ga('foundation.send', 'pageview');

    </script>
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
		 
<div class="top-bar">
<div class="top-bar-left">		<li class="dropdown active">
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
		
</div>
</div>
 
<div class="callout large primary">
<div class="row column text-center">
<h1>Our Blog</h1>
<h2 class="subheader">Such a Simple Blog Layout</h2>
</div>
</div>
 		<a class="navbar-brand" href="{{url('/')}}"> SISTEM INFORMASI ATLET BINA OLAHRAGA BUSAM </a>		
				</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
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
			</html>
