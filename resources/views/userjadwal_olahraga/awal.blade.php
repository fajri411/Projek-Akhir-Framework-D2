@extends('masteruser')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Jadwal Olahraga </strong>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama Atlet </th>
				<th> NIK Atlet</th>
				<th> Nama Olahraga</th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach($semuaJadwalOlahraga as $jwlolg)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $jwlolg->atlet->nama_atlet or 'nama_atlet kosong' }}</td>
					<td>{{ $jwlolg->atlet->nik or 'nik kosong' }}</td>
					<td>{{ $jwlolg->olahraga->nama_olahraga or 'nama_olahraga kosong' }}</td>
					<td>
						<a href="{{url('userjadwal_olahraga/'.$jwlolg->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop