<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Monitoring;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth()->user()->role == 'admin'){
            $data_monitoring = Monitoring::all();
            return view('admin.monitoring.index',[
            'title'=>'Riwayat Monitoring'  
            ],compact('data_monitoring'));
        }
        elseif(Auth()->user()->role == 'user'){
            $data_monitoring = Monitoring::all();
            return view('user.monitoring.index',[
            'title'=>'Riwayat Monitoring'  
            ],compact('data_monitoring'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.monitoring.create',[
            'title'=>'Formulir Monitoring'  
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Monitoring::create([
            'nama_perangkat' => $request->nama_perangkat,
            'lokasi' => $request->lokasi,
            'max'=> $request->max,
            'tgl_monitoring' => $request->tgl_monitoring,
            'cpu' => $request->cpu,
            'ram' => $request->ram,
            'disk' => $request->disk,
            'tindak_lanjut' => $request->tindak_lanjut,
            'pj' => $request->pj
        ]);

        return redirect('user/index-monitoring');
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
            $monitoring = Monitoring::findorfail($id);
            return view('admin.monitoring.edit',[
                'title' => 'Edit Data'
            ],compact('monitoring'));
        }
        elseif(Auth()->user()->role == 'user'){
            $monitoring = Monitoring::findorfail($id);
            return view('user.monitoring.edit',[
            'title' => 'Edit Formulir RFC'
            ],compact('monitoring'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $monitoring = Monitoring::findorfail($id);
        $monitoring->update($request->all());
        return redirect('user/index-monitoring');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $monitoring = Monitoring::findorfail($id);
        $monitoring->delete();
        if(Auth()->user()->role == 'admin'){
            
        }
        elseif(Auth()->user()->role == 'user'){
            return redirect('user/index-monitoring');
        }
        
    }
}
