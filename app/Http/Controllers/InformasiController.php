<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        if ($request->ajax()) {
            $model = 'informasi';
            // return Datatables::of(User::select(['*']))
            return Datatables::of(Informasi::select('*'))
            
        // ->addIndexColumn()
                     ->addColumn('action', function ($object) use ($model) {
                        $text = "";
                        $text.= '<a href="'.route($model.'.edit', [$model => $object]).'" class="btn btn-sm btn-success"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                         <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                         <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                         <path d="M16 5l3 3"></path>
                         </svg> Edit</a>';
                        //  $text.= ' <a href="'.route($model.'.destroy', [$model => $object]).'" class="btn btn-sm btn-danger btn-delete"><i class="fas fa-trash"></i> Hapus</a>';
                         return $text;
                          })   

                        

                    ->addIndexColumn()
                    ->rawColumns(['action'])
                    ->make(true);

        }
       
       return view('admin.page.informasi.view');

    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function show(Informasi $informasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informasi = Informasi::select('*')->findOrFail($id);
        return view('admin.page.informasi.edit',compact('informasi'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'jam_buka' => 'required',
            'jam_tutup' => 'required',
            'hari_buka' => 'required',
            'hari_tutup' => 'required',
            'harga' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
    
        // Cari data layanan berdasarkan ID
        $layanan = Informasi::findOrFail($id);
    
        // Mengupdate data di database
        $layanan->judul = $request->judul;
        $layanan->deskripsi = $request->deskripsi;
        $layanan->jam_buka = $request->jam_buka;
        $layanan->jam_tutup = $request->jam_tutup;
        $layanan->hari_buka = $request->hari_buka;
        $layanan->hari_tutup = $request->hari_tutup;
        $layanan->harga = $request->harga;
    
    
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = $request->file('gambar')->store('public/gambar');
            $layanan->gambar = 'storage/' . substr($path, 7);
        }
    
        $layanan->save();
    
        return redirect()->route('informasi.index')->with('success', 'Data layanan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasi $informasi)
    {
        //
    }
}
