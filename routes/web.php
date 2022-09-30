<?php

use App\Http\Controllers\DasarController;
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
use App\Http\Controllers\ReferensiController;
use App\Http\Controllers\Unggah_LaporanController;
use App\Http\Controllers\Rincian_PelaksanaanController;
use App\Http\Controllers\Rincian_PengeluaranController;
use App\Http\Controllers\Rincian_LaporanController;
use App\Http\Controllers\Dashboard1_Controller;
use App\Http\Controllers\Dashboard2_Controller;
use App\Http\Controllers\Status_UserController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\KonsepST_Controller;
use App\Http\Controllers\HomeController2;
use App\Http\Controllers\Jabatan_Controller;
use App\Http\Controllers\KodemakController;
use App\Http\Controllers\MenimbangController;
use App\Http\Controllers\Wilayah_Controller;
use App\Http\Controllers\SatuanKerja_Controller;
use App\Http\Controllers\TahunAnggaran_Controller;
use App\Http\Controllers\TertandaController;
use App\Http\Controllers\UnitBagian_Controller;
use App\Http\Controllers\UnitBagianxJabatan_Controller;
use App\Http\Controllers\UntukController;
use App\Http\Controllers\Rincian_PembuatLaporanController;
use App\Http\Middleware\UserActivity;
use App\Http\Controllers\SPJ_Controller;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Dashboard3_Controller;
use App\Http\Controllers\NamaPelaksana_Controller;
use App\Http\Controllers\NominatifController;
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

// referensi anggaran
Route::group(
    ['middleware' => ['role']],
    function () {
        Route::resource('referensi', ReferensiController::class);
    }
);
// Route::resource('ajaxproducts', ProductAjaxController::class);

Route::post('realisasirkkl/storex', [App\Http\Controllers\Realisasi_rkklController::class, 'storex'])->name('realisasirkkl.storex');
Route::post('realisasirkkl/storey', [App\Http\Controllers\Realisasi_rkklController::class, 'storey'])->name('realisasirkkl.storey');
Route::post('realisasirkkl/storez', [App\Http\Controllers\Realisasi_rkklController::class, 'storez'])->name('realisasirkkl.storez');
Route::post('realisasirkkl/storev', [App\Http\Controllers\Realisasi_rkklController::class, 'storev'])->name('realisasirkkl.storev');
Route::resource('realisasirkkl', Realisasi_rkklController::class);

Route::post('spj/storex', [App\Http\Controllers\SPJ_Controller::class, 'storex'])->name('spj.storex');
Route::post('spj/storey', [App\Http\Controllers\SPJ_Controller::class, 'storey'])->name('spj.storey');
Route::post('spj/storez', [App\Http\Controllers\SPJ_Controller::class, 'storez'])->name('spj.storez');
Route::post('spj/storev', [App\Http\Controllers\SPJ_Controller::class, 'storev'])->name('spj.storev');
Route::resource('spj', SPJ_Controller::class);

Route::post('unggahlaporan/storex', [App\Http\Controllers\Unggah_LaporanController::class, 'storex'])->name('unggahlaporan.storex');
Route::post('unggahlaporan/storey', [App\Http\Controllers\Unggah_LaporanController::class, 'storey'])->name('unggahlaporan.storey');
Route::post('unggahlaporan/storez', [App\Http\Controllers\Unggah_LaporanController::class, 'storez'])->name('unggahlaporan.storez');
Route::post('unggahlaporan/storev', [App\Http\Controllers\Unggah_LaporanController::class, 'storev'])->name('unggahlaporan.storev');
Route::resource('unggahlaporan', Unggah_LaporanController::class);


Route::group(
    ['middleware' => ['role']],
    function () {
        Route::post('rincianpelaksanaan/storex', [App\Http\Controllers\Rincian_PelaksanaanController::class, 'storex'])->name('rincianpelaksanaan.storex');
        Route::post('rincianpelaksanaan/storey', [App\Http\Controllers\Rincian_PelaksanaanController::class, 'storey'])->name('rincianpelaksanaan.storey');
        Route::post('rincianpelaksanaan/storez', [App\Http\Controllers\Rincian_PelaksanaanController::class, 'storez'])->name('rincianpelaksanaan.storez');
        Route::post('rincianpelaksanaan/storev', [App\Http\Controllers\Rincian_PelaksanaanController::class, 'storev'])->name('rincianpelaksanaan.storev');
        Route::resource('rincianpelaksanaan', Rincian_PelaksanaanController::class);
    }
);

