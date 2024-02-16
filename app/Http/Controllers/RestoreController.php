<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\restore;
use App\Models\backup;
use Illuminate\Http\Request;

class RestoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth()->user()->role == 'admin'){
            $data_restore = Restore::all();
            return view('admin.restore.index',[
                'title'=>'Restore'
            ],compact('data_restore'));
        }
        elseif(Auth()->user()->role == 'user'){
            $data_restore = Restore::all();
            return view('user.restore.index',[
                'title'=>'Riwayat Restore'  
            ],compact('data_restore'));
        }
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_backup = Backup::all();
        return view('user.restore.create',[
            'title'=>'Formulir Restore'
        ],compact('data_backup'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        Restore::create([
            'periode' => $request->periode,
            'tanggal' => $request->tanggal,
            'objek' => $request->objek,
            'status' => $request->status,
            'pj' => $request->pj,
            'keterangan' => $request->keterangan
        ]);
        if (Auth::user()->role == 'admin') {
            return redirect('admin/riwayat_backup');
        } 
        elseif(Auth::user()->role == 'user'){
            return redirect('user/index-restore');
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
        $data_backup = Backup::all();
        $restore = Restore::findorfail($id);
        return view('user.restore.edit',[
            'title' => 'Edit Data Restore'
        ],compact('restore','data_backup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $restore = Restore::findorfail($id);
        $restore->update($request->all());
        return redirect('user/index-restore');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $restore = Restore::findorfail($id);
        $restore->delete();
        return redirect('user/index-restore');
    }
}
