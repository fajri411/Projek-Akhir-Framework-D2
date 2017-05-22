<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atlet extends Model
{
    protected $table = 'atlet';
	
	public function pengguna(){
		return $this->belongsTo(Pengguna::class);
	}
	public function jadwal_olahraga(){
		return $this->hasMany(Jadwal_Olahraga::class);
	}
	public function prestasi(){
		return $this->hasMany(Prestasi::class);
	}
	public function getUsernameAttribute(){
	return $this->pengguna->username;
	}
	public function getLevelAttribute(){
	return $this->pengguna->level;
	}
	public function listAtletDanNIK(){
		$out = [];
		foreach ($this->all() as $prn) {
			$out[$prn->id] = "{$prn->nama_atlet} ({$prn->nik})";
		}
		return $out;
	}
}
