<?php

namespace App\Http\Livewire;

use App\Models\T_mainsurat;
use App\Models\Ref_keuangan_uraian_kegiatan;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;



class ReferensiUraianKegiatan extends Component
{

    public $kode_uraian_kegiatan;
    public $nama_uraian_kegiatan;
    public $nama_sub_menu_uraian_kegiatan;
    public $pagu_anggaran;
    public $searchTerm;
    public $perPage = 10;
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public function loadMore()
    {
        $this->perPage = $this->perPage + 10;
    }



    public function resetInputFields()
    {
        $this->kode_uraian_kegiatan = '';
        $this->nama_uraian_kegiatan = '';
        $this->nama_sub_menu_uraian_kegiatan = '';
        $this->pagu_anggaran = '';
    }

    public function test()
    {
        dd("test");
    }

    public function Store_ReferensiUraianKegiatan()
    {
        $validateData =  $this->validate([
            'kode_uraian_kegiatan' => 'required',
            'nama_uraian_kegiatan' => 'required',
            'nama_sub_menu_uraian_kegiatan' => 'required',
            'pagu_anggaran' => 'required',
        ]);

        // T_mainsurat::create($validateData);
        // session()->flash('message', 'student created successfully');
        // $this->resetInputFields();
        // $this->emit('studentAdded');

        $id_unitbagian =  Auth::user()->unit_kerja;
        $validateData['id_unitbagian'] = $id_unitbagian;
        Ref_keuangan_uraian_kegiatan::create($validateData);
        session()->flash('message', 'sukses +1 surat masuk');
        $this->resetInputFields();
        $this->emit('studentAdded_ReferensiUraianKegiatan');
    }

    // public function Testquery()
    // {

    //     // $data = DB::table('data')
    //     //     ->select('')
    //     //     // ->whereNull('histori_data.hasil_verifikator')
    //     //     ->where('hasil_verifikator', '=', '1')
    //     //     ->groupBy('data_id')
    //     //     ->havingRaw('count(data_id) = 3')
    //     //     ->get();

    //     // $data = T_mainsurat::all();

    //     $data = DB::table('t_mainsurat')->count();
    //     return dd($data);
    // }


    public function edit_referensiuraiankegiatan($id)
    {
        // $data = Ref_keuangan_uraian_kegiatan::where('id', $id)->first();
        // $this->ids = $data->id;
        // $this->id_unitbagian = $data->id_unitbagian;
        // $this->name = $data->name;
        // $this->kode_uraian_kegiatan = $data->kode_uraian_kegiatan;
        // $this->nama_uraian_kegiatan = $data->nama_uraian_kegiatan;
        // $this->nama_sub_menu_uraian_kegiatan = $data->nama_sub_menu_uraian_kegiatan;
        // $this->pagu_anggaran = $data->pagu_anggaran;

        // $data = Ref_keuangan_uraian_kegiatan::where('id', $id)->first();
        $data = DB::table('ref_keuangan_uraian_kegiatan')
            ->join('ref_unitbagian', 'ref_unitbagian.id', '=', 'ref_keuangan_uraian_kegiatan.id_unitbagian')
            ->select(
                'ref_keuangan_uraian_kegiatan.id', // id
                'ref_unitbagian.name',
                'ref_keuangan_uraian_kegiatan.id_unitbagian',
                'ref_keuangan_uraian_kegiatan.kode_uraian_kegiatan',
                'ref_keuangan_uraian_kegiatan.nama_uraian_kegiatan',
                'ref_keuangan_uraian_kegiatan.nama_sub_menu_uraian_kegiatan',
                'ref_keuangan_uraian_kegiatan.pagu_anggaran'
            )->where('ref_keuangan_uraian_kegiatan.id', $id)->first();
        $this->ids = $data->id;
        $this->id_unitbagian = $data->id_unitbagian;
        $this->name = $data->name;
        $this->kode_uraian_kegiatan = $data->kode_uraian_kegiatan;
        $this->nama_uraian_kegiatan = $data->nama_uraian_kegiatan;
        $this->nama_sub_menu_uraian_kegiatan = $data->nama_sub_menu_uraian_kegiatan;
        $this->pagu_anggaran = $data->pagu_anggaran;
    }

