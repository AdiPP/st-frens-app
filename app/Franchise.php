<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    protected $table = 'franchisor';
    protected $primaryKey = 'id_frans';
    protected $fillable = [
        'nama_brand',
        'hak_paten',
        'no_tlp',
        'no_ktp',
        'gambar',
        'email',
        'desk_brand'
    ];
    public $timestamps = false;
}
