<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rfc extends Model
{
    protected $table = 'rfc';
    protected $primaryKey = 'id_rfc';
    protected $fillable = [
        'id_rfc','tgl_req','pengaju','detail','acc','alasan','penyetuju','tgl_acc','tindak_lanjut','tgl_perubahan','tgl_selesai','keterangan'
    ];
}
