<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitoring extends Model
{
    protected $table = 'monitoring';
    protected $primaryKey = 'id_monitoring';
    protected $fillable = [
        'id_monitoring','nama_perangkat','lokasi','max','tgl_monitoring','cpu','ram','disk','tindak_lanjut','pj'
    ];
}
