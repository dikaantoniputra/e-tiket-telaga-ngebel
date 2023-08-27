<?php

namespace App\Http\Controllers;

use App\Models\Orderan;
use App\Models\DetailUser;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class OrderanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        if ($request->ajax()) {
            $model = 'orderan';
            // return Datatables::of(User::select(['*']))
            return Datatables::of(Orderan::with('user','profile','boking'))
            
        // ->addIndexColumn()
                     ->addColumn('action', function ($object) use ($model) {
                        $text = "";
                        $text.= '<a href="'.route($model.'.edit', [$model => $object]).'" class="btn btn-sm btn-success"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                         <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                         <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                         <path d="M16 5l3 3"></path>
                         </svg> Edit</a>';
                         
                         return $text;
                          })  

                          
                          ->editColumn('status', function ($object) {
                            $text = "";
                            if ($object->status == '0') $text = "Belum Bayar";
                            if ($object->status == '1') $text = "Succes";
                            if ($object->status == '2') $text = "Pending";
                            return $text;
                            })

                            ->editColumn('user.profile', function ($object) {
                                $profile = $object->user->profile;
                                return $profile ? $profile->name : '';
                            })
        

                        

                    ->addIndexColumn()
                    ->rawColumns(['status','action'])
                    ->make(true);

        }
       
       return view('admin.page.orderan.view');

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
     * @param  \App\Models\Orderan  $orderan
     * @return \Illuminate\Http\Response
     */
    public function show(Orderan $orderan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orderan  $orderan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orderan = Orderan::findOrFail($id); // Find the order with the given ID
        $user = User::find($orderan->user_id); // Find the user associated with the order
    
        // Retrieve additional user details
        $detailUser = DetailUser::where('user_id', $user->id)->first();
    
        return view('admin.page.orderan.edit', compact('orderan', 'user', 'detailUser'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orderan  $orderan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $company = Orderan::find($id);
        if (!$company) {
            return redirect()->route('orderan.index')->with('error', 'Data perusahaan tidak ditemukan.');
        }

        $company->status = 1; 

        $company->save();

        return redirect()->route('orderan.index')->with('success', 'Data perusahaan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orderan  $orderan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orderan $orderan)
    {
        //
    }
}
