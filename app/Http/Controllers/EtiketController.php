<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\DetailUser;
use App\Models\User;
use App\Models\Orderan;



class EtiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = Layanan::all();
        return view('index', compact('layanan'));
    }

    public function detail($slug)
    {
        $detail = Layanan::where('slug', $slug)->firstOrFail();
       
        return view('detail', compact('detail'));
    }

    public function profile()
    {
        $user = Auth::user();
        $detailUser = DetailUser::where('user_id', $user->id)->first();
    
        return view('profile', compact('detailUser'));
    }

    public function profileupdate(Request $request)
    {
        $user = User::find(Auth::id()); // Mencari user yang sedang login
       
        if ($user->profile) {
            
            $user->profile->update($request->all());

            return redirect()->back()->with('success', 'Profile has been updated!');
        } else {
         
            $user->profile()->create($request->all());

            return redirect()->back()->with('success', 'Profile has been created!');
        }
    }

    public function riwayat()
    {
        $user = Auth::user();
        $orderan = Orderan::where('user_id', $user->id)->get();
        return view('riwayat', compact('orderan','user'));
    }

    
}
