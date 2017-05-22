<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['olahraga_id','kategori_olahraga'];

	public function olahraga()
    {
    	return $this->belongsTo(Olahraga::class);
    }
}

?>