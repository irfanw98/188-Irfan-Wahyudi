<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SuratKeluar;
use App\Http\Requests\SuratKeluar\{
    StoreSuratKeluarRequest, UpdateSuratKeluarRequest
};
use Illuminate\Support\Facades\{
    DB, File, Storage
};

class SuratKeluarAdminController extends Controller
{
    public function index()
    {
        return view('admin.surat-keluar.index',[
            'suratkeluars' => DB::table('outgoing_letters')
                                    ->orderBy('id', 'DESC')
                                    ->paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.surat-keluar.create');
    }

    public function store(StoreSuratKeluarRequest $request)
    {
        if ($request->hasFile('file')) {
            $files = $request->file('file');
            $extension = $files->getClientOriginalExtension();
            $filename = base64_encode(time()) . '.' . $extension;
            $files->move(public_path().'/suratkeluar', $filename);
            $files = $filename;
        } else {
            $filename = '';
        }

        DB::table('outgoing_letters')->insert([
            'user_id'       => 1,
            'no_letter'     => $request->no_letter,
            'regarding'     => $request->regarding,
            'purpose'       => $request->purpose,
            'date_letter'   => $request->date_letter,
            'file'          => $filename,
        ]);

        return redirect()->route('surat-keluar.index')->with('message', 'Surat keluar berhasil ditambahkan.');
    }

    public function show(int $suratkeluar)
    {
        return view('admin.surat-keluar.detail', [
            'suratkeluar' => DB::table('outgoing_letters')
                                    ->where('id', $suratkeluar)
                                    ->orderBy('id', 'DESC')
                                    ->first()
        ]);
    }

    public function edit(int $suratkeluar)
    {
        return view('admin.surat-keluar.edit', [
            'suratkeluar' => DB::table('outgoing_letters')
                                    ->where('id', $suratkeluar)
                                    ->first()
        ]);
    }

    public function update(UpdateSuratKeluarRequest $request, int $suratkeluar)
    {
        $surat = SuratKeluar::where('id', $suratkeluar)->first();

        if ($request->hasFile('file')) {
            File::delete('suratkeluar/'. $surat->file);
            Storage::disk('public')->delete("suratkeluar/" . $surat->file);
            $files = $request->file('file');
            $extension = $files->getClientOriginalExtension();
            $filename = base64_encode(time()) . '.' . $extension;
            $files->move(public_path().'/suratkeluar', $filename);
            $files = $filename;
        } else {
            $filename = $surat->file;
        }

        $surat->update([
            'user_id'       => 1,
            'no_letter'     => $request->no_letter,
            'regarding'     => $request->regarding,
            'purpose'       => $request->purpose,
            'date_letter'   => $request->date_letter,
            'file'          => $filename,
        ]);

        return redirect()->route('surat-keluar.index')->with('message', 'Surat keluar berhasil diedit.');
    }

    public function destroy(int $suratkeluar)
    {
        $surat = SuratKeluar::where('id', $suratkeluar)->first();
        File::delete('suratkeluar/'. $surat->file);
        Storage::disk('public')->delete("suratkeluar/" . $surat->file);
        $surat->delete();

        return response()->json(['status' => 200, 'message' => 'Surat keluar berhasil dihapus.']);
    }
}