<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailakuisisi extends Model
{
    protected $table = 'detailakuisisi';
    protected $primaryKey = 'id_detailakuisisi';
    protected $fillable = [
        'id_detailakuisisi', 'id_pemegang', 'id_akuisisi','akses_user','power_lock','sinkronisasi_waktu','antivirus','update_os','scan_malware','versi_os','keterangan'
    ];
    public function akuisisi ()
    {
       return $this->belongsTo(detailakuisisi::class);
    }

    // Function baru buat one to many relationship. ini function yang dipake `with`
    public function pemegang_aset(){
        return $this->hasMany(Pemegangaset::class,'id_pemegang'); 
    }
}
