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
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin');

             } else {
                return redirect()->intended('/');
            }
        }

        return redirect()->back()->withInput()->withErrors(['email' => 'email or password is invalid']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
