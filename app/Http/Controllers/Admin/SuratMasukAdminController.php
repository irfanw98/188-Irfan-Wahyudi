<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SuratMasuk;
use App\Http\Requests\SuratMasuk\{
    StoreSuratMasukRequest, UpdateSuratMasukRequest
};
use Illuminate\Support\Facades\{
    DB, File, Storage
};

class SuratMasukAdminController extends Controller
{

    public function index()
    {
        return view('admin.surat-masuk.index', [
            'suratmasuks' => DB::table('incoming_letters')
                                ->join('senders', 'senders.id', '=', 'incoming_letters.sender_id')
                                ->select('incoming_letters.*', 'senders.name as pengirim')
                                ->paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.surat-masuk.create', ['pengirims' => DB::table('senders')->orderBy('name')->get()]);
    }

    public function store(StoreSuratMasukRequest $request)
    {
        if ($request->hasFile('file')) {
            $files = $request->file('file');
            $extension = $files->getClientOriginalExtension();
            $filename = base64_encode(time()) . '.' . $extension;
            $files->move(public_path().'/suratmasuk', $filename);
            $files = $filename;
        } else {
            $filename = '';
        }

        DB::table('incoming_letters')->insert([
            'user_id'       => 1,
            'sender_id'     => $request->sender_id,
            'no_letter'     => $request->no_letter,
            'regarding'     => $request->regarding,
            'date_letter'   => $request->date_letter,
            'date_received' => $request->date_received,
            'file'          => $filename
        ]);

        return redirect()->route('surat-masuk.index')->with('message', 'Surat masuk berhasil ditambahkan.');
    }

    public function show(int $suratmasuk)
    {
        return view('admin.surat-masuk.detail', [
            'suratmasuk' => DB::table('incoming_letters')
                                ->join('senders', 'senders.id', '=', 'incoming_letters.sender_id')
                                ->select('incoming_letters.*', 'senders.name as pengirim')
                                ->where('incoming_letters.id', $suratmasuk)
                                ->first()
        ]);
    }

    public function edit(int $suratmasuk)
    {
        return view('admin.surat-masuk.edit', [
            'suratmasuk' => DB::table('incoming_letters')->where('id', $suratmasuk)->first(),
            'pengirims'  => DB::table('senders')->orderBy('name')->get()
        ]);
    }

    public function update(UpdateSuratMasukRequest $request, int $suratmasuk)
    {
        $surat = SuratMasuk::where('id', $suratmasuk)->first();

        if ($request->hasFile('file')) {
            File::delete('suratmasuk/'. $surat->file);
            Storage::disk('public')->delete("suratmasuk/" . $surat->file);
            $files = $request->file('file');
            $extension = $files->getClientOriginalExtension();
            $filename = base64_encode(time()) . '.' . $extension;
            $files->move(public_path().'/suratmasuk', $filename);
            $files = $filename;
        } else {
            $filename = $surat->file;
        }

        $surat->update([
            'user_id'       => 1,
            'sender_id'     => $request->sender_id,
            'no_letter'     => $request->no_letter,
            'regarding'     => $request->regarding,
            'date_letter'   => $request->date_letter,
            'date_received' => $request->date_received,
            'file'          => $filename,
        ]);

        return redirect()->route('surat-masuk.index')->with('message', 'Surat masuk berhasil diedit.');
    }

    public function destroy(int $suratmasuk)
    {
        $surat = SuratMasuk::where('id', $suratmasuk)->first();
        File::delete('suratmasuk/'. $surat->file);
        Storage::disk('public')->delete("suratmasuk/" . $surat->file);
        $surat->delete();

        return response()->json(['status' => 200, 'message' => 'Surat masuk berhasil dihapus.']);
    }
}