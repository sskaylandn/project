<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkuisisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth()->user()->role == 'admin'){
            
            return view('admin.akuisisi.index',[
                'title'=>'Riwayat Monitoring'
            ]);
        }
        elseif(Auth()->user()->role == 'user'){
            
            return view('user.akuisisi.index',[
                'title'=>'Riwayat Monitoring'  
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.akuisisi.create',[
            'title'=>'Monitoring Perangkat User'
        ]);
    }

    public function aset()
    {
        return view('admin.akuisisi.aset',[
            'title'=>'Daftar Pemegang Aset'
        ]);
    }

    public function tambahaset()
    {
        return view('admin.akuisisi.tambahaset',[
            'title'=>'Daftar Pemegang Aset'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
