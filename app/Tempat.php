<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    protected $table = 'tempat';
	protected $fillable = ['nama_tempat'];

	public function jadwal_olahraga(){
	return $this->hasMany(Jadwal_Olahraga::class);
	}
}

?>