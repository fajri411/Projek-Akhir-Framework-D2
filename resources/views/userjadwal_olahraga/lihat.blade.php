@extends('masteruser')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('userjadwal_olahraga')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Jadwal Olahraga</strong>

	</div>
	<table class="table">
			
			<tr>
				<td>Nama Atlet</td>
				<td>:</td>
				<td>{{ $jadwal_olahraga->atlet->nama_atlet }}</td>
			</tr>
			<tr>
				<td>NIK Atlet</td>
				<td>:</td>
				<td>{{ $jadwal_olahraga->atlet->nim}}</td>
			</tr>
			<tr>
				<td>Nama Matakul Praktikum</td>
				<td>:</td>
				<td>{{ $jadwal_olahraga->olahraga->nama_olahraga }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $jadwal_olahraga->created_at }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Diperbarui tanggal </td>
				<td class="col-xs-1">:</td>
				<td>{{ $jadwal_olahraga->updated_at }}</td>
			</tr>
	</table>
</div>
@stop