@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data Pelatih</strong>
			<a href="{{ url('pelatih/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> Pelatih</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th> No. </th>
									<th> NIK </th>
									<th> Nama Pelatih </th>
									<th> Jenis Kelamin </th>
									<th> Alamat </th>
									<th> Aksi </th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1;?>
								@foreach ($semuaPelatih as $pelatih)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $pelatih->nik or 'nik kosong' }}</td>
									<td>{{ $pelatih->nama_pelatih or 'nama_atlet kosong' }}</td>
									<td>{{ $pelatih->jenis_kelamin or 'jenis_kelamin kosong' }}</td>
									<td>{{ $pelatih->alamat or 'alamat kosong' }}</td>
									<td>
										<div class="btn-group" role-"group">
											<a href="{{url('pelatih/edit/'.$pelatih->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('pelatih/'.$pelatih->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('pelatih/hapus/'.$pelatih->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop