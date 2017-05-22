<div class="form-group">
	<label class="col-sm-2 control-label" id="kategori_olahraga">Kategori</label>
	<div class="col-sm-10">
		{!! Form::text('kategori_olahraga',null,['class'=>'form-control','id'=>'kategori_olahraga','placeholder'=>"Kategori"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="olahraga_id">Olahraga</label>
	<div class="col-sm-10">
		{!! Form::select('olahraga_id',$olahraga->lists('nama_olahraga','id'),null,['class'=>'form-control','id'=>'olahraga_id','placeholder'=>"Olahraga"]) !!}	
	</div>	
</div>