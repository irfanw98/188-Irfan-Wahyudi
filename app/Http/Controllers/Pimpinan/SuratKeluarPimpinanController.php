<?php

namespace App\Http\Controllers\Pimpinan;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SuratKeluarPimpinanController extends Controller
{
    public function index()
    {
        return view('pimpinan.suratkeluar.index', [
            'suratkeluars' => DB::table('outgoing_letters')
                                    ->orderBy('id', 'DESC')
                                    ->paginate(10)
        ]);
    }

    public function show(int $suratkeluar)
    {
        return view('pimpinan.suratkeluar.detail', [
            'suratkeluar' => DB::table('outgoing_letters')
                                    ->where('id', $suratkeluar)
                                    ->orderBy('id', 'DESC')
                                    ->first()
        ]);
    }
}