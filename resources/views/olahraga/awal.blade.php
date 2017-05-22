@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data Olahraga</strong>
			<a href="{{ url('olahraga/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> Olahraga</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama Olahraga</th>
									<th>Keterangan</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1;?>
								@foreach ($data as $olahraga)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $olahraga->nama_olahraga or 'nama_olahraga kosong'}}</td>
									<td>{{ $olahraga->keterangan or 'keterangan kosong'}}</td>
									<td>
										<div class="btn-group" role-"group">
											<a href="{{url('olahraga/edit/'.$olahraga->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('olahraga/'.$olahraga->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('olahraga/hapus/'.$olahraga->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop