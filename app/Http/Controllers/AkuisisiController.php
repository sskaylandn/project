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

       if(Auth()->user()->role == 'admin'){
       
        return view('admin.akuisisi.detail',[
            'title'=>'Monitoring Perangkat User'
        ],compact('akuisisi','detailakuisisi'));
        }
        elseif(Auth()->user()->role == 'user'){
            
            return view('user.akuisisi.detail',[
                'title'=>'Monitoring Perangkat User'
            ],compact('akuisisi','detailakuisisi'));
        }
     
        
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
        
        $data = $request->all();
        //dd($data);
        //$pemegangaset = new Pemegangaset;
       // $pemegangaset->nama_pemegang = $data['nama_pemegang'];
       // $pemegangaset->nama_perangkat = $data['nama_perangkat'];
       //$pemegangaset ->save();

      
        if(count($data['nama_pemegang']) > 0){
            foreach ($data['nama_pemegang'] as $item=>$value){
                $data2=array(
                    'nama_pemegang' => $data['nama_pemegang'][$item],
                    'nama_perangkat' => $data['nama_perangkat'][$item],
                );
                Pemegangaset::create($data2);
             }
        }
        
  
        return redirect('admin/aset-akuisisi');
         
       // $data = $request->all();
        //dd($data);
        //$pemegangaset = new Pemegangaset;
       // $pemegangaset->nama_pemegang = $data['nama_pemegang'];
       // $pemegangaset->nama_perangkat = $data['nama_perangkat'];
       // $pemegangaset ->save();

       // if(count($data['nama_pemegang']) > 0){
         //   foreach ($data['nama_pemegang'] as $item=>$value){
          //      $data2=array(
          //          'nama_pemegang' => $data['nama_pemegang'][$item],
                   // 'nama_perangkat' => $data['nama_perangkat'][$item],
          //      );
           //     Pemegangaset::create($data2);
           //  }
        
        //Pemegangaset::create([
           // 'nama_pemegang' => $request->nama_pemegang,
           // 'nama_perangkat' => $request->nama_perangkat,
            
       // ]);

        
    }
 
    public function editaset(string $id)
    {
        $aset = Pemegangaset::findorfail($id);
        return view('admin.akuisisi.editaset',[
            'title' => 'Edit Data Pemegang Aset'
        ],compact('aset'));
    }

    public function editdetail(string $id)
    {
        if(Auth()->user()->role == 'admin'){
            $detailakuisisi = Detailakuisisi::findorfail($id);
            return view('admin.akuisisi.editdetail',[
                'title' => 'Edit Data Pemegang Aset'
        ],compact('detailakuisisi'));
        }
        elseif(Auth()->user()->role == 'user'){
            $detailakuisisi = Detailakuisisi::findorfail($id);
            return view('user.akuisisi.editdetail',[
                'title' => 'Edit Data Pemegang Aset'
            ],compact('detailakuisisi'));
        }
    }

    public function updateaset(Request $request, string $id)
    {
        $aset = Pemegangaset::findorfail($id);
         $aset->update($request->all());
         return redirect('admin/aset-akuisisi');
    }
    public function updatedetail(Request $request, string $id)
    {
        $detailakuisisi = Detailakuisisi::findorfail($id);
        $detailakuisisi->update($request->all());

        if (Auth()->user()->role == 'admin') {
           return redirect('admin/index-akuisisi');
       } 
       elseif(Auth()->user()->role == 'user'){
           return redirect('user/index-akuisisi');
       }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $akuisisi = new Akuisisi;
        $akuisisi->tgl_efektif = $data['tgl_efektif'];
        $akuisisi->nomor_dokumen = $data['nomor_dokumen'];
        $akuisisi->kategori_dokumen = $data['kategori_dokumen'];
        $akuisisi->versi = $data['versi'];
        $akuisisi->save();

      
        if(count($data['nama_pemegang']) > 0){
            foreach ($data['nama_pemegang'] as $item=>$value){
                $data2=array(
                    'id_akuisisi' => $akuisisi->id_akuisisi,
                    'nama_pemegang' => $data['nama_pemegang'][$item],
                    'nama_perangkat' => $data['nama_perangkat'][$item],
                    'akses_user'=>$data['akses_user'][$item],
                    'power_lock'=>$data['power_lock'][$item],
                    'sinkronisasi_waktu'=>$data['sinkronisasi_waktu'][$item],
                    'antivirus'=>$data['antivirus'][$item],
                    'update_os'=>$data['update_os'][$item],
                    'scan_malware'=>$data['scan_malware'][$item],
                    'versi_os'=>$data['versi_os'][$item],
                    'keterangan'=>$data['keterangan'][$item],
                );
                Detailakuisisi::create($data2);
             }
        }
        
      //  Akuisisi::create([
        //    'tgl_efektif' => $request->tgl_efektif,
        //    'nomor_dokumen' => $request->nomor_dokumen,
         //   'kategori_dokumen' => $request->kategori_dokumen,
         //   'versi' => $request->versi,
            
        // ]); 
  
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
        if(Auth()->user()->role == 'admin'){
            $akuisisi = Akuisisi::findorfail($id);
            return view('admin.akuisisi.edit',[
                'title'=>'Edit Monitoring Perangkat User'
            ],compact('akuisisi'));
        }
        elseif(Auth()->user()->role == 'user'){
            $akuisisi = Akuisisi::findorfail($id);
            return view('user.akuisisi.edit',[
                'title'=>'Edit Monitoring Perangkat User'  
            ],compact('akuisisi'));
        }
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $akuisisi = Akuisisi::findorfail($id);
        $akuisisi->update($request->all());

        if (Auth()->user()->role == 'admin') {
           return redirect('admin/index-akuisisi');
       } 
       elseif(Auth()->user()->role == 'user'){
           return redirect('user/index-akuisisi');
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $akuisisi = Akuisisi::findorfail($id);
        //$detailakuisisi = Detailakuisisi::whereHas('akuisisi', function ($query) use ($id) {
           // $query->where('detailakuisisi.id_akuisisi', $id);
       // })->delete();
       $detailakuisisi = Detailakuisisi::with('pemegang_aset')
       ->whereExists(function ($query) use ($id) {
            $query->select(Detailakuisisi::raw($id))
                ->where('detailakuisisi.id_akuisisi', $id);
        })->delete();
        //dd($akuisisi);
        $akuisisi->delete();
        return redirect('admin/index-akuisisi');
    }

    public function destroyaset(string $id)
    {
        $aset = Pemegangaset::findorfail($id);
        $aset->delete();
        return redirect('admin/aset-akuisisi');
    }
}
