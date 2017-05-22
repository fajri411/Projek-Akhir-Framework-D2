<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table = 'prestasi';
    protected $fillable = ['atlet_id','prestasi_atlet'];

	public function atlet()
    {
    	return $this->belongsTo(Atlet::class);
    }
}

?>