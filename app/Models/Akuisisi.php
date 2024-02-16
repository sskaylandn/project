<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akuisisi extends Model
{
    protected $table = 'akuisisi';
    protected $primaryKey = 'id_akuisisi';
    protected $fillable = [
        'id_akuisisi','tgl_efektif','nomor_dokumen','kategori_dokumen','versi'
    ];
    public function detailakuisisi ()
    {
        //return $this->belongsTo('Detailakuisisi')->select(['id_detailakuisisi']);
        return $this->hasMany('Detailakuisisi', 'id_akuisisi');
    }
}
