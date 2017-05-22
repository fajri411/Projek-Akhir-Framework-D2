<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Kategori;
use App\Olahraga;

class KategoriController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
   public function awal()
   {
      $semuaKategori =Kategori::all();
      return view('kategori.awal',compact("semuaKategori"));
   }
   public function kategoriawal()
   {
      $semuaKategori =Kategori::all();
      return view('userkategori.awal',compact('semuaKategori'));
   }
   public function tambah()
   {
      $kategori = new Kategori;
      $olahraga = new Olahraga;
      return view('kategori.tambah', compact('olahraga','kategori'));
   }
   public function simpan(Request $input) 
   {
      $this->validate($input,[
         'kategori_olahraga'=>'required',
         'olahraga_id'=>'required',
         ]);
      $kategori = new Kategori($input->only('kategori_olahraga','olahraga_id'));


      if($kategori->save()) $this->informasi = "Kategori Berhasil Disimpan";
      return redirect('kategori')->with(['informasi' => $this->informasi]);
   }
   public function lihat($id)
   {
      $kategori = Kategori::find($id);
      return view('kategori.lihat',compact("kategori"));
   }
   public function kategorilihat($id)
   {
      $kategori = Kategori::find($id);
      return view('userkategori.lihat',compact("kategori"));
   }
   public function edit($id)
   {
      $kategori = Kategori::find($id);
      $olahraga = new Olahraga;
      return view('kategori.edit', compact('olahraga','kategori'));
   }
   public function update($id, Request $input) 
   {
      $kategori = Kategori::find($id);
      $kategori->fill($input->only('kategori_olahraga','olahraga_id'));
      if($kategori->save()) $this->informasi = "Kategori Berhasil Diperbarui";
      return redirect('kategori')->with(['informasi' => $this->informasi]);
   }
   public function hapus($id,Request $input)
   {
      $kategori = Kategori::find($id);
      if($kategori->delete()) $this->informasi = "Kategori Berhasil Dihapus";
      return redirect('kategori')->with(['informasi' => $this->informasi]);
   }
}
