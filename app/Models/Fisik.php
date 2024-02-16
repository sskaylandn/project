<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fisik extends Model
{
    protected $table = 'fisik';
    protected $primaryKey = 'id_fisik';
    protected $fillable = [
        'id_fisik','nama_fisik','jumlah_fisik','tglperiksa_fisik','status_fisik','tindak_lanjut','pic_fisik','keterangan'
    ];
    public function fisik ()
    {
        return $this->hasMany(restore::class);
    }
}
