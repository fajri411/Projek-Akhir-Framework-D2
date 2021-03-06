<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tempat;

class TempatController extends Controller
{
    public function awal()
	{
		return view('tempat.awal', ['data'=>Tempat::all()]);
	}
	public function tambah()
	{
		return view('tempat.tambah');
	}	
	public function simpan(Request $input)
	{
		$this->validate($input,[
			'nama_tempat'=>'required',
			]);
		$tempat = new Tempat;
		$tempat->nama_tempat = $input->nama_tempat;
		$informasi = $tempat->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
		return redirect('tempat')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$tempat = Tempat::find($id);
		return view('tempat.edit')->with(array('tempat'=>$tempat));
	}
	public function lihat($id)
	{
		$tempat = Tempat::find($id);
		return view('tempat.lihat')->with(array('tempat'=>$tempat));
	}
	public function update($id, Request $input)
	{
		$tempat = Tempat::find($id);
		$tempat->nama_tempat = $input->nama_tempat;
		$informasi = $tempat->save() ? 'Berhasil update data' : 'Gagal update data';
		return redirect('tempat')->with(['informasi'=>$informasi]);
	}
	public function hapus($id)
	{
		$tempat = Tempat::find($id);
		$informasi = $tempat->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
		return redirect('tempat')->with(['informasi'=>$informasi]);
	}

}
