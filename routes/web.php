<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Inputsurat;
use App\Http\Livewire\InputSuratMasuk;
use App\Http\Livewire\UserController;
use App\Http\Livewire\DataInputSuratMasuk;
use App\Http\Livewire\ReferensiUraianKegiatan;
use App\Http\Livewire\RealisasiRKKL;
use App\Http\Livewire\RekapPerjanjianSewa;
use App\Http\Controllers\Realisasi_rkklController;
use App\Http\Controllers\Select2SearchController;
use App\Http\Controllers\Select2SearchController2;
use App\Http\Controllers\Select2SearchController3;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\DataInputRealisasiRKKL;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\ProductAjaxController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);



// Route::resource('ajaxproducts', ProductAjaxController::class);

Route::post('realisasirkkl/storex', [App\Http\Controllers\Realisasi_rkklController::class, 'storex'])->name('realisasirkkl.storex');
Route::post('realisasirkkl/storey', [App\Http\Controllers\Realisasi_rkklController::class, 'storey'])->name('realisasirkkl.storey');
Route::post('realisasirkkl/storez', [App\Http\Controllers\Realisasi_rkklController::class, 'storez'])->name('realisasirkkl.storez');
Route::resource('realisasirkkl', Realisasi_rkklController::class);

Route::get('search', [Select2SearchController::class, 'index']);
Route::get('ajax-autocomplete-search', [Select2SearchController::class, 'selectSearch']);
Route::get('search2', [Select2SearchController2::class, 'index']);
Route::get('ajax-autocomplete-search2', [Select2SearchController2::class, 'selectSearch2']);
Route::get('search3', [Select2SearchController3::class, 'index']);
Route::get('ajax-autocomplete-search3', [Select2SearchController3::class, 'selectSearch3']);

Route::get('/article', [App\Http\Controllers\WebController::class, 'index']);

Route::post('/Edit_profil', [App\Http\Controllers\HomeController::class, 'Upload'])->name('Upload');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\MailooController::class, 'index'])->name('register');
Route::get('/getJabatan', [App\Http\Controllers\MailooController::class, 'getJabatan'])->name('getJabataphpn');
Route::get('/getJabatanlengkap',  [App\Http\Controllers\MailooController::class, 'getJabatanlengkap'])->name('getJabatanlengkap');
Route::get('/Edit_profil', [App\Http\Controllers\MailooController::class, 'Edit_profil'])->name('Edit_profil');
Route::get('/Profil_saya', [App\Http\Controllers\MailooController::class, 'Profil_saya'])->name('Profil_saya');
Route::get('/Input_surat', [App\Http\Controllers\MailooController::class, 'Input_surat'])->name('Input_surat');

// Livewire
// Route::get('/home', Home::class);
Route::get('/Inputsurat', Inputsurat::class);
Route::get('/InputSuratMasuk', InputSuratMasuk::class);
Route::get('/ReferensiUraianKegiatan', ReferensiUraianKegiatan::class);
Route::get('/RealisasiRKKL', RealisasiRKKL::class);

Route::get('/RekapPerjanjianSewa', RekapPerjanjianSewa::class);
// Route::get('/DataInputSuratMasuk', DataInputSuratMasuk::class);
Route::get('/DataInputSuratMasuk', [DataInputSuratMasuk::class, 'index'])->name('users.index');
Route::get('/DataInputRealisasiRKKL', [DataInputRealisasiRKKL::class, 'index'])->name('users2.index');

Route::get('/Testquery', [InputSuratMasuk::class, 'Testquery'])->name('Testquery');

//Route::post('/Edit_profil', [App\Http\Controllers\MailooController::class, 'Bismillah'])->name('Bismillah');

Route::get('/dropdown', [App\Http\Controllers\DropdownController::class, 'index'])->name('dropdown');
Route::get('/getState', [App\Http\Controllers\DropdownController::class, 'getState'])->name('getState');
Route::get('/getCity',  [App\Http\Controllers\DropdownController::class, 'getCity'])->name('getCity');

// Route::get('/change-password',  [App\Http\Controllers\ChangePasswordController::class, 'index'])->name('index');
// Route::get('/change-password',  [App\Http\Controllers\ChangePasswordController::class, 'store'])->name('change.password');

Route::get('/change-password', [App\Http\Controllers\ChangePasswordController::class, 'index'])->name('index');
Route::post('/change-password', [App\Http\Controllers\ChangePasswordController::class, 'store'])->name('change.password');

// Route::get('/change-password', 'ChangePasswordController@index');
// Route::post('/change-password', 'ChangePasswordController@store')->name('change.password');