<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class backup extends Model
{
    protected $table = 'backup';
    protected $primaryKey = 'id_backup';
    protected $fillable = [
        'id_backup','periode','tanggal','objek','pj','keterangan'
    ];
    public function backup ()
    {
        return $this->hasMany(restore::class);
    }
}
