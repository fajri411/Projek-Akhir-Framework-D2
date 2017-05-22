<div class="form-group">
	<label class="col-sm-2 control-label" id="nik">NIK</label>
	<div class="col-sm-10">
		{!! Form::text('nik',null,['class'=>'form-control','id'=>'nik','placeholder'=>"NIK"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="nama_atlet">Nama Atlet</label>
	<div class="col-sm-10">
		{!! Form::text('nama_atlet',null,['class'=>'form-control','id'=>'nama_atlet','placeholder'=>"Nama Atlet"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="jenis_kelamin">Jenis Kelamin</label>
	<div class="col-sm-10">
	<select name="jenis_kelamin" class="form-control">
	<option value="laki">laki-laki</option>
	<option value="cewe">perempuan</option>
	</select>
		
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat">Alamat</label>
	<div class="col-sm-10">
		{!! Form::textarea('alamat',null,['class'=>'form-control','id'=>'alamat','placeholder'=>"Alamat"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
		{!! Form::password('password',['class'=>'form-control','type'=>"Password",'placeholder'=>"Password"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Level</label>
	<div class="col-sm-10">
		<select name="jenis_kelamin" class="form-control">
	<option value="admin">Admin</option>
	<option value="user">User</option>
	</select>
	</div>	
</div>