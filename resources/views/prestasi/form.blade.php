<div class="form-group">
	<label class="col-sm-2 control-label" id="prestasi_atlet">Prestasi</label>
	<div class="col-sm-10">
		{!! Form::text('prestasi_atlet',null,['class'=>'form-control','id'=>'prestasi_atlet','placeholder'=>"Prestasi"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="atlet_id">Atlet</label>
	<div class="col-sm-10">
		{!! Form::select('atlet_id',$atlet->lists('nama_atlet','id'),null,['class'=>'form-control','id'=>'atlet_id','placeholder'=>"Atlet"]) !!}	
	</div>	
</div>