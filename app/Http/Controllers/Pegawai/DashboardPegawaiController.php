<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardPegawaiController extends Controller
{
    public function index()
    {
        return view('pegawai.dashboard',[
            'JumlahDisposisi' => DB::table('dispositions')->where('user_id', Auth::user()->id)->get()->count(),
            'JumlahDiterima'  => DB::table('dispositions')
                                        ->where([
                                            'user_id' => Auth::user()->id,
                                            'status'  => 2
                                        ])
                                        ->get()
                                        ->count(),
            'JumlahBelumDiterima'  => DB::table('dispositions')
                                        ->where([
                                            'user_id' => Auth::user()->id,
                                            'status'  => 1
                                        ])
                                        ->get()
                                        ->count()
        ]);
    }
}