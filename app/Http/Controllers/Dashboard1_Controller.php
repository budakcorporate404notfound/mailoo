<?php

namespace App\Http\Controllers;

use App\Models\Ref_keuangan_uraian_kegiatan;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Dashboard1_Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $products = Ref_keuangan_uraian_kegiatan::select(
            'ref_keuangan_uraian_kegiatan.id',
            'ref_keuangan_uraian_kegiatan.id_unitbagian',
            'ref_keuangan_uraian_kegiatan.kode_uraian_kegiatan',
            'ref_keuangan_uraian_kegiatan.nama_uraian_kegiatan',
            'ref_keuangan_uraian_kegiatan.nama_sub_menu_uraian_kegiatan',
            'ref_keuangan_uraian_kegiatan.kelompok_pagu',
            'ref_keuangan_uraian_kegiatan.tahun_anggaran'
        )
            ->selectRaw("ROUND(REPLACE(ref_keuangan_uraian_kegiatan.pagu_anggaran,'.','')) as pagu_anggaran")
            ->selectRaw("IFNULL(SUM(ROUND(REPLACE(t_realisasi_pagu_rkkl.nilai_pagu_realisasi,'.',''))),0) as nilai_pagu_realisasi")
            ->selectRaw("ROUND(REPLACE(ref_keuangan_uraian_kegiatan.pagu_anggaran,'.','')) - IFNULL(SUM(ROUND(REPLACE(t_realisasi_pagu_rkkl.nilai_pagu_realisasi,'.',''))),0)   as sisa")
            ->selectRaw("ROUND(IFNULL(SUM(ROUND(REPLACE(t_realisasi_pagu_rkkl.nilai_pagu_realisasi,'.',''))),0) / ROUND(REPLACE(ref_keuangan_uraian_kegiatan.pagu_anggaran,'.','')),2) * 100 as persen")
            ->leftjoin('t_realisasi_pagu_rkkl', 'ref_keuangan_uraian_kegiatan.id', '=', 't_realisasi_pagu_rkkl.ref_keuangan_uraian_kegiatan_id')
            ->where('ref_keuangan_uraian_kegiatan.id_unitbagian', '=', Auth::user()->unit_kerja)
            ->where('ref_keuangan_uraian_kegiatan.tahun_anggaran', '=', Session::get('tahunanggaran'))
            ->groupBy('ref_keuangan_uraian_kegiatan.kelompok_pagu')
            ->orderBy('id', 'ASC')
            ->get();

        return view('dashboard1', compact('products'));
    }
}