@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('atlet')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Atlet</strong>

	</div>
	<table class="table">
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td>{{ $atlet->nikatlet}}</td>
			</tr>
			<tr>
				<td>Nama Atlet</td>
				<td>:</td>
				<td>{{ $atlet->nama_atlet }}</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>{{ $atlet->jenis_kelamin }}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>{{ $atlet->alamat }}</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>{{ $atlet->pengguna->username }}</td>
			</tr>
			
			<tr>
				<td>Level</td>
				<td>:</td>
				<td>{{ $atlet->pengguna->level }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $atlet->created_at }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Diperbarui tanggal </td>
				<td class="col-xs-1">:</td>
				<td>{{ $atlet->updated_at }}</td>
			</tr>
	</table>
</div>
@stop