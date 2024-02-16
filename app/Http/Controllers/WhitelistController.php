<?php

namespace App\Http\Controllers;

use App\Models\Whitelist;
use Illuminate\Http\Request;

class WhitelistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_whitelist = Whitelist::all();
        if(Auth()->user()->role == 'admin'){
            
            return view('admin.whitelist.index',[
                'title'=>'Software Whitelist'
            ],compact('data_whitelist'));
        }
        elseif(Auth()->user()->role == 'user'){
            $data_whitelist = Whitelist::all();
            return view('user.whitelist.index',[
                'title'=>'Software Whitelist'  
            ],compact('data_whitelist'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.whitelist.create',[
            'title'=>'Software Whitelist'
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
