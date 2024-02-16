<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restore extends Model
{
    protected $table = 'restore';
    protected $primaryKey = 'id_restore';
    protected $fillable = [
        'periode','tanggal','objek','status','pj','keterangan'
    ];
    public function backup ()
    {
        return $this->belongsTo(backup::class);
    }
}
