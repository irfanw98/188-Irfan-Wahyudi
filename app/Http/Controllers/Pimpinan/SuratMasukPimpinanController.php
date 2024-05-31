<?php

namespace App\Http\Controllers\Pimpinan;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SuratMasukPimpinanController extends Controller
{
    public function index()
    {
        return view('pimpinan.suratmasuk.index',[
            'suratmasuks'   => DB::table('incoming_letters')
                                    ->select('incoming_letters.*', 'senders.name as pengirim')
                                    ->join('senders', 'senders.id', '=', 'incoming_letters.sender_id')
                                    ->orderBy('incoming_letters.id', 'DESC')
                                    ->paginate(10)
        ]);
    }

    public function show(int $suratmasuk)
    {
        return view('pimpinan.suratmasuk.detail',[
            'suratmasuk' => DB::table('incoming_letters')
                                ->select('incoming_letters.*', 'senders.name as pengirim')
                                ->join('senders', 'senders.id', '=', 'incoming_letters.sender_id')
                                ->where('incoming_letters.id', $suratmasuk)
                                ->first()
        ]);
    }
}