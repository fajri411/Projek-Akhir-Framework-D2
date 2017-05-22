@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('olahraga') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data Olahraga</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama Olahraga</td>
						<td>:</td>
						<td>{{ $olahraga->nama_olahraga }}</td>
				</tr>
				<tr>
						<td>Keterangan</td>
						<td>:</td>
						<td>{{ $olahraga->keterangan }}</td>
				</tr>

				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$olahraga->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$olahraga->updated_at}}</td>
				</tr>
		</table>
</div>
@stop