    public function update_referensiuraiankegiatan()
    {
        $this->validate([
            'kode_uraian_kegiatan' => 'required',
            'nama_uraian_kegiatan' => 'required',
            'nama_sub_menu_uraian_kegiatan' => 'required',
            'pagu_anggaran' => 'required'
        ]);

        if ($this->ids) {
            $data = ref_keuangan_uraian_kegiatan::find($this->ids);
            $data->update([
                'kode_uraian_kegiatan' => $this->kode_uraian_kegiatan,
                'nama_uraian_kegiatan' => $this->nama_uraian_kegiatan,
                'nama_sub_menu_uraian_kegiatan' => $this->nama_sub_menu_uraian_kegiatan,
                'pagu_anggaran' => $this->pagu_anggaran
            ]);

            session()->flash('message', 'student update successfully');
            $this->resetInputFields();
            $this->emit('studentUpdated_referensiuraiankegiatan');
        }
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        ref_keuangan_uraian_kegiatan::find($this->deleteId)->delete();
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

        // $data = Ref_keuangan_uraian_kegiatan::all();

        $searchTerm = '%' . $this->searchTerm . '%';
        // $students = Ref_keuangan_uraian_kegiatan::where('id_unitbagian', 'LIKE', $searchTerm)
        //     ->orWhere('kode_uraian_kegiatan', 'LIKE', $searchTerm)
        //     ->orWhere('nama_uraian_kegiatan', 'LIKE', $searchTerm)
        //     ->orWhere('nama_sub_menu_uraian_kegiatan', 'LIKE', $searchTerm)
        //     ->orWhere('pagu_anggaran', 'LIKE', $searchTerm)
        //     ->orderBy('id', 'DESC')->paginate(5);

        $data = DB::table('ref_keuangan_uraian_kegiatan')
            ->join('ref_unitbagian', 'ref_unitbagian.id', '=', 'ref_keuangan_uraian_kegiatan.id_unitbagian')
            ->select(
                'ref_keuangan_uraian_kegiatan.id', // id
                'ref_unitbagian.name',
                'ref_keuangan_uraian_kegiatan.id_unitbagian',
                'ref_keuangan_uraian_kegiatan.kode_uraian_kegiatan',
                'ref_keuangan_uraian_kegiatan.nama_uraian_kegiatan',
                'ref_keuangan_uraian_kegiatan.nama_sub_menu_uraian_kegiatan',
                'ref_keuangan_uraian_kegiatan.pagu_anggaran'
            )->where(function ($query) use ($searchTerm) {
                return $query->where('ref_unitbagian.name', 'LIKE', $searchTerm)
                    ->orWhere('ref_keuangan_uraian_kegiatan.id_unitbagian', 'LIKE', $searchTerm)
                    ->orWhere('ref_keuangan_uraian_kegiatan.kode_uraian_kegiatan', 'LIKE', $searchTerm)
                    ->orWhere('ref_keuangan_uraian_kegiatan.nama_uraian_kegiatan', 'LIKE', $searchTerm)
                    ->orWhere('ref_keuangan_uraian_kegiatan.nama_sub_menu_uraian_kegiatan', 'LIKE', $searchTerm)
                    ->orWhere('ref_keuangan_uraian_kegiatan.pagu_anggaran', 'LIKE', $searchTerm);
            })
            ->where(function ($query) {
                return $query->where('ref_keuangan_uraian_kegiatan.id_unitbagian', '=', Auth::user()->unit_kerja);
            })
            ->orderBy('ref_keuangan_uraian_kegiatan.id_unitbagian', 'DESC')->paginate($this->perPage);;





        // ->where('ref_keuangan_uraian_kegiatan.id_unitbagian', '=', Auth::user()->unit_kerja)
        // ->where('ref_unitbagian.name', 'LIKE', $searchTerm)
        // ->orWhere('ref_keuangan_uraian_kegiatan.id_unitbagian', 'LIKE', $searchTerm)

        // ->orWhere('ref_keuangan_uraian_kegiatan.kode_uraian_kegiatan', 'LIKE', $searchTerm)
        // ->orWhere('ref_keuangan_uraian_kegiatan.nama_uraian_kegiatan', 'LIKE', $searchTerm)
        // ->orWhere('ref_keuangan_uraian_kegiatan.nama_sub_menu_uraian_kegiatan', 'LIKE', $searchTerm)
        // ->orWhere('ref_keuangan_uraian_kegiatan.pagu_anggaran', 'LIKE', $searchTerm)
        // ->orderBy('ref_keuangan_uraian_kegiatan.id_unitbagian', 'DESC')->paginate($this->perPage);
        // ->get();

        return view('livewire.referensi-uraian-kegiatan', compact('data'))
            ->extends('layouts.app');
    }
}