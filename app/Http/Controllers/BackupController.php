<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Backup;
use Illuminate\Http\Request;

class BackupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth()->user()->role == 'admin'){
            $data_backup = Backup::all();
            return view('admin.backup.index',[
                'title'=>'Backup'
            ],compact('data_backup'));
        }
        elseif(Auth()->user()->role == 'user'){
            $data_backup = Backup::all();
            return view('user.backup.index',[
                'title'=>'Riwayat Backup'  
            ],compact('data_backup'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.backup.create',[
            'title'=>'Formulir Backup'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Backup::create([
            'periode' => $request->periode,
            'tanggal' => $request->tanggal,
            'objek' => $request->objek,
            'pj' => $request->pj,
            'keterangan' => $request->keterangan
         ]);
  
         if (Auth::user()->role == 'admin') {
             return redirect('admin/riwayat_backup');
         } 
         elseif(Auth::user()->role == 'user'){
             return redirect('user/index-backup');
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
        $backup = Backup::findorfail($id);
        return view('user.backup.edit',[
            'title' => 'Edit Data Backup'
        ],compact('backup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $backup = Backup::findorfail($id);
        $backup->update($request->all());
        return redirect('user/index-backup');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $backup = Backup::findorfail($id);
        $backup->delete();
        return redirect('user/index-backup');
    }
}
