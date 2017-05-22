<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Hello-World',function(){ 
	return 'Hello World';
});

Route::get('/login','PenggunaSesiController@form');
Route::post('/login','PenggunaSesiController@validasi');
Route::get('/logout','PenggunaSesiController@logout');
Route::get('/','PenggunaSesiController@index');

Route::group(['middleware' => 'AutentifikasiUser'], function () {

	// Pengguna
	Route::get('pengguna','PenggunaController@awal');
	Route::get('pengguna/tambah','PenggunaController@tambah');
	Route::get('pengguna/hapus','PenggunaController@hapus');
	Route::get('pengguna/{pengguna}','penggunaController@lihat');
	// Route::get('pengguna/{pengguna}','PenggunaController@lihat');
	Route::post('pengguna/simpan','PenggunaController@simpan');
	Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
	Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
	Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');
	// Pelatih
	Route::get('pelatih','PelatihController@awal');
	Route::get('pelatih/tambah','PelatihController@tambah');
	Route::get('pelatih/hapus','PelatihController@hapus');
	Route::get('pelatih/{pelatih}','PelatihController@lihat');
	Route::post('pelatih/simpan','PelatihController@simpan');
	Route::get('pelatih/edit/{pelatih}','PelatihController@edit');
	Route::post('pelatih/edit/{pelatih}','PelatihController@update');
	Route::get('pelatih/hapus/{pelatih}','PelatihController@hapus');
	// Atlet
	Route::get('atlet','AtletController@awal');
	Route::get('atlet/tambah','AtletController@tambah');
	Route::get('atlet/hapus','AtletController@hapus');
	Route::get('atlet/{atlet}','AtletController@lihat');
	Route::post('atlet/simpan','AtletController@simpan');
	Route::get('atlet/edit/{atlet}','AtletController@edit');
	Route::post('atlet/edit/{atlet}','AtletController@update');
	Route::get('atlet/hapus/{atlet}','AtletController@hapus');
	// olahraga
	Route::get('olahraga','OlahragaController@awal');
	Route::get('olahraga/tambah','OlahragaController@tambah');
	Route::get('olahraga/hapus','OlahragaController@hapus');
	Route::get('olahraga/{olahraga}','OlahragaController@lihat');
	Route::post('olahraga/simpan','OlahragaController@simpan');
	Route::get('olahraga/edit/{olahraga}','OlahragaController@edit');
	Route::post('olahraga/edit/{olahraga}','OlahragaController@update');
	Route::get('olahraga/hapus/{olahraga}','OlahragaController@hapus');
	//Pelatih_Olahraga
	Route::get('pelatih_olahraga','Pelatih_OlahragaController@awal');
	Route::get('pelatih_olahraga/tambah','Pelatih_OlahragaController@tambah');
	Route::get('pelatih_olahraga/hapus','Pelatih_OlahragaController@hapus');
	Route::get('pelatih_olahraga/{pelatih_olahraga}','Pelatih_OlahragaController@lihat');
	Route::post('pelatih_olahraga/simpan','Pelatih_OlahragaController@simpan');
	Route::get('pelatih_olahraga/edit/{pelatih_olahraga}','Pelatih_OlahragaController@edit');
	Route::post('pelatih_olahraga/edit/{pelatih_olahraga}','Pelatih_OlahragaController@update');
	Route::get('pelatih_olahraga/hapus/{pelatih_olahraga}','Pelatih_OlahragaController@hapus');
	
	// Tempat
	Route::get('tempat','TempatController@awal');
	Route::get('tempat/tambah','TempatController@tambah');
	Route::get('tempat/hapus','TempatController@hapus');
	Route::get('tempat/{tempat}','TempatController@lihat');
	Route::post('tempat/simpan','TempatController@simpan');
	Route::get('tempat/edit/{tempat}','TempatController@edit');
	Route::post('tempat/edit/{tempat}','TempatController@update');
	Route::get('tempat/hapus/{tempat}','TempatController@hapus');

	// Jadwal_Olahraga
	Route::get('jadwal_olahraga','Jadwal_OlahragaController@awal');
	Route::get('jadwal_olahraga/tambah','Jadwal_OlahragaController@tambah');
	Route::get('jadwal_olahraga/hapus','Jadwal_OlahragaController@hapus');
	Route::get('jadwal_olahraga/{jadwal_olahraga}','Jadwal_OlahragaController@lihat');
	Route::post('jadwal_olahraga/simpan','Jadwal_OlahragaController@simpan');
	Route::get('jadwal_olahraga/edit/{jadwal_olahraga}','Jadwal_OlahragaController@edit');
	Route::post('jadwal_olahraga/edit/{jadwal_olahraga}','Jadwal_OlahragaController@update');
	Route::get('jadwal_olahraga/hapus/{jadwal_olahraga}','Jadwal_OlahragaController@hapus');

	// Kategori
	Route::get('kategori','KategoriController@awal');
	Route::get('kategori/tambah','KategoriController@tambah');
	Route::get('kategori/hapus','KategoriController@hapus');
	Route::get('kategori/{kategori}','KategoriController@lihat');
	Route::post('kategori/simpan','KategoriController@simpan');
	Route::get('kategori/edit/{kategori}','KategoriController@edit');
	Route::post('kategori/edit/{kategori}','KategoriController@update');
	Route::get('kategori/hapus/{kategori}','KategoriController@hapus');

	// Prestasi
	Route::get('prestasi','PrestasiController@awal');
	Route::get('prestasi/tambah','PrestasiController@tambah');
	Route::get('prestasi/hapus','PrestasiController@hapus');
	Route::get('prestasi/{prestasi}','PrestasiController@lihat');
	Route::post('prestasi/simpan','PrestasiController@simpan');
	Route::get('prestasi/edit/{prestasi}','PrestasiController@edit');
	Route::post('prestasi/edit/{prestasi}','PrestasiController@update');
	Route::get('prestasi/hapus/{prestasi}','PrestasiController@hapus');

	// User Atlet
	Route::get('useratlet','AtletController@atletawal');
	Route::get('useratlet/{atlet}','AtletController@atletlihat');
	
	// User Olahraga
	Route::get('userolahraga','OlahragaController@olahragaawal');
	Route::get('userolahraga/{olahraga}','OlahragaController@olahragalihat');

	// User Pelatih_Olahraga
	Route::get('userpelatih_olahraga','Pelatih_OlahragaController@pelatiholahragaawal');
	Route::get('userpelatih_olahraga/{pelatih_olahraga}','Pelatih_OlahragaController@pelatiholahragalihat');

	// User Jadwal_Olahraga
	Route::get('userjadwal_olahraga','Jadwal_OlahragaController@jdwlolgaawal');
	Route::get('userjadwal_olahraga/{jadwal_olahraga}','jadwal_olahragaController@jdwlolgalihat');

});    
//});





Route::get('ujiHas','RelationshipRebornController@ujiHas');
Route::get('ujiDoesntHave','RelationshipRebornController@ujiDoesntHave');

// Route::get('/',function(){
// 	return \App\Dosen_Matakuliah::whereHas('dosen',function($query){
// 		$query->where('alamat','like','%m%');
// 	})->with('dosen')->groupBy('dosen_id')->get();
// });

// Route::get('/',function (Illuminate\Http\Request $request) {
// 	echo "ini adalah request dari method get ". $request->nama;
// });

// use Illuminate\Http\Request;
// Route::get('/',function () {
// 	echo Form::open(['url'=>'/']).
// 		 Form::label('nama').
// 		 Form::text('nama',null).
// 		 Form::submit('kirim').
// 		 Form::close();
// });
// Route::post('/',function (Request $request) {
// 	echo "Hasil dari form input tadi nama : ".$request->nama;
// });
