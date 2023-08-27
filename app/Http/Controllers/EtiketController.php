<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Layanan;
use App\Models\Orderan;
use App\Models\Rekening;
use App\Models\DetailUser;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use PDF;

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

              // Send email notification
        $recipientEmail = $company->user->email;
        $subject = 'Order Updated';
        $messageText = 'Order berhasil Bayar.';

        Mail::send([], [], function ($message) use ($recipientEmail, $subject, $messageText, $company) {
            $message->to($recipientEmail)
                     ->subject($subject)
                    ->setBody(view('emails.updated', compact('company', 'messageText')), 'text/html');
        });

        return redirect()->route('riwayat')->with('success', 'Data perusahaan berhasil diperbarui.');
    }


public function tiket()
{
    $user = Auth::user();
    $orderan = Orderan::where('user_id', $user->id)->get();
    return view('tiket', compact('orderan','user'));
}

public function showPasswordForm()
    {
        return view('password');
    }






    public function updatePassword(Request $request)
    {
        $user = Auth::user();
    
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);
    
        // Check if the old password matches the user's current password
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->with('error', 'Password Lama Salah');
        }
    
        // Update the user's password
        $user->update([
            'password' => Hash::make($request->new_password),
        ]);
    
        // Show success message
        Session::flash('success', 'Password berhasil diubah.');

        // dd(session('success'));
    
        return redirect()->route('profile.password');
    }




    public function exportPDF()
{
    $data = Orderan::all(); // Fetch data from the Orderan model

    $pdf = PDF::loadView('admin.pdf.template', compact('data')); // Create a PDF instance

    return $pdf->download('table_data.pdf'); // Download the PDF file
}

    



    
}
