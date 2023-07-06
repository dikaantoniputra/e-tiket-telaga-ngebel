<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DetailUser;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        if ($request->ajax()) {
            $model = 'user';
            // return Datatables::of(User::select(['*']))
            return Datatables::of(User::with('profile'))
            
        // ->addIndexColumn()
                     ->addColumn('action', function ($object) use ($model) {
                        $text = "";
                        $text.= '<a href="'.route($model.'.edit', [$model => $object]).'" class="btn btn-sm btn-success"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                         <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                         <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                         <path d="M16 5l3 3"></path>
                         </svg> Edit</a>';
                         $text.= ' <a href="'.route($model.'.destroy', [$model => $object]).'" class="btn btn-sm btn-danger btn-delete"><i class="fas fa-trash"></i> Hapus</a>';
                         return $text;
                          })   

                        

                    ->addIndexColumn()
                    ->rawColumns(['action'])
                    ->make(true);

        }
       
       return view('admin.page.user.view');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('admin.page.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input form
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password_in_2' => 'required|min:8',
            'name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
            'phone' => 'required',
        ]);
    
        // Simpan data ke database
        $slug = Str::random(10);
    
        $user = new User();
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password_in_2'));
        $user->slug = $slug;
        $user->save();
    
        $detail = new DetailUser();
        $detail->name = $request->input('name');
        $detail->last_name = $request->input('last_name');
        $detail->address = $request->input('address');
        $detail->city = $request->input('city');
        $detail->zip_code = $request->input('zip_code');
        $detail->country = $request->input('country');
        $detail->phone = $request->input('phone');
        $detail->user_id = $user->id; // Menyimpan ID user ke dalam field user_id pada DetailUser
        $detail->save();
    
        return redirect()->route('daftar')->with('success', 'Data perusahaan berhasil disimpan.');
    } 
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::select('*')->findOrFail($id);
        return view('admin.page.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi input form
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        // Temukan data perusahaan berdasarkan ID
        $perusahaan = User::findOrFail($id);
    
        // Perbarui data perusahaan dengan input baru
        $perusahaan->username = $request->input('username');
        $perusahaan->password = bcrypt($request->input('password'));
        // Jika ada lebih banyak kolom yang perlu diperbarui, tambahkan di sini
    
        // Simpan perubahan ke database
        $perusahaan->save();
    
        // Redirect ke halaman yang diinginkan setelah pembaruan data berhasil
        return redirect()->route('user.index')->with('success', 'Data perusahaan berhasil diperbarui.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Temukan data perusahaan berdasarkan ID
        $perusahaan = User::findOrFail($id);
    
        // Hapus data perusahaan dari database
        $perusahaan->delete();
    
        // Redirect ke halaman yang diinginkan setelah penghapusan data berhasil
        return redirect()->route('user.index')->with('success', 'Data perusahaan berhasil dihapus.');
    }
    
}
