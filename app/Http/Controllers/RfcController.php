<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rfc;
use Illuminate\Support\Facades\DB;
class RfcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth()->user()->role == 'admin'){
            $data_pengajuan = DB::table('rfc')->where('acc', 'Belum disetujui')->get();
            return view('admin.rfc.index',[
            'title'=>'Request For Change'
            ],compact('data_pengajuan'));
        }
        elseif(Auth()->user()->role == 'user'){
            $data_pengajuan = DB::table('rfc')->where('pengaju', Auth()->user()->username)->get();
            return view('user.rfc.index',[
            'title'=>'Request For Change'
            ],compact('data_pengajuan'));
        }
        
    }

    public function data_rfc(){
        $data_rfc = Rfc::all();
        return view('admin.rfc.history',[
            'title'=>'Riwayat RFC'  
        ], compact('data_rfc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.rfc.create',[
            'title'=>'Formulir Pengajuan RFC'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Rfc::create([
            'tgl_req' => $request->tgl_req,
            'pengaju' => $request->pengaju,
            'detail' => $request->detail,
            'tindak_lanjut' => $request->tindak_lanjut,
            'tgl_perubahan' => $request->tgl_perubahan,
            'tgl_selesai' => $request->tgl_selesai,
            'bidang' => $request->bidang,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('user/index-rfc');
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
            $rfc = Rfc::findorfail($id);
            return view('admin.rfc.edit',[
                'title' => 'Edit Formulir RFC'
            ],compact('rfc'));
        }
        elseif(Auth()->user()->role == 'user'){
            $rfc = Rfc::findorfail($id);
            return view('user.rfc.edit',[
            'title' => 'Edit Formulir RFC'
            ],compact('rfc'));
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rfc = Rfc::findorfail($id);
        $rfc->update($request->all());
        if(Auth()->user()->role == 'admin'){
            return redirect('admin/index-rfc');
        }
        elseif(Auth()->user()->role == 'user'){
            return redirect('user/index-rfc');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rfc = Rfc::findorfail($id);
        $rfc->delete();
        if(Auth()->user()->role == 'admin'){
            return redirect('admin/index-rfc');
        }
        elseif(Auth()->user()->role == 'user'){
            return redirect('user/index-rfc');
        }
    }

    public function history(){
        $data_rfc = Rfc::all();
        return view('admin.rfc.history',[
            'title' => 'Riwayat Pengajuan RFC'
        ], compact('data_rfc'));
    }
}
