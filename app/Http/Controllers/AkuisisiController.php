<?php

namespace App\Http\Controllers;

use App\Models\Akuisisi;
use App\Models\Detailakuisisi;
use App\Models\Pemegangaset;
use Illuminate\Http\Request;

class AkuisisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_akuisisi = Akuisisi::all();
        if(Auth()->user()->role == 'admin'){
            
            return view('admin.akuisisi.index',[
                'title'=>'Riwayat Monitoring'
            ],compact('data_akuisisi'));
        }
        elseif(Auth()->user()->role == 'user'){
            $data_akuisisi = Akuisisi::all();
            return view('user.akuisisi.index',[
                'title'=>'Riwayat Monitoring'  
            ],compact('data_akuisisi'));
        }
    }

    public function indexdetail()
    {
        $data_akuisisi = Akuisisi::all();
        if(Auth()->user()->role == 'admin'){
            
            return view('admin.akuisisi.indexdetail',[
                'title'=>'Riwayat Monitoring'
            ],compact('data_akuisisi'));
        }
        elseif(Auth()->user()->role == 'user'){
            $data_akuisisi = Akuisisi::all();
            return view('user.akuisisi.indexdetail',[
                'title'=>'Riwayat Monitoring'  
            ],compact('data_akuisisi'));
        }
    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aset = Pemegangaset::all();
        return view('user.akuisisi.create',[
            'title'=>'Monitoring Perangkat User'
        ],compact('aset'));
    }

    public function detail(string $id)
    {
        $akuisisi = Akuisisi::findorfail($id);
       //$detailakuisisi = Detailakuisisi::findorfail($id);
        // One To Many Relationship pake with(nama_function_di_model)
      $detailakuisisi = Detailakuisisi::with('pemegang_aset')
       ->whereExists(function ($query) use ($id) {
           $query->select(Detailakuisisi::raw($id))
               ->where('detailakuisisi.id_akuisisi', $id);
       })->get();
     
        return view('user.akuisisi.detail',[
            'title'=>'Monitoring Perangkat User'
        ],compact('akuisisi','detailakuisisi'));
    }

    public function tambahdetail(string $id)
    {
        $akuisisi = Akuisisi::findorfail($id);
        $aset = Pemegangaset::all();
       //$detailakuisisi = Detailakuisisi::findorfail($id);
        // One To Many Relationship pake with(nama_function_di_model)
      //$detailakuisisi = Detailakuisisi::with('pemegang_aset')
      // ->whereExists(function ($query) use ($id) {
       //    $query->select(Detailakuisisi::raw($id))
       //        ->where('detailakuisisi.id_akuisisi', $id);
     //  })->get();
     
        return view('user.akuisisi.createdetail',[
            'title'=>'Monitoring Perangkat User'
        ],compact('akuisisi','aset'));
    }
 
    public function storedetail(Request $request, string $id)
    {
        Detailakuisisi::create([
            'nama_pemegang' => $request->nama_pemegang,
            'nama_perangkat' => $request->nama_perangkat,
            'id_akuisisi' => $request->$id,
            'akses_user'=>$request->akses_user,
            'power_lock'=>$request->power_lock,
            'sinkronisasi_waktu'=>$request->sinkronisasi_waktu,
            'antivirus'=>$request->antivirus,
            'update_os'=>$request->update_os,
            'scan_malware'=>$request->scan_malware,
            'versi_os'=>$request->versi_os,
            'keterangan'=>$request->keterangan,
            
        ]);

        return redirect('user/index-akuisisi');
    }
    public function aset()
    {
        $data_aset = Pemegangaset::all();
        return view('admin.akuisisi.aset',[
            'title'=>'Daftar Pemegang Aset'
        ],compact('data_aset'));
    }

    public function tambahaset()
    {
        return view('admin.akuisisi.tambahaset',[
            'title'=>'Daftar Pemegang Aset'
        ]);
    }

    public function storeaset(Request $request)
    {
        Pemegangaset::create([
            'nama_pemegang' => $request->nama_pemegang,
            'nama_perangkat' => $request->nama_perangkat,
            
        ]);

        return redirect('admin/aset-akuisisi');
    }
 
    public function editaset(string $id)
    {
        $aset = Pemegangaset::findorfail($id);
        return view('admin.akuisisi.editaset',[
            'title' => 'Edit Data Pemegang Aset'
        ],compact('aset'));
    }

    public function updateaset(Request $request, string $id)
    {
        $aset = Pemegangaset::findorfail($id);
         $aset->update($request->all());
         return redirect('admin/aset-akuisisi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Akuisisi::create([
            'tgl_efektif' => $request->tgl_efektif,
            'nomor_dokumen' => $request->nomor_dokumen,
            'kategori_dokumen' => $request->kategori_dokumen,
            'versi' => $request->versi,
            
         ]); 
  
         if (Auth()->user()->role == 'admin') {
             return redirect('admin/index-akuisisi');
         } 
         elseif(Auth()->user()->role == 'user'){
             return redirect('user/index-akuisisi');
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

    public function destroyaset(string $id)
    {
        $aset = Pemegangaset::findorfail($id);
        $aset->delete();
        return redirect('admin/aset-akuisisi');
    }
}
