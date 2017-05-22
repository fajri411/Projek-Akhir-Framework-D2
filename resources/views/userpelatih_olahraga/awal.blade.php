@extends('masteruser')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Pelatih Olahraga </strong>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama Pelatih </th>
				<th> NIK Pelatih </th>
				<th> Nama Olahraga</th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach($semuaPelatihOlahraga as $pelo)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $pelo->pelatih->nama_pelatih or 'nama_pelatih kosong' }}</td>
					<td>{{ $pelo->pelatih->nik or 'nik kosong' }}</td>
					<td>{{ $pelo->olahraga->nama_olahraga or 'nama_olahraga kosong' }}</td>
					<td>
						<a href="{{url('userpelatih_olahraga/'.$pelo->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop