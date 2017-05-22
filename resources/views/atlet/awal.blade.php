@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data Atlet</strong>
			<a href="{{ url('atlet/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> Atlet</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th> No. </th>
									<th> NIK </th>
									<th> Nama Atlet </th>
									<th> Jenis Kelamin </th>
									<th> Alamat </th>
									<th> Aksi </th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1;?>
								@foreach ($semuaAtlet as $atlet)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $atlet->nik or 'nik kosong' }}</td>
									<td>{{ $atlet->nama_atlet or 'nama_atlet kosong' }}</td>
									<td>{{ $atlet->jenis_kelamin or 'jenis_kelamin kosong' }}</td>
									<td>{{ $atlet->alamat or 'alamat kosong' }}</td>
									<td>
										<div class="btn-group" role-"group">
											<a href="{{url('atlet/edit/'.$atlet->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('atlet/'.$atlet->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('atlet/hapus/'.$atlet->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop