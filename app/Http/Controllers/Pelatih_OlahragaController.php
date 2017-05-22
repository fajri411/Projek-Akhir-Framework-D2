<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pelatih;
use App\Jadwal_Olahraga;
use App\Olahraga;
use App\Pelatih_Olahraga;

class Pelatih_OlahragaController extends Controller
{
   protected $guarded =['id'];

   protected $informasi = 'Gagal melakukan aksi';
  
   public function awal()
   {
    $semuaPelatihOlahraga = pelatih_olahraga::all();
      return view('pelatih_olahraga.awal', compact('semuaPelatihOlahraga'));
   }
   public function pelatiholahragaawal()
   {
    $semuaPelatihOlahraga = pelatih_olahraga::all();
      return view('userpelatih_olahraga.awal', compact('semuaPelatihOlahraga'));
   }
   public function tambah()
   {
      $pelatih = new Pelatih;
      $olahraga = new Olahraga;
    return view('pelatih_olahraga.tambah', compact('pelatih','olahraga'));
   }
   public function simpan(Request $input)
   {
    $pelatih_olahraga = new pelatih_olahraga($input->only('pelatih_id','olahraga_id'));
    if($pelatih_olahraga->save()) $this->informasi = "Pelatih Olahraga berhasil disimpan ";
      return redirect('pelatih_olahraga')->with(['informasi' => $this->informasi]);
   }
   public function lihat($id)
   {
      $pelatih_olahraga = pelatih_olahraga::find($id);
      return view('pelatih_olahraga.lihat',compact('pelatih_olahraga'));
   }
   public function pelatiholahragalihat($id)
   {
      $pelatih_olahraga = pelatih_olahraga::find($id);
      return view('userpelatih_olahraga.lihat',compact('pelatih_olahraga'));
   }
   public function edit($id)
   {
      $pelatih_olahraga = pelatih_olahraga::find($id);
      $pelatih = new Pelatih;
      $olahraga = new Olahraga;
      return view('pelatih_olahraga.edit',compact('pelatih','olahraga'));
   }
   public function update($id,Request $input)
   {
      $pelatih_olahraga = pelatih_olahraga::find($id);
      $pelatih_olahraga->fill($input->only('pelatih_id','olahraga_id'));
      if($pelatih_olahraga->save()) $this->informasi = "Pelatih Olahraga berhasil diperbarui";
      return redirect('pelatih_olahraga')->with(['informasi' => $this->informasi]);
   }
   public function hapus($id,Request $input)
   {
      $pelatih_olahraga = pelatih_olahraga::find($id);
      if($pelatih_olahraga->delete()) $this->informasi = "Pelatih Olahraga berhasil dihapus ";
      return redirect('pelatih_olahraga')->with(['informasi' => $this->informasi]);
   }
}
