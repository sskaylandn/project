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
        $data_whitelist = Whitelist::orderBy('jenis_software', 'asc')->get();
        if(Auth()->user()->role == 'admin'){
            
            return view('admin.whitelist.index',[ 
                'title'=>'Software Whitelist'
            ],compact('data_whitelist'));
        }
        elseif(Auth()->user()->role == 'user'){
            $data_whitelist = Whitelist::orderBy('jenis_software', 'asc')->get();
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
        Whitelist::create([
            'jenis_software' => $request->jenis_software,
            'nama_software' => $request->nama_software,
            
         ]);  
  
         if (Auth()->user()->role == 'admin') {
             return redirect('admin/index-whitelist');
         } 
         elseif(Auth()->user()->role == 'user'){
             return redirect('user/index-whitelist');
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
        
        if(Auth()->user()->role == 'admin'){
            $whitelist = Whitelist::findorfail($id);
            return view('admin.whitelist.edit',[
                'title'=>'Edit Data Software Whitelist'
            ],compact('whitelist'));
        }
        elseif(Auth()->user()->role == 'user'){
            $whitelist = Whitelist::findorfail($id);
            return view('user.whitelist.edit',[
                'title'=>'Edit Data Software Whitelist'  
            ],compact('whitelist'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $whitelist = Whitelist::findorfail($id);
         $whitelist->update($request->all());

         if (Auth()->user()->role == 'admin') {
            return redirect('admin/index-whitelist');
        } 
        elseif(Auth()->user()->role == 'user'){
            return redirect('user/index-whitelist');
        }
         
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $whitelist = Whitelist::findorfail($id);
        $whitelist->delete();
        return redirect('admin/index-whitelist');
    }
}
