<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\Pegawai\{
    StorePegawaiRequest,
    UpdatePegawaiRequest
};

class PegawaiController extends Controller
{
    public function index()
    {
        return view('admin.pegawai.index', [
                        'pegawais' => DB::table('users')
                                            ->where('role_id', 3)
                                            ->orderBy('id', 'DESC')
                                            ->paginate(10)
                    ]);
        }

    public function create()
    {
        return view('admin.pegawai.create');
    }

    public function store(StorePegawaiRequest $request)
    {
        DB::table('users')->insert([
           'name'       => $request->name,
           'email'      => $request->email,
           'password'   => bcrypt(12345),
           'position'   => $request->position,
           'phone'      => $request->phone,
           'role_id'    => 3,
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('pegawai.index')->with('message', 'Pegawai berhasil ditambahkan.');
    }

    public function edit(int $pegawai)
    {
        return view('admin.pegawai.edit', [
                        'pegawai' => DB::table('users')->where(['id' => $pegawai, 'role_id' => 3])->first()
                    ]);
    }

    public function update(UpdatePegawaiRequest $request, int $pegawai)
    {
        DB::table('users')
            ->where([
                'id'      => $pegawai,
                'role_id' => 3
            ])
            ->update([
                'name'       => $request->name,
                'email'      => $request->email,
                'position'   => $request->position,
                'phone'      => $request->phone,
                'updated_at' => Carbon::now(),
            ]);

        return redirect()->route('pegawai.index')->with('message', 'Pegawai berhasil diedit.');
    }

    public function destroy(int $pegawai)
    {
        DB::table('users')->where(['id' => $pegawai, 'role_id' => 3])->delete();

        return response()->json(['status' => 200, 'message' => 'Pegawai berhasil dihapus.']);
    }
}