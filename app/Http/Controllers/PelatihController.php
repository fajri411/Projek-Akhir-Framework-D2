<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pelatih;
use App\Pengguna;

class PelatihController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
	//public function awal()
	//{
		//return view('mahasiswa.awal', ['semuaMahasiswa'=>Mahasiswa::all()]);
	//}
	public function awal() {
		$semuaPelatih = Pelatih::all();
		return view('pelatih.awal',compact("semuaPelatih"));
	}
	public function pelatihawal()
	{
		$semuaAtlet =Pelatih::all();
		return view('useratlet.awal',compact('semuaPelatih'));
	}
	
	public function tambah() {
		return view('pelatih.tambah');
	}
	public function simpan(Request $input) {
		$this->validate($input,[
			'nik'=>'required',
			'nama_pelatih'=>'required',
			'jenis_kelamin'=>'required',
			'alamat'=>'required',
			'username'=>'required',
			'password'=>'required',
			'level'=>'required',
			]);
		$pengguna = new Pengguna($input->only('username','password','level'));
		if ($pengguna->save()) {
			$pelatih = new pelatih;
			$pelatih->nik = $input->nik;
			$pelatih->nama_pelatih = $input->nama_pelatih;
			$pelatih->jenis_kelamin = $input->jenis_kelamin;
			$pelatih->alamat = $input->alamat;
			if ($pengguna->pelatih()->save($pelatih)) 
				$this->informasi = 'Berhasil Simpan Data';

		}	
		return redirect('pelatih')->with(['informasi' => $this->informasi]);
	}
	public function edit($id)
	{
		$pelatih = pelatih::find($id);
		return view('pelatih.edit')->with(array('pelatih'=>$pelatih));
	}
	public function lihat($id)
	{
		$pelatih = pelatih::find($id);
		return view('pelatih.lihat')->with(array('pelatih'=>$pelatih));
	}
		public function atletlihat($id)
	{
		$pelatih = pelatih::find($id);
		return view('userpelatih.lihat')->with(array('pelatih'=>$pelatih));
	}
	public function update($id, Request $input)
	{
		$pelatih = pelatih::find($id);
			$pelatih->nik = $input->nik;
			$pelatih->nama_pelatih = $input->nama_pelatih;
			$pelatih->jenis_kelamin = $input->jenis_kelamin;
			$pelatih->alamat = $input->alamat;
			$pelatih->save();
		if(!is_null($input->username)){
			$pengguna = $pelatih->pengguna->fill($input->only('username'));	
		if(!empty($input->password)) $pengguna->password = $input->password;
		if(!empty($input->level)) $pengguna->level = $input->level;
		if($pengguna->save()) $this->informasi = 'Berhasil Simpan Data';
		}else{
			$this->informasi = 'Berhasil simpan data';
		}
		return redirect('pelatih')->with(['informasi' => $this->informasi]);
	}
	public function hapus($id)
	{
		$pelatih = pelatih::find($id);
		if($pelatih->pengguna()->delete()){
			if($pelatih->delete()) $this->informasi = 'Berhasil Update Data';
		}
		return redirect('pelatih')->with(['informasi'=> $this->informasi]);

}
}
