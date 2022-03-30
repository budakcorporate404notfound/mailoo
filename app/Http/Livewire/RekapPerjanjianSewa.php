<?php

namespace App\Http\Livewire;

use App\Models\T_mainsurat;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;


class RekapPerjanjianSewa extends Component
{

    public $satuan_kerja;
    public $nomor_surat_rekomendasi_kpknl;
    public $tanggal_surat_rekomendasi_kpknl;
    public $nomor_sk_sekma;
    public $tanggal_sk_sekma;
    public $kode_billing_bukti_setor;
    public $tanggal_pembayaran;
    public $nomor_perjanjian_sewa;
    public $tanggal_perjanjian_sewa;
    public $jenis_barang_milik_negara;
    public $alamat;
    public $penyewa;
    public $tanggal_mulai_sewa;
    public $tanggal_berakhir_sewa;
    public $nilai_sewa;
    public $jangka_waktu_sewa;
    public $peruntukan;


    use WithFileUploads;


    public function resetInputFields()
    {
        $this->satuan_kerja = '';
        $this->nomor_surat_rekomendasi_kpknl = '';
        $this->tanggal_surat_rekomendasi_kpknl = '';
        $this->nomor_sk_sekma = '';
        $this->tanggal_sk_sekma = '';
        $this->kode_billing_bukti_setor = '';
        $this->tanggal_pembayaran = '';
        $this->nomor_perjanjian_sewa = '';
        $this->tanggal_perjanjian_sewa = '';
        $this->jenis_barang_milik_negara = '';
        $this->alamat = '';
        $this->penyewa = '';
        $this->tanggal_mulai_sewa = '';
        $this->tanggal_berakhir_sewa = '';
        $this->nilai_sewa = '';
        $this->jangka_waktu_sewa = '';
        $this->peruntukan = '';
    }

    public function test()
    {
        dd("test");
    }

    public function Store_rekapperjanjiansewa()
    {
        $validateData =  $this->validate([

            'satuan_kerja' => 'required',
            'nomor_surat_rekomendasi_kpknl' => 'required',
            'tanggal_surat_rekomendasi_kpknl' => 'required',
            'nomor_sk_sekma' => 'required',
            'tanggal_sk_sekma' => 'required',
            'kode_billing_bukti_setor' => '',
            'tanggal_pembayaran' => 'required',
            'nomor_perjanjian_sewa' => '',
            'tanggal_perjanjian_sewa' => 'required',
            'jenis_barang_milik_negara' => 'required',
            'alamat' => '',
            'penyewa' => 'required',
            'tanggal_mulai_sewa' => 'required',
            'tanggal_berakhir_sewa' => 'required',
            'nilai_sewa' => 'required',
            'jangka_waktu_sewa' => 'required',
            'peruntukan' => 'required',
            'pdf_surat' => 'mimes:pdf'
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

        $data = DB::table('ref_keuangan_uraian_kegiatan')
            ->join('ref_unitbagian', 'ref_unitbagian.id', '=', 'ref_keuangan_uraian_kegiatan.id_unitbagian')
            ->select(
                'ref_unitbagian.name',
                'ref_keuangan_uraian_kegiatan.id_unitbagian',
                'ref_keuangan_uraian_kegiatan.kode_uraian_kegiatan',
                'ref_keuangan_uraian_kegiatan.nama_uraian_kegiatan',
                'ref_keuangan_uraian_kegiatan.nama_sub_menu_uraian_kegiatan',
                'ref_keuangan_uraian_kegiatan.pagu_anggaran'
            )->where('ref_keuangan_uraian_kegiatan.id_unbagian', '=', '3')
            ->get();

        return dd($data);
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

        return view('livewire.rekap-perjanjian-sewa', ['datas' => $data])
            ->extends('layouts.app');
    }
}