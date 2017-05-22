@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('userpelatih_olahraga') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data Pelatih Olahraga</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama Pelatih</td>
						<td>:</td>
						<td>{{ $pelatih_olahraga->pelatih->nama_pelatih }}</td>
				</tr>
				<tr>
						<td>Nik Pelatih</td>
						<td>:</td>
						<td>{{ $pelatih_olahraga->pelatih->nik }}</td>
				</tr>
				<tr>
						<td>Nama Olahraga</td>
						<td>:</td>
						<td>{{ $pelatih_olahraga->olahraga->nama_olahraga }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$pelatih_olahraga->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$pelatih_olahraga->updated_at}}</td>
				</tr>
		</table>
</div>
@stop