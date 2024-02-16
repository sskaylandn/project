<?php

namespace App\Http\Controllers;

use App\Models\Fisik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FisikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth()->user()->role == 'admin'){
            $data_fisik = Fisik::all();
            return view('admin.fisik.index',[
                'title'=>'Perawatan Utilitas'
            ],compact('data_fisik'));
        }
        elseif(Auth()->user()->role == 'user'){
            $data_fisik = Fisik::all();
            return view('user.fisik.index',[
                'title'=>'Perawatan Utilitas'  
            ],compact('data_fisik'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.fisik.create',[
            'title'=>'Formulir Perawatan Utilitas'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Fisik::create([
            'nama_fisik' => $request->nama_fisik,
            'jumlah_fisik' => $request->jumlah_fisik,
            'tglperiksa_fisik' => $request->tglperiksa_fisik,
            'status_fisik' => $request->status_fisik,
            'tindak_lanjut' => $request->tindak_lanjut,
            'pic_fisik' => $request->pic_fisik,
            'keterangan' => $request->keterangan
         ]); 
  
         if (Auth::user()->role == 'admin') {
             return redirect('admin/index-fisik');
         } 
         elseif(Auth::user()->role == 'user'){
             return redirect('user/index-fisik');
         }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fisik = Fisik::findorfail($id);
        return view('user.fisik.edit',[
            'title' => 'Edit Data Perawatan Utilitas'
        ],compact('fisik'));
    } 

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
     {
         $fisik = Fisik::findorfail($id);
         $fisik->update($request->all());
         return redirect('user/index-fisik');
     }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
