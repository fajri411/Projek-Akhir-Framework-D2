<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelatih extends Model
{
    protected $table = 'pelatih';
	protected $guarded = ['id'];
	
	public function pengguna(){
		return $this->belongsTo(Pengguna::class);
	}
	public function pelatih_olahraga(){
		return $this->hasMany(Pelatih_Olahraga::class);
	}
	public function getUsernameAttribute(){
	return $this->pengguna->username;
	}
	public function getLevelAttribute(){
	return $this->pengguna->level;
	}
	public function listPelatihDanNik()
    {
        $out = [];
        foreach ($this->all() as $plt)
        {
            $out[$plt->id] ="{$plt->nama_pelatih} ({$plt->nik})";
        }
        return $out;
    }
}

?>