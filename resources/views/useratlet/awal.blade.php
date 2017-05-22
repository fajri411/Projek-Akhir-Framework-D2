@extends('masteruser')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Atlet </strong>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> NIK </th>
				<th> Nama Praktikan </th>
				<th> Jenis Kelamin </th>
				<th> Alamat </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach($semuaAtlet as $atlet)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $atlet->nik or 'nik kosong' }}</td>
					<td>{{ $atlet->nama_atlet or 'nama_atlet kosong' }}</td>
					<td>{{ $atlet->jenis_kelamin or 'jenis_kelamin kosong' }}</td>
					<td>{{ $atlet->alamat or 'alamat kosong' }}</td>
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('useratlet/'.$atlet->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop