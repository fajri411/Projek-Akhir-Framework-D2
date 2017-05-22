<div class="form-group">
	<label class="col-sm-2 control-label" id="atlet_id">Atlet</label>
	<div class="col-sm-10">
		{!! Form::select('atlet_id',$atlet->listAtletDanNik(),null,['class'=>'form-control','id'=>'atlet_id','placeholder'=>"Atlet"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="pelatih_olahraga_id"> Olahraga</label>
		<div class="col-sm-10">
			{!! Form::select('pelatih_olahraga_id',$pelatih_olahraga->listPelatihDanOlahraga(),null,['class'=>'form-control','id'=>'pelatih_olahraga_id','placeholder'=>"Olahraga"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="tempat_id"> Tempat</label>
		<div class="col-sm-10">
			{!! Form::select('tempat_id',$tempat->lists('nama_tempat','id'),null,['class'=>'form-control','id'=>'tempat_id','placeholder'=>"Tempat"]) !!}
		</div>
	</div>
	