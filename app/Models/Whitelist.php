<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whitelist extends Model
{
    protected $table = 'whitelist';
    protected $primaryKey = 'id_whitelist';
    protected $fillable = [
        'id_whitelist','jenis_software','nama_software'
    ];
    public function fisik ()
    {
        return $this->hasMany(restore::class);
    }
}
 