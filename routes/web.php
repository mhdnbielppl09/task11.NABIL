<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AnggotaController;

use App\Http\Controllers\PengarangController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;

use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasantriController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Assalamu'alaikum Sobat, Selamat Belajar Laravel PeTIK Jombang Gen-Z";
});

Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi) {
    return 'Nama Pegawai : '.$nama. '<br/>Departemen : '.$divisi;
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/Santri',[SantriController::class, 'dataSantri']
);

Route::get('/hello', function () {
    return view('hello', ['name' => 'Inaya']);
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/daftarnilai', function () {
    return view('daftar_nilai');
});

Route::get('/phpframework', function () {
    return view('layouts.index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pegawai',[PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/create',[PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai',[PegawaiController::class, 'store'])->name('pegawai.store');





Route::get('/Anggota',[AnggotaController::class, 'index'])->name('anggota.index');
Route::get('/Anggota/create',[AnggotaController::class, 'create'])->name('anggota.create');
Route::post('/Anggota',[AnggotaController::class, 'store'])->name('anggota.store');

Route::resource('pengarang', PengarangController::class); 
Route::resource('penerbit', PenerbitController::class); 
Route::resource('kategori', KategoriController::class); 
Route::resource('buku', BukuController::class);

Route::resource('matakuliah', MatakuliahController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('dosen', DosenController::class);
Route::resource('mahasantri', MahasantriController::class);

Route::get('bukupdf', [BukuController::class, 'bukuPDF']);
Route::get('bukucsv', [BukuController::class, 'bukucsv']);