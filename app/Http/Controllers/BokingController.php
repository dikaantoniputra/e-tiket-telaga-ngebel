<?php

namespace App\Http\Controllers;

use App\Models\Boking;
use App\Models\Orderan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class BokingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // Memeriksa apakah pengguna telah login
        if (Auth::check()) {
            $user_id = Auth::id();
    
            // Ambil inputan total dari permintaan Simpan
            $booking_id = $request->input('booking_id');
            $tgl_boking = $request->input('tgl_boking');
            $harga = $request->input('harga');
            $jumlah = $request->input('jumlah');
            $deskripsi = $request->input('deskripsi');
            $metode = $request->input('metode_pembayaran_id');

            $total = $harga * $jumlah;

            $slug = Str::random(5) . date('Ymd');
    
            // Membuat pesanan ('order') dan menyimpannya ke dalam database
            $order = Orderan::create([
                'user_id' => $user_id,
                'slug' => $slug,
                'jumlah' => $total,
            ]);

            Boking::create([
                    'orderan_id' => $order->id,
                    'user_id' => $user_id,
                    'layanan_id' => $booking_id,
                    'tgl_boking' => $tgl_boking,
                    'jumlah' => $jumlah,
                    'deskripsi' => $deskripsi,
                    
                ]);
    
                
          
            
    
            return redirect()->route('index')->with('success', 'Transaksi berhasil disimpan.');
        }
    
        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boking  $boking
     * @return \Illuminate\Http\Response
     */
    public function show(Boking $boking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boking  $boking
     * @return \Illuminate\Http\Response
     */
    public function edit(Boking $boking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boking  $boking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boking $boking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boking  $boking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boking $boking)
    {
        //
    }
}
