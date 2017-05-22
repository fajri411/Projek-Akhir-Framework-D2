@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data jadwal Olahraga</strong>
			<a href="{{ url('jadwal_olahraga/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> jadwal Olahraga</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama Atlet</th>
									<th>NIK Atlet</th>
									<th>Nama Olahraga</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($semuaJadwalOlahraga as $pelo)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $pelo->atlet->nama_atlet or 'nama_atlet kosong'}}</td>
									<td>{{ $pelo->atlet->nik or 'nik kosong'}}</td>
									<td>{{ $pelo->pelatih_olahraga->olahraga->nama_olahraga or 'olahraga kosong'}}</td>
									<td>
										<div class="btn-group" role="group">
											<a href="{{url('jadwal_olahraga/edit/'.$pelo->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('jadwal_olahraga/'.$pelo->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('jadwal_olahraga/hapus/'.$pelo->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop