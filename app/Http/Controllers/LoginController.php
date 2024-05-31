<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = [
            'email'     => $request->email,
            'password'  => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role_id == 1) {
                return redirect()->intended(route('dashboard.admin'));
            } elseif(Auth::user()->role_id == 2) {
                return redirect()->intended(route('pimpinan.dashboard'));
            } else {
                return redirect()->intended(route('pegawai.dashboard'));
            }
        }

        return back()->with('loginError', 'Email atau password salah.');
    }
}