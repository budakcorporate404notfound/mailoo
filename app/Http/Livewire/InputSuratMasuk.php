<?php

namespace App\Http\Livewire;

use App\Models\T_mainsurat;
use App\Models\T_realisasi_rkkl;
use App\Models\T_realisasi_tempatpelaksanaan;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\T_pembuat_laporan;
use App\Models\Ref_keuangan_uraian_kegiatan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\T_realisasi_pagu_rkkl;
use Illuminate\Support\Facades\Session;
use Symfony\Component\VarDumper\Cloner\Data;
use Carbon\Carbon;
use GuzzleHttp\Client;

class InputSuratMasuk extends Component
{

    public $asal_surat;
    public $nomor_surat;
    public $tanggal_surat;
    public $perihal_surat;
    public $pejabat_pengirim_surat;
    public $surat_ditujukan_kepada;
    public $pdf_surat;


    use WithFileUploads;


    public function resetInputFields()
    {
        $this->asal_surat = '';
        $this->nomor_surat = '';
        $this->tanggal_surat = '';
        $this->perihal_surat = '';
        $this->pejabat_pengirim_surat = '';
        $this->surat_ditujukan_kepada = '';
        $this->pdf_surat = '';
    }

    public function test()
    {
        dd("test");
    }

    public function Store()
    {
        $validateData =  $this->validate([
            'asal_surat' => 'required',
            'nomor_surat' => 'required',
            'tanggal_surat' => 'required',
            'perihal_surat' => 'required',
            'pejabat_pengirim_surat' => 'required',
            'surat_ditujukan_kepada' => 'required',
            'pdf_surat' => 'required | mimes:pdf'
        ]);

        // T_mainsurat::create($validateData);
        // session()->flash('message', 'student created successfully');
        // $this->resetInputFields();
        // $this->emit('studentAdded');

        $pdf_surat = $this->pdf_surat->store('file', 'public');
        $validateData['pdf_surat'] = $pdf_surat;
        T_mainsurat::create($validateData);
        session()->flash('message', 'sukses +1 surat masuk');
        $this->resetInputFields();
        $this->emit('studentAdded');
    }

