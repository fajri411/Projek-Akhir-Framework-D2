@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('prestasi') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data prestasi</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama Prestasi</td>
						<td>:</td>
						<td>{{ $prestasi->prestasi_atlet }}</td>
				</tr>
				<tr>
						<td>Atlet</td>
						<td>:</td>
						<td>{{ $prestasi->atlet->nama_atlet }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$prestasi->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$prestasi->updated_at}}</td>
				</tr>
		</table>
</div>
@stop