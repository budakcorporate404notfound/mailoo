<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FullCalenderController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $data = Event::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->where('unit_kerja', '=', Auth::user()->unit_kerja)
                ->get(['id', 'title', 'start', 'end', 'unit_kerja']);

            return response()->json($data);
        }

        return view('fullcalender');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {

        switch ($request->type) {
            case ('add'):
                if ($request->type == 'add' && Auth::user()->jabatan == '5' || Auth::user()->jabatan == '6') {
                    $event = Event::create([
                        'title' => $request->title,
                        'start' => $request->start,
                        'end' => $request->end,
                        'unit_kerja' => Auth::user()->unit_kerja
                    ]);

                    return response()->json($event);
                    break;
                }

            case 'update':
                if ($request->type == 'update' && Auth::user()->jabatan == '5' || Auth::user()->jabatan == '6') {
                    $event = Event::find($request->id)->update([
                        'title' => $request->title,
                        'start' => $request->start,
                        'end' => $request->end,
                        'unit_kerja' => Auth::user()->unit_kerja
                    ]);
                    return response()->json($event);
                    break;
                }

            case 'delete':
                if ($request->type == 'delete' && Auth::user()->jabatan == '5' || Auth::user()->jabatan == '6') {
                    $event = Event::find($request->id)->delete();

                    return response()->json($event);
                    break;
                }

            default:
                # code...
                break;
        }

        // if ($request->type == 'add' && Auth::user()->jabatan == '5' || Auth::user()->jabatan == '6') {
        //     $event = Event::create([
        //         'title' => $request->title,
        //         'start' => $request->start,
        //         'end' => $request->end,
        //         'unit_kerja' => Auth::user()->unit_kerja
        //     ]);

        //     return response()->json(['success' => 'success']);
        // } else {
        //     return response()->json(['failed' => 'failed']);
        // }

        // if ($request->type == 'update') {
        //     $event = Event::find($request->id)->update([
        //         'title' => $request->title,
        //         'start' => $request->start,
        //         'end' => $request->end,
        //     ]);

        //     return response()->json($event);
        // }

        // if ($request->type == 'delete') {
        //     $event = Event::find($request->id)->delete();

        //     return response()->json($event);
        // }
    }
}