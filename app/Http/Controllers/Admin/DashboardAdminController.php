<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'JumlahPengirim'    => DB::table('senders')->get()->count(),
            'JumlahSuratMasuk'  => DB::table('incoming_letters')->get()->count(),
            'JumlahSuratKeluar' => DB::table('outgoing_letters')->get()->count()
        ]);
    }
}