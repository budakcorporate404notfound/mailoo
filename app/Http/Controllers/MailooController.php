<?php

namespace App\Http\Controllers;

use App\Models\Ref_Confirmjabatan;
use Illuminate\Http\Request;
use App\Models\Ref_jabatan;
use App\Models\Ref_unitbagian;
use App\Models\User;
use App\Models\Ref_unitbagian_4_surat_masuk;
use App\Models\Ref_unitbagian_4_surat_masuk as ModelsRef_unitbagian_4_surat_masuk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class MailooController extends Controller
{




    //
    // public function Referensi(Request $request)

    // {

    //     $ref_unitbagian = Ref_unitbagian::pluck('nama_unitbagian', 'id');
    //     $ref_jabatan = Ref_jabatan::pluck('nama_jabatan', 'id');
    //     $ref_atasanlangsung = User::pluck('name', 'id');
    //     $selectedID_jabatan = 0;
    //     $selectedID_unitbagian = 0;
    //     $selectedID_atasanlangsung = 0;
    //     return view('auth.register', compact('selectedID_unitbagian', 'selectedID_jabatan', 'selectedID_atasanlangsung', 'ref_unitbagian', 'ref_jabatan', 'ref_atasanlangsung'));
    // }

    public function index()
    {
        $referensi_unitbagian = DB::table("ref_unitbagian")->pluck("name", "id");
        $referensi_confirmjabatan = Ref_Confirmjabatan::pluck('name', 'id');
        $referensi_atasanlangsung = User::pluck('name', 'id');
        $selectedID_unitbagian = 0;
        $selectID_confirmjabatan = 0;
        $selectID_atasanlagsung = 0;
        return view('auth.register', compact('referensi_unitbagian', 'referensi_confirmjabatan', 'referensi_atasanlangsung', 'selectID_confirmjabatan', 'selectID_atasanlagsung', 'selectedID_unitbagian'));
    }



    public function getJabatan(Request $request)
    {
        $referensi_jabatan = DB::table("ref_jabatan")
            ->where("unitbagian_id", $request->unit_kerja_id)
            ->pluck("name", "id");
        return response()->json($referensi_jabatan);
        // return dd($referensi_jabatan);
    }

    public function getJabatanlengkap(Request $request)
    {
        $referensi_jabatanlengkap = DB::table("ref_jabatanlengkap")
            ->where("jabatan_id", $request->jabatan_id)
            ->pluck("name", "id");
        return response()->json($referensi_jabatanlengkap);
    }

    public function Edit_profil()
    {

        $unitbagian = Ref_unitbagian::select('id', 'name')
            ->where('id', Auth::user()->unit_kerja)
            ->get();

        return
            view('edit_profil', compact('unitbagian'));
    }

    public function Profil_saya()
    {
        return
            view('profil_saya');
    }

    public function Input_surat()
    {

        // $referensi_unitbagian = DB::table("ref_unitbagian")->pluck("name", "id");
        $referensi_unitbagian_4_surat_masuk = Ref_unitbagian_4_surat_masuk::pluck('name', 'id');
        // $referensi_atasanlangsung = User::pluck('name', 'id');
        $selectedID_unitbagian_4_surat_masuk = 0;
        // $selectID_confirmjabatan = 0;
        // $selectID_atasanlagsung = 0;
        return view('input_surat', compact('referensi_unitbagian_4_surat_masuk', 'selectedID_unitbagian_4_surat_masuk'));
    }


    public function Upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
            Auth()->user()->update(['image' => $filename]);
        }
        return redirect()->back();
    }
}