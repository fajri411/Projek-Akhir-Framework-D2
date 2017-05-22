<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Olahraga extends Model
{
    protected $table = 'olahraga';
    protected $fillable = ['nama_olahraga','keterangan'];

    public function pelatih_olahraga()
    {
    	return $this->hasMany(Pelatih_Olahraga::class);
    }
    public function kategori()
    {
    	return $this->hasMany(Kategori::class);
    }
    public function listOlahraga()
    {
        $out = [];
        foreach ($this->all() as $olg)
        {
            $out[$olg->id] ="{$olg->nama_olahraga}";
        }
        return $out;
}
}
?>