Route::group(
    ['middleware' => ['role']],
    function () {
        Route::post('rincianpengeluaran/storex', [App\Http\Controllers\Rincian_PengeluaranController::class, 'storex'])->name('rincianpengeluaran.storex');
        Route::post('rincianpengeluaran/storey', [App\Http\Controllers\Rincian_PengeluaranController::class, 'storey'])->name('rincianpengeluaran.storey');
        Route::post('rincianpengeluaran/storez', [App\Http\Controllers\Rincian_PengeluaranController::class, 'storez'])->name('rincianpengeluaran.storez');
        Route::post('rincianpengeluaran/storev', [App\Http\Controllers\Rincian_PengeluaranController::class, 'storev'])->name('rincianpengeluaran.storev');
        Route::resource('rincianpengeluaran', Rincian_PengeluaranController::class);
    }
);

Route::group(
    ['middleware' => ['role']],
    function () {
        Route::post('rincianlaporan/storex', [App\Http\Controllers\Rincian_LaporanController::class, 'storex'])->name('rincianlaporan.storex');
        Route::post('rincianlaporan/storey', [App\Http\Controllers\Rincian_LaporanController::class, 'storey'])->name('rincianlaporan.storey');
        Route::post('rincianlaporan/storez', [App\Http\Controllers\Rincian_LaporanController::class, 'storez'])->name('rincianlaporan.storez');
        Route::post('rincianlaporan/storev', [App\Http\Controllers\Rincian_LaporanController::class, 'storev'])->name('rincianlaporan.storev');
        Route::resource('rincianlaporan', Rincian_LaporanController::class);
    }
);

Route::group(
    ['middleware' => ['role']],
    function () {
        Route::post('rincianpembuatlaporan/storex', [App\Http\Controllers\Rincian_PembuatLaporanController::class, 'storex'])->name('rincianpembuatlaporan.storex');
        Route::post('rincianpembuatlaporan/storey', [App\Http\Controllers\Rincian_PembuatLaporanController::class, 'storey'])->name('rincianpembuatlaporan.storey');
        Route::post('rincianpembuatlaporan/storez', [App\Http\Controllers\Rincian_PembuatLaporanController::class, 'storez'])->name('rincianpembuatlaporan.storez');
        Route::post('rincianpembuatlaporan/storev', [App\Http\Controllers\Rincian_PembuatLaporanController::class, 'storev'])->name('rincianpembuatlaporan.storev');
        Route::resource('rincianpembuatlaporan', Rincian_PembuatLaporanController::class);
    }
);


Route::post('dashboard_1/storex', [App\Http\Controllers\Dashboard1_Controller::class, 'storex'])->name('dashboard_1.storex');
Route::post('dashboard_1/storey', [App\Http\Controllers\Dashboard1_Controller::class, 'storey'])->name('dashboard_1.storey');
Route::post('dashboard_1/storez', [App\Http\Controllers\Dashboard1_Controller::class, 'storez'])->name('dashboard_1.storez');
Route::post('dashboard_1/storev', [App\Http\Controllers\Dashboard1_Controller::class, 'storev'])->name('dashboard_1.storev');
Route::resource('dashboard_1', Dashboard1_Controller::class);

Route::post('dashboard_2/storex', [App\Http\Controllers\Dashboard2_Controller::class, 'storex'])->name('dashboard_2.storex');
Route::post('dashboard_2/storey', [App\Http\Controllers\Dashboard2_Controller::class, 'storey'])->name('dashboard_2.storey');
Route::post('dashboard_2/storez', [App\Http\Controllers\Dashboard2_Controller::class, 'storez'])->name('dashboard_2.storez');
Route::post('dashboard_2/storev', [App\Http\Controllers\Dashboard2_Controller::class, 'storev'])->name('dashboard_2.storev');
Route::resource('dashboard_2', Dashboard2_Controller::class);

Route::post('dashboard_3/storex', [App\Http\Controllers\Dashboard3_Controller::class, 'storex'])->name('dashboard_3.storex');
Route::post('dashboard_3/storey', [App\Http\Controllers\Dashboard3_Controller::class, 'storey'])->name('dashboard_3.storey');
Route::post('dashboard_3/storez', [App\Http\Controllers\Dashboard3_Controller::class, 'storez'])->name('dashboard_3.storez');
Route::post('dashboard_3/storev', [App\Http\Controllers\Dashboard3_Controller::class, 'storev'])->name('dashboard_3.storev');
Route::resource('dashboard_3', Dashboard3_Controller::class);

