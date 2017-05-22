<div class="form-group">
	<label class="col-sm-2 control-label" id="pelatih_id">Pelatih</label>
	<div class="col-sm-10">
		{!! Form::select('pelatih_id',$pelatih->listPelatihDanNik(),null,['class'=>'form-control','id'=>'pelatih_id','placeholder'=>"Pelatih"]) !!}
		</div>
	</div>
<div class="form-group">
		<label class="col-sm-2 control-label" id="olahraga_id"> Olahraga</label>
		<div class="col-sm-10">
			{!! Form::select('olahraga_id',$olahraga->listOlahraga(),null,['class'=>'form-control','id'=>'olahraga_id','placeholder'=>"Olahraga"]) !!}
		</div>
	</div>
