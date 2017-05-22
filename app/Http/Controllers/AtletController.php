<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Atlet;
use App\Pengguna;

class AtletController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
   //public function awal()
   //{
      //return view('mahasiswa.awal', ['semuaMahasiswa'=>Mahasiswa::all()]);
   //}
   public function awal() {
      $semuaAtlet = atlet::all();
      return view('atlet.awal',compact("semuaAtlet"));
   }
   public function atletawal()
   {
      $semuaAtlet = atlet::all();
      return view('useratlet.awal',compact('semuaAtlet'));
   }
   public function tambah() {
      return view('atlet.tambah');
   }
   public function simpan(Request $input) {
      $this->validate($input,[
         'nik'=>'required',
         'nama_atlet'=>'required',
         'jenis_kelamin'=>'required',
         'alamat'=>'required',
         'username'=>'required',
         'password'=>'required',
         'level'=>'required',
         ]);
      $pengguna = new Pengguna($input->only('username','password','level'));
      if ($pengguna->save()) {
         $atlet = new atlet;
         $atlet->nik = $input->nik;
         $atlet->nama_atlet = $input->nama_atlet;
         $atlet->jenis_kelamin = $input->jenis_kelamin;
         $atlet->alamat = $input->alamat;
         if ($pengguna->atlet()->save($atlet)) 
            $this->informasi = 'Berhasil Simpan Data';

      }  
      return redirect('atlet')->with(['informasi' => $this->informasi]);
   }
   public function edit($id)
   {
      $atlet = atlet::find($id);
      return view('atlet.edit')->with(array('atlet'=>$atlet));
   }
   public function lihat($id)
   {
      $atlet = atlet::find($id);
      return view('atlet.lihat')->with(array('atlet'=>$atlet));
   }
      public function atletlihat($id)
   {
      $atlet = atlet::find($id);
      return view('useratlet.lihat')->with(array('atlet'=>$atlet));
   }
   public function update($id, Request $input)
   {
      $atlet = atlet::find($id);
         $atlet->nik = $input->nik;
         $atlet->nama_atlet = $input->nama_atlet;
         $atlet->jenis_kelamin = $input->jenis_kelamin;
         $atlet->alamat = $input->alamat;
         $atlet->save();
      if(!is_null($input->username)){
         $pengguna = $atlet->pengguna->fill($input->only('username'));   
      if(!empty($input->password)) $pengguna->password = $input->password;
      if(!empty($input->level)) $pengguna->level = $input->level;
      if($pengguna->save()) $this->informasi = 'Berhasil Simpan Data';
      }else{
         $this->informasi = 'Berhasil simpan data';
      }
      return redirect('atlet')->with(['informasi' => $this->informasi]);
   }
   public function hapus($id)
   {
      $atlet = atlet::find($id);
      if($atlet->pengguna()->delete()){
         if($atlet->delete()) $this->informasi = 'Berhasil Update Data';
      }
      return redirect('atlet')->with(['informasi'=> $this->informasi]);

}
}
