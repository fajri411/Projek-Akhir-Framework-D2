<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Olahraga extends Model
{
    protected $table = 'jadwal_Olahraga';
    protected $fillable = ['atlet_id','tempat_id','pelatih_olahraga_id'];

	public function atlet()
    {
    	return $this->belongsTo(Atlet::class);
    }
    public function pelatih_olahraga()
    {
    	return $this->belongsTo(Pelatih_Olahraga::class);
    }
     public function tempat()
    {
    	return $this->belongsTo(Tempat::class);
    }
}

?>