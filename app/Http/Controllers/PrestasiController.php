<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Prestasi;
use App\Atlet;

class PrestasiController extends Controller
{
   protected $informasi = 'Gagal Melakukan Aksi';
   public function awal()
   {
      $semuaPrestasi =Prestasi::all();
      return view('prestasi.awal',compact("semuaPrestasi"));
   }
   public function prestasiawal()
   {
      $semuaPrestasi =Prestasi::all();
      return view('userprestasi.awal',compact('semuaPrestasi'));
   }
   public function tambah()
   {
      $atlet = new Atlet;
      $prestasi = new Prestasi;
      return view('prestasi.tambah', compact('atlet','prestasi'));
   }
   public function simpan(Request $input) 
   {
      $this->validate($input,[
         'atlet_id'=>'required',
         'prestasi_atlet'=>'required',
         ]);
      $prestasi = new Prestasi($input->only('prestasi_atlet','atlet_id'));


      if($prestasi->save()) $this->informasi = "Prestasi Berhasil Disimpan";
      return redirect('prestasi')->with(['informasi' => $this->informasi]);
   }
   public function lihat($id)
   {
      $prestasi = Prestasi::find($id);
      return view('prestasi.lihat',compact("prestasi"));
   }
   public function prestasilihat($id)
   {
      $prestasi = Prestasi::find($id);
      return view('userprestasi.lihat',compact("prestasi"));
   }
   public function edit($id)
   {
      $prestasi = Prestasi::find($id);
      $atlet = new Atlet;
      return view('prestasi.edit', compact('atlet','prestasi'));
   }
   public function update($id, Request $input) 
   {
      $prestasi = Prestasi::find($id);
      $prestasi->fill($input->only('prestasi_atlet','atlet_id'));
      if($prestasi->save()) $this->informasi = "Prestasi Berhasil Diperbarui";
      return redirect('prestasi')->with(['informasi' => $this->informasi]);
   }
   public function hapus($id,Request $input)
   {
      $prestasi = Prestasi::find($id);
      if($prestasi->delete()) $this->informasi = "Prestasi Berhasil Dihapus";
      return redirect('prestasi')->with(['informasi' => $this->informasi]);
   }
}
