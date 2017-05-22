<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelatih_Olahraga extends Model
{
    protected $table = 'pelatih_olahraga';
    protected $fillable = ['pelatih_id','olahraga_id'];

    public function pelatih()
    {
    	return $this->belongsTo(Pelatih::class);
    }
    public function jadwal_olahraga()
    {
    	return $this->hasMany(Jadwal_Olahraga::class);
    }
    public function Olahraga()
    {
    	return $this->belongsTo(Olahraga::class);
    }
    public function listPelatihDanOlahraga()
    {
        $out = [];
        foreach ($this->all() as $pltolg)
        {
            $out[$pltolg->id] ="{$pltolg->pelatih->nama_pelatih} (olahraga{$pltolg->olahraga->nama_olahraga})";
        }
        return $out;
    }
}

?>