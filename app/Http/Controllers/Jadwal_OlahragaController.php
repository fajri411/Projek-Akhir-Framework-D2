<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal_Olahraga;
use App\Atlet;
use App\Pelatih_Olahraga;
use App\Tempat;

class Jadwal_OlahragaController extends Controller
{
   protected $guarded =['id'];

   protected $informasi = 'Gagal melakukan aksi';
  
   public function awal()
   {
    $semuaJadwalOlahraga = jadwal_olahraga::all();
      return view('jadwal_olahraga.awal', compact('semuaJadwalOlahraga'));
   }
   public function jadwalolahragaawal()
   {
    $semuaJadwalOlahraga = jadwal_olahraga::all();
      return view('userjadwal_olahraga.awal', compact('semuaJadwalOlahraga'));
   }
   public function tambah()
   {
      $atlet = new atlet;
      $tempat = new tempat;
      $pelatih_olahraga = new pelatih_olahraga;
    return view('jadwal_olahraga.tambah', compact('atlet','tempat','pelatih_olahraga'));
   }
   public function simpan(Request $input)
   {
    $jadwal_olahraga = new jadwal_olahraga($input->only('tempat_id','pelatih_olahraga_id','atlet_id'));
    if($jadwal_olahraga->save()) $this->informasi = "Jadwal olahraga berhasil disimpan ";
      return redirect('jadwal_olahraga')->with(['informasi' => $this->informasi]);
   }
   public function lihat($id)
   {
      $jadwal_olahraga = jadwal_olahraga::find($id);
      return view('jadwal_olahraga.lihat',compact('jadwal_olahraga'));
   }
   public function jadwalolahragalihat($id)
   {
      $jadwal_olahraga = jadwal_olahraga::find($id);
      return view('userjadwal_olahraga.lihat',compact('jadwal_olahraga'));
   }
   public function edit($id)
   {
      $jadwal_olahraga = jadwal_olahraga::find($id);
      $atlet = new atlet;
      $tempat = new tempat;
      $pelatih_olahraga = new pelatih_olahraga;
      return view('jadwal_olahraga.edit',compact('atlet','tempat','pelatih_olahraga','jadwal_olahraga'));
   }
   public function update($id,Request $input)
   {
      $jadwal_olahraga = jadwal_olahraga::find($id);
      $jadwal_olahraga->fill($input->only('tempat_id','pelatih_olahraga_id','atlet_id'));
      if($jadwal_olahraga->save()) $this->informasi = "Jadwal olahraga berhasil diperbarui";
      return redirect('jadwal_olahraga')->with(['informasi' => $this->informasi]);
   }
   public function hapus($id,Request $input)
   {
      $jadwal_olahraga = jadwal_olahraga::find($id);
      if($jadwal_olahraga->delete()) $this->informasi = "Jadwal olahraga berhasil dihapus ";
      return redirect('jadwal_olahraga')->with(['informasi' => $this->informasi]);
   }
}
