<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Olahraga;
use App\Kategori;

class OlahragaController extends Controller
{
     public function awal()
    {
    	return view('olahraga.awal', ['data'=>Olahraga::all()]);
    }
    public function tambah()
    {
    	return view('olahraga.tambah');
    }
    public function simpan(Request $input)
    {
    	$olahraga = new Olahraga;
    	$olahraga->nama_olahraga = $input->nama_olahraga;
        $olahraga->keterangan = $input->keterangan;
        $informasi = $olahraga->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    	return redirect('olahraga')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $olahraga = Olahraga::find($id);
        return view('olahraga.edit')->with(array('olahraga'=>$olahraga));
    }
    public function lihat($id)
    {
        $olahraga = Olahraga::find($id);
        return view('olahraga.lihat')->with(array('olahraga'=>$olahraga));
    }
    public function update($id, Request $input)
    {
        $olahraga = Olahraga::find($id);
        $olahraga->nama_olahraga = $input->nama_olahraga;
        $olahraga->keterangan = $input->keterangan;
        $informasi = $olahraga->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('olahraga')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $olahraga = Olahraga::find($id);
        $informasi = $olahraga->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('olahraga')->with(['informasi'=>$informasi]);
    }

}