    public function Testquery()
    {

        // $data = DB::table('data')
        //     ->select('')
        //     // ->whereNull('histori_data.hasil_verifikator')
        //     ->where('hasil_verifikator', '=', '1')
        //     ->groupBy('data_id')
        //     ->havingRaw('count(data_id) = 3')
        //     ->get();

        // $data = T_mainsurat::all();

        // $data = DB::table('t_mainsurat')->count();

        // $data = DB::table('ref_keuangan_uraian_kegiatan')
        //     ->join('ref_unitbagian', 'ref_unitbagian.id', '=', 'ref_keuangan_uraian_kegiatan.id_unitbagian')
        //     ->select(
        //         'ref_unitbagian.name',
        //         'ref_keuangan_uraian_kegiatan.id_unitbagian',
        //         'ref_keuangan_uraian_kegiatan.kode_uraian_kegiatan',
        //         'ref_keuangan_uraian_kegiatan.nama_uraian_kegiatan',
        //         'ref_keuangan_uraian_kegiatan.nama_sub_menu_uraian_kegiatan',
        //         'ref_keuangan_uraian_kegiatan.pagu_anggaran'
        //     )
        //     ->where('ref_keuangan_uraian_kegiatan.id_unitbagian', Auth::user()->unit_kerja)
        //     ->get();


        // $data = Auth::user()->unit_kerja;

        // $users = Ref_keuangan_uraian_kegiatan::select('id', 'kode_uraian_kegiatan')
        //     ->where(
        //         'Ref_keuangan_uraian_kegiatan.id_unitbagian',
        //         '=',
        //         Auth::user()->unit_kerja
        //     )
        //     ->get();

        // $users = T_realisasi_rkkl::select();

        // $users = DB::table('t_realisasi_rkkl')
        //     ->join('contacts', 'users.id', '=', 'contacts.user_id')
        //     ->select('*')
        //     ->get();


        //    foreach ($books as $post) {
        //      echo  $post->nomor_surat_tugas;
        //      echo '<br>';
        // $books = T_realisasi_rkkl::with('t_realisasi_tempatpelaksanaans')->get();
        // foreach ($books as $post) {

        //     echo $post->nomor_surat_tugas;
        //     echo '<br>';

        //     foreach ($post->t_realisasi_tempatpelaksanaans as $t) {
        //         echo $t->tempat_pelaksana;
        //         echo '<br>';
        //     }
        // }
        // //  echo  $post->nomor_surat_tugas;
        //  echo '<br>';

        // $pagu_anggaran = DB::table('ref_keuangan_uraian_kegiatan')
        //     ->selectRaw("round(replace(pagu_anggaran, '.','')) as pagu_anggaran")
        //     ->where('id', '=', '10')
        //     ->get();
        // echo $pagu_anggaran[0]->pagu_anggaran;

        // $realisasi_anggaran = DB::table('t_realisasi_pagu_rkkl')
        //     ->selectRaw("sum(round(replace(nilai_pagu_realisasi, '.',''))) as realisasi_anggaran")
        //     ->where('ref_keuangan_uraian_kegiatan_id', '=', '10')
        //     ->get();
        // echo $realisasi_anggaran[0]->realisasi_anggaran;
        //  return dd($x);
        // $x = $datas.id;

        // $pagu_anggaran = DB::table('ref_keuangan_uraian_kegiatan')
        //     ->selectRaw("round(replace(pagu_anggaran, '.','')) as pagu_anggaran")
        //     ->where('id', '=', '10')
        //     ->get();
        // $pagu_anggaran_tanpa_titik = $pagu_anggaran[0]->pagu_anggaran;


        // $realisasi_anggaran = DB::table('t_realisasi_pagu_rkkl')
        //     ->selectRaw("sum(round(replace(nilai_pagu_realisasi, '.',''))) as realisasi_anggaran")
        //     ->where('ref_keuangan_uraian_kegiatan_id', '=', '10')
        //     ->get();
        // $realisasi_anggaran_tanpa_titik = $realisasi_anggaran[0]->realisasi_anggaran;

        // $penginputan_tanpa_titik = str_replace('.', '', '3.000.000');

        // $hasil = $pagu_anggaran_tanpa_titik - $realisasi_anggaran_tanpa_titik - $penginputan_tanpa_titik;how to get array in [{ }]$data['0'
        // echo $hasil;

        // $data = DB::table('t_pembuat_laporan')
        //     ->select('*')
        //     ->whereNotExists(function ($query) {
        //         $query->select(DB::raw(1))
        //             ->from('t_pengirim_laporan')
        //             ->whereRaw('concat(t_pembuat_laporan.t_realisasi_rkkl_id,t_pembuat_laporan.nama_pelaksana)
        //                     =
        //                     concat(t_pengirim_laporan.t_realisasi_rkkl_id,t_pengirim_laporan.pengirim_laporan) and nama_pelaksana like "%budak%"');
        //     })
        //     ->get();

        // // echo $data;
        // dd($data[0]);

        // $datax = T_realisasi_rkkl::with('T_realisasi_tempatpelaksanaans')->where('id', '=', '11')->get();

        // foreach ($datax as $data) {
        //     echo $data->nomor_surat_tugas;
        //     echo '<br>';
        //     foreach ($data->T_realisasi_tempatpelaksanaans as $x) {
        //         echo $x->nama_pelaksana;
        //         echo '<br>';
        //     }
        // }


        // $id = '1';

        // // $product = T_realisasi_pagu_rkkl::find($id);


        // $product = T_realisasi_pagu_rkkl::select(
        //     't_realisasi_pagu_rkkl.id as id',
        //     'ref_unitbagian.name as bagian',
        //     't_realisasi_pagu_rkkl.t_realisasi_rkkl_id',
        //     'ref_keuangan_uraian_kegiatan.id as kode_anggaran',
        //     'ref_keuangan_uraian_kegiatan.kode_uraian_kegiatan as kode_uraian_kegiatan',
        //     'ref_keuangan_uraian_kegiatan.nama_uraian_kegiatan as nama_uraian_kegiatan',
        //     'ref_keuangan_uraian_kegiatan.nama_sub_menu_uraian_kegiatan as nama_sub_menu_uraian_kegiatan',
        //     'ref_keuangan_uraian_kegiatan.kelompok_pagu as kelompok_pagu',
        //     't_realisasi_pagu_rkkl.nilai_pagu_realisasi',
        //     't_realisasi_pagu_rkkl.user_penginput_data'
        // )
        //     ->join('ref_unitbagian', 'ref_unitbagian.id', '=', 't_realisasi_pagu_rkkl.ref_unitbagian_id')
        //     ->join('ref_keuangan_uraian_kegiatan', 'ref_keuangan_uraian_kegiatan.id', '=', 't_realisasi_pagu_rkkl.ref_keuangan_uraian_kegiatan_id')
        //     ->where('t_realisasi_pagu_rkkl.id', '=', $id)
        //     ->where('t_realisasi_pagu_rkkl.ref_unitbagian_id', '=', Auth::user()->unit_kerja)
        //     ->first();

        // echo $product;

        // $pagu_anggaran = DB::table('ref_keuangan_uraian_kegiatan')
        //     ->selectRaw("round(replace(pagu_anggaran, '.','')) as pagu_anggaran")
        //     ->where('id', '=', '10')
        //     ->get();

        // echo $pagu_anggaran;
        // echo Session::get('tahunanggaran');


        // $tanggal_stx = T_realisasi_rkkl::select(
        //     't_realisasi_rkkl.id',
        //     't_realisasi_rkkl.ref_unitbagian_id',
        //     't_realisasi_rkkl.tanggal_surat_tugas',
        //     't_realisasi_rkkl.user_penginput_data',
        //     't_realisasi_rkkl.tahun_anggaran'
        // )
        //     ->where('id', '=', '2')
        //     ->get();

        // $tanggal = $tanggal_stx[0]->tanggal_surat_tugas;

        // echo Carbon::parse($tanggal)->isoFormat('D MMMM Y');

        // $id = 2;

        // $check_realisasi = DB::table('t_realisasi_pagu_rkkl')
        //     ->select(DB::raw("count(ref_keuangan_uraian_kegiatan_id) as count"))
        //     ->where('ref_keuangan_uraian_kegiatan_id', '=', $id)
        //     ->get();

        // echo ($check_realisasi);
        // echo $check_realisasi[0]->count;
        // foreach ($check_realisasi as $key) {
        //     echo $key->count;
        // }

        // $unitbagian = DB::table('ref_unitbagian')
        //     ->select("id", "name")
        //     ->where("id", Auth::user()->unit_kerja)
        //     ->get();

        // foreach ($unitbagian as $key) {
        //     echo $key->name;
        // }

        $client = new Client(); //GuzzleHttp\Client
        $url = "https://sirup.lkpp.go.id/sirup/datatablectr/dataruppenyediakldi?idKldi=L40&tahun=2022";


        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

        for ($i = 0; $i < count($responseBody->aaData); $i++) {
            foreach ($responseBody as $item) {
                print_r($item[$i][0] . "|");
                print_r($item[$i][1] . "|");
                print_r($item[$i][2] . "|");
                print_r($item[$i][3] . "|");
                print_r($item[$i][4] . "|");
                print_r($item[$i][5] . "|");
                print_r($item[$i][6] . "|");
                print_r($item[$i][7] . "|");
            }
            print_r('<br>');
        }

        // print_r($responseBody->aaData[0][0]);
        // echo "<br>";
        // print_r($responseBody->aaData[0]);

        // print_r($responseBody->aaData);

        // $referensi_jabatanlengkap = DB::table("ref_jabatanlengkap")
        //     ->where("jabatan_id", '1')
        //     ->select("name", "id")
        //     ->get();

        // echo $referensi_jabatanlengkap;

        // $jabatan = "kasubbag pendataan";

        // if (strpos($jabatan, 'kasubbagx') !== false) {
        //     $untukx = DB::table('ref_nominatif_penginapan')

        //         ->select('id', 'provinsi', 'harga->II as test')
        //         ->get();

        //     echo $untukx;
        // } else {
        //     echo "kasub";
        // }

        // $data = T_realisasi_tempatpelaksanaan::select(
        //     't_realisasi_rkkl.nomor_surat_tugas',
        //     't_realisasi_tempatpelaksanaan.nama_pelaksana',
        //     't_realisasi_tempatpelaksanaan.nip',
        //     't_realisasi_tempatpelaksanaan.golongan',
        //     't_realisasi_tempatpelaksanaan.eselon',
        //     't_realisasi_tempatpelaksanaan.jabatan',
        //     't_realisasi_tempatpelaksanaan.tempat_pelaksana',
        //     't_realisasi_tempatpelaksanaan.user_penginput_data',
        //     't_realisasi_tempatpelaksanaan.tahun_anggaran',
        //     't_realisasi_tempatpelaksanaan.created_at',
        //     't_realisasi_tempatpelaksanaan.updated_at',
        //     'ref_satuankerja.sbu_taksi',
        //     DB::raw('(CASE
        //     WHEN t_realisasi_tempatpelaksanaan.eselon = "I" THEN  json_unquote(json_extract(`ref_satuankerja`.`sbu_penginapan_eselon`,"$.I"))
        //     WHEN t_realisasi_tempatpelaksanaan.eselon = "II" THEN json_unquote(json_extract(`ref_satuankerja`.`sbu_penginapan_eselon`, "$.II"))
        //     WHEN t_realisasi_tempatpelaksanaan.eselon = "III" THEN json_unquote(json_extract(`ref_satuankerja`.`sbu_penginapan_eselon`, "$.III"))
        //     ELSE json_unquote(json_extract(`ref_satuankerja`.`sbu_penginapan_eselon`, "$.IV"))
        //     END) AS active_lable')
        // )
        //     ->join('t_realisasi_rkkl', 't_realisasi_rkkl.id', '=', 't_realisasi_tempatpelaksanaan.t_realisasi_rkkl_id')
        //     ->join('ref_satuankerja', 't_realisasi_tempatpelaksanaan.tempat_pelaksana', '=', 'ref_satuankerja.nama_satuankerja')
        //     ->where('t_realisasi_rkkl.ref_unitbagian_id', '=', Auth::user()->unit_kerja)
        //     // ->where('t_realisasi_tempatpelaksanaan.tempat_pelaksana', '=', 'PTA bandung')
        //     ->where(
        //         't_realisasi_tempatpelaksanaan.tahun_anggaran',
        //         '=',
        //         Session::get('tahunanggaran')
        //     )
        //     ->get();

        // foreach ($data as $x) {
        //     echo $x->id;
        //     echo "\t";
        //     echo $x->t_realisasi_rkkl_id;
        //     echo "\t";
        //     echo $x->nomor_surat_tugas;
        //     echo "\t";
        //     echo $x->nama_pelaksana;
        //     echo "\t";
        //     echo $x->nip;
        //     echo "\t";
        //     echo $x->golongan;
        //     echo "\t";
        //     echo $x->eselon;
        //     echo "\t";
        //     echo $x->jabatan;
        //     echo "\t";
        //     echo $x->tempat_pelaksana;
        //     echo "\t";
        //     echo $x->user_penginput_data;
        //     echo "\t";
        //     echo $x->tahun_anggaran;
        //     echo "\t";
        //     echo $x->test;
        //     echo "\t";
        //     echo $x->active_lable;
        //     echo "<br>";
        //     echo $x->sbu_taksi;
        //     echo "<br>";
        // }
    }


    public function render()
    {

        // $data = DB::table('histori_data')
        // ->rightjoin('data', 'data.id', '=', 'histori_data.data_id')
        // ->join('users', 'users.id', '=', 'histori_data.user_id')
        // //->join('histori_data', 'histori_data.data_id', '=', 'data.id')
        // ->select('histori_data.id', 'data.created_at', 'histori_data.user_id', 'users.name', 'histori_data.data_id', 'data.lu_buktifisik', 'data.lu_administrasi')
        // // ->whereNull('histori_data.hasil_verifikator')
        // ->where('hasil_verifikator', '=', '1')
        //     ->groupBy('data_id')
        //     ->havingRaw('count(data_id) = 1')
        //     ->get();

        $data = T_mainsurat::all();

        return view('livewire.input-surat-masuk', ['datas' => $data])
            ->extends('layouts.app');
    }
}