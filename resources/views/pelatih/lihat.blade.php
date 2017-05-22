@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('pelatih') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data pelatih</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama</td>
						<td>:</td>
						<td>{{ $pelatih->nama_pelatih }}</td>
				</tr>
				<tr>
						<td>NIK</td>
						<td>:</td>
						<td>{{ $pelatih->nik }}</td>
				</tr>
				<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>{{ $pelatih->alamat }}</td>
				</tr>

				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$pelatih->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$pelatih->updated_at}}</td>
				</tr>
		</table>
</div>
@stop