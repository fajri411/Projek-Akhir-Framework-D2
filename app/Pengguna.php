<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
    protected $table = 'pengguna';
	protected $fillable = ['username','password','level'];
	
	public function atlet(){
		return $this->hasOne(Atlet::class);
	}
	public function pelatih(){
		return $this->hasOne(Pelatih::class);
	}
}

?>