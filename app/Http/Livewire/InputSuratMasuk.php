<?php

namespace App\Http\Livewire;

use App\Models\T_mainsurat;
use App\Models\T_realisasi_rkkl;
use App\Models\T_realisasi_tempatpelaksanaan;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Ref_keuangan_uraian_kegiatan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



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
        $books = T_realisasi_rkkl::with('t_realisasi_tempatpelaksanaans')->get();
        foreach ($books as $post) {

            echo $post->nomor_surat_tugas;
            echo '<br>';

            foreach ($post->t_realisasi_tempatpelaksanaans as $t) {
                echo $t->tempat_pelaksana;
                echo '<br>';
            }
        }
        //  echo  $post->nomor_surat_tugas;
        //  echo '<br>';


        //  return dd($x);
        // $x = $datas.id;

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