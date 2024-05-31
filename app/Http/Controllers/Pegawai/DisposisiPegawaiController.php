<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\Disposisi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DisposisiPegawaiController extends Controller
{
    public function index()
    {
        $disposisis = DB::table('dispositions')
                            ->join('users', 'users.id', '=', 'dispositions.user_id')
                            ->join('incoming_letters', 'incoming_letters.id', '=', 'dispositions.incoming_letter_id')
                            ->select('dispositions.*', 'users.name as pegawai', 'users.position', 'incoming_letters.no_letter as no_surat', 'incoming_letters.regarding as perihal', 'incoming_letters.file as file')
                            ->where('dispositions.user_id', '=', Auth::user()->id)
                            ->orderBy('id', 'DESC')
                            ->paginate(10);

        return view('pegawai.disposisi.index', compact('disposisis'));
    }

    public function update(int $disposisi)
    {
        $disposisi = Disposisi::where('id', $disposisi)->first();

        if($disposisi->user_id == Auth::user()->id && $disposisi->status == 1)
        {
            $disposisi->update(['status' => 2]);

            return response()->json(['status' => 200, 'message' => 'Disposisi berhasil diterima.']);
        } else {
            return response()->json(['status' => 204, 'message' => 'Disposisi sudah diterima sebelumnya.']);
        }
    }
}