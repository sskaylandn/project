<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemegangaset extends Model
{
    protected $table = 'pemegangaset';
    protected $primaryKey = 'id_pemegang';
    protected $fillable = [
        'id_detailakuisisi', 'nama_pemegang','nama_perangkat' 
    ];
    public function akuisisi ()
    {
        //return $this->belongsTo('Akuisisi', 'id_akuisisi')->select(['id_akuisisi', 'id_pemegang', '']);
       // return $this->belongsTo('Akuisisi', 'id_akuisisi');
        return $this->belongsTo(detailakuisisi::class);
    }
}
