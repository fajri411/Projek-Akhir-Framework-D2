@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('kategori') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data Kategori</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama Kategori</td>
						<td>:</td>
						<td>{{ $kategori->kategori_olahraga }}</td>
				</tr>
				<tr>
						<td>Olahraga</td>
						<td>:</td>
						<td>{{ $kategori->olahraga->nama_olahraga }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$kategori->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$kategori->updated_at}}</td>
				</tr>
		</table>
</div>
@stop