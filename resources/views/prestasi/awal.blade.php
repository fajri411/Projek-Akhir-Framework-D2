@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data Prestasi</strong>
			<a href="{{ url('prestasi/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> Prestasi</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Prestasi Atlet</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1;?>
								@foreach ($semuaPrestasi as $prestasi)
									<tr>
									<td>{{ $x++ }}</td>
									<!-- <td>{{ $prestasi->atlet_id or 'atlet_id kosong'}}</td> -->
									<td>{{ $prestasi->prestasi_atlet or 'prestasi_atlet kosong'}}</td>
									<td>
										<div class="btn-group" role-"group">
											<a href="{{url('prestasi/edit/'.$prestasi->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('prestasi/'.$prestasi->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('prestasi/hapus/'.$prestasi->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop