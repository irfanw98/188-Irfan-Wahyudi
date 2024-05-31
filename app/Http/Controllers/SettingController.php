<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettingRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function edit(int $id)
    {
        $user = DB::table('users')
                    ->where([
                        'id'      => $id,
                        'role_id' => Auth::user()->role_id
                    ])
                    ->first();

        if ($user) {
            return view('setting', compact('user'));
        } else {
            return redirect()->back();
        }
    }

    public function update(UpdateSettingRequest $request, int $id)
    {
        if (empty(request()->password)){
            $user = request()->except(['_token', '_method', 'password']);
        } else {
            $user = request()->except(['_token', '_method']);

            $user = [
                'name'      => request()->name,
                'phone'     => request()->phone,
                'email'     => request()->email,
                'position'  => request()->position,
                'password'  => bcrypt(request()->password)
            ];
        }

        DB::table('users')
            ->where([
                'id'      => $id,
                'role_id' => Auth::user()->role_id
            ])
            ->update($user);

        return back()->with('message', 'Profile berhasil diubah.');
    }
}