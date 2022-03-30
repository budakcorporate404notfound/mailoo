<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\T_mainsurat;
use Livewire\WithFileUploads;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;



class DataInputRealisasiRKKL extends Component
{


    public function index(Request $request)
    {
        if ($request->ajax()) {
            // $data = User::select('*');
            $data = DB::table('t_mainsurat')
                ->select('*');

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status == '1') {
                        return '<span class="badge badge-primary">Active</span>';
                    } elseif ($row->status == '2') {
                        return '<span class="badge badge-info">Kukuh Binanto Ganteng</span>';
                    } else {
                        return '<span class="badge badge-danger">Deactive</span>';
                    }
                })
                ->addColumn('status_ii', function ($row) {
                    if ($row->status_ii == '1') {
                        return '<span class="badge badge-primary">Active</span>';
                    } else {
                        return '<span class="badge badge-danger">Deactive</span>';
                    }
                })
                // ->editColumn('pdf_surat', function ($row) {
                //     return '<a href="' . asset("https://localhost/mailoo/storage/app/public/" . $row->pdf_surat) . '" class="btn btn-xs  btn-primary" target="_blank"><i class="glyphicon glyphicon-download-alt">link download file</i></a>';
                // })

                ->editColumn('pdf_surat', function ($row) {
                    return '<a href="' . asset("http://localhost/mailoo/storage/app/public/" . $row->pdf_surat) . '" class="btn btn-xs  btn-primary" target="_blank"><i class="glyphicon glyphicon-download-alt">link download file</i></a>';
                })
                ->filter(function ($instance) use ($request) {
                    if ($request->get('status') == '0' || $request->get('status') == '1' || $request->get('status') == '2') {
                        $instance->where('status', $request->get('status'));
                    }
                    if ($request->get('status_ii') == '0' || $request->get('status_ii') == '1') {
                        $instance->where('status_ii', $request->get('status_ii'));
                    }
                    if (!empty($request->get('search'))) {
                        $instance->where(function ($w) use ($request) {
                            $search = $request->get('search');
                            $w->orWhere('asal_surat', 'LIKE', "%$search%")
                                ->orWhere('nomor_surat', 'LIKE', "%$search%")
                                ->orWhere('nomor_surat', 'LIKE', "%$search%");
                        });
                    }
                })
                ->rawColumns(['status', 'status_ii', 'pdf_surat'])
                ->make(true);
        }


        $data = T_mainsurat::all();
        return view('livewire.kocak2', ['datas' => $data])
            ->extends('layouts.app');

        // return view('livewire.kocak')
        //     ->extends('layouts.app');
    }


    // public function render()
    // {
    //     $data = T_mainsurat::all();
    //     return view('livewire.kocak', ['datas' => $data])
    //         ->extends('layouts.app');
    // }
}