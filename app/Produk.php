<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $fillable = [
        'id_frans',
        'nama_produk',
        'alamat',
        'no_hp',
        'id_jenis',
        'harga',
        'deskripsi',
        'foto_produk',
        'hak_paten'
    ];
    public $timestamps = false;
}
