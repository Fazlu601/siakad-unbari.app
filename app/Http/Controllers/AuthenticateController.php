<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function authenticate_admin(Request $request) : RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/mahasiswa/data');
        }
 
        return back();
    
    }

    public function authenticate_mahasiswa(Request $request) : RedirectResponse
    {
        
        $credentials = $request->validate([
            'nim' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::guard('mahasiswas')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/mahasiswa')->with('success', 'Berhasil Login!');
        }
 
        return back()->with('fail', 'Login Gagal!');
    
    }

    public function logout_admin(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login')->with('success', 'Berhasil Logout!');
    }

    public function logout_mahasiswa(Request $request): RedirectResponse
    {
        Auth::guard('mahasiswas')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/mahasiswa/login')->with('success', 'Berhasil Logout!');
    }
}
