<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index(Request $request)
    {
        $pengumuman = Pengumuman::orderBy('created_at', 'desc')->paginate(2);
        $kegiatan = Kegiatan::orderBy('created_at', 'desc')->paginate(2);
        return view('index', compact('pengumuman','kegiatan'));
    }


    public function showLoginForm()
    {
        return view('admin.login.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil
            return redirect()->intended('/profile');
        }

        // Jika autentikasi gagal
        return back()->withErrors([
            'message' => 'Invalid credentials.',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
