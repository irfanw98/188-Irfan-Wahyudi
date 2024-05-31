<?php

namespace App\Http\Controllers\Pimpinan;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardPimpinanController extends Controller
{
    public function index()
    {
        return view('pimpinan.dashboard', [
            'JumlahDisposisi'   => DB::table('dispositions')->get()->count(),
            'JumlahSuratMasuk'  => DB::table('incoming_letters')->get()->count(),
            'JumlahSuratKeluar' => DB::table('outgoing_letters')->get()->count(),
        ]);
    }
}
