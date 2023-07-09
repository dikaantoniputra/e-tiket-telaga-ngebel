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

    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'name_transfer' => 'required',
        'nama_bank' => 'required',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
    ]);
    
    $company = Orderan::find($id);
    if (!$company) {
        return redirect()->route('layanan.index')->with('error', 'Data perusahaan tidak ditemukan.');
    }

    $company->name_transfer = $request->name_transfer;
    $company->nama_bank = $request->nama_bank;
    $company->status = 2; // Update status menjadi 2


    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $path = $request->file('gambar')->store('public/gambar');
        $company->gambar = 'storage/' . substr($path, 7);
    }

    $company->save();

    return redirect()->route('riwayat')->with('success', 'Data perusahaan berhasil diperbarui.');
}


public function tiket()
{
    $user = Auth::user();
    $orderan = Orderan::where('user_id', $user->id)->get();
    return view('tiket', compact('orderan','user'));
}


    
}