Route::post('statususer/storex', [App\Http\Controllers\Status_UserController::class, 'storex'])->name('statususer.storex');
Route::post('statususer/storey', [App\Http\Controllers\Status_UserController::class, 'storey'])->name('statususer.storey');
Route::post('statususer/storez', [App\Http\Controllers\Status_UserController::class, 'storez'])->name('statususer.storez');
Route::post('statususer/storev', [App\Http\Controllers\Status_UserController::class, 'storev'])->name('statususer.storev');
Route::resource('statususer', Status_UserController::class);

Route::get('fullcalender', [FullCalenderController::class, 'index']);
Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);

Route::get('online-user', [User_Controller::class, 'index']);

Route::post('konsepst/storex', [App\Http\Controllers\KonsepST_Controller::class, 'storex'])->name('konsepst.storex');
Route::post('konsepst/storey', [App\Http\Controllers\KonsepST_Controller::class, 'storey'])->name('konsepst.storey');
Route::post('konsepst/storez', [App\Http\Controllers\KonsepST_Controller::class, 'storez'])->name('konsepst.storez');
Route::post('konsepst/storev', [App\Http\Controllers\KonsepST_Controller::class, 'storev'])->name('konsepst.storev');
Route::get('konsepst/storeg', [App\Http\Controllers\KonsepST_Controller::class, 'storeg'])->name('konsepst.storeg');
Route::get('konsepst/storepdf', [App\Http\Controllers\KonsepST_Controller::class, 'storepdf'])->name('konsepst.storepdf');
Route::get('get/details/{id}', [App\Http\Controllers\KonsepST_Controller::class, 'getDetailAutofills'])->name('getDetailAutofills');
Route::resource('konsepst', KonsepST_Controller::class);

Route::group(
    ['middleware' => ['role']],
    function () {
        Route::resource('menimbang', MenimbangController::class);
        Route::resource('dasar', DasarController::class);
        Route::resource('untuk', UntukController::class);
        Route::resource('kodemak', KodemakController::class);
        Route::resource('tertanda', TertandaController::class);
    }
);

// Route::resource('unitbagian', UnitBagian_Controller::class);
// Route::resource('jabatan', Jabatan_Controller::class);
// Route::resource('unitbagianxjabatan', UnitBagianxJabatan_Controller::class);
Route::group(
    ['middleware' => ['roleadmin']],
    function () {
        Route::resource('wilayah', Wilayah_Controller::class);
        Route::resource('satuankerja', SatuanKerja_Controller::class);
        Route::get('get/detail_kodewilayahs/{id}', [App\Http\Controllers\SatuanKerja_Controller::class, 'getDetailAutofillKodeWilayahs'])->name('getDetailAutofillKodeWilayahs');
        Route::resource('tahunanggaran', TahunAnggaran_Controller::class);
        Route::resource('namapelaksana', NamaPelaksana_Controller::class);
    }
);

Route::get('google-chart', [GoogleController::class, 'googleLineChart']);


// test api
Route::get('/apiwithoutkey', [ProjectController::class, 'apiWithoutKey'])->name('apiWithoutKey');
Route::get('/apiwithkey', [ProjectController::class, 'apiWithKey'])->name('apiWithKey');
// Route::resource('projects', ProjectController::class);

Route::group(
    ['middleware' => ['role']],
    function () {
        Route::post('nominatif/storex', [App\Http\Controllers\NominatifController::class, 'storex'])->name('nominatif.storex');
        Route::post('nominatif/storey', [App\Http\Controllers\NominatifController::class, 'storey'])->name('nominatif.storey');
        Route::post('nominatif/storez', [App\Http\Controllers\NominatifController::class, 'storez'])->name('nominatif.storez');
        Route::post('nominatif/storev', [App\Http\Controllers\NominatifController::class, 'storev'])->name('nominatif.storev');
        Route::resource('nominatif', NominatifController::class);
    }
);



// Route::get('generate-docx', 'HomeController2@generateDocx');
// Route::get('generate-docx', [App\Http\Controllers\HomeController2::class, 'generateDocx'])->name('generateDocx');



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