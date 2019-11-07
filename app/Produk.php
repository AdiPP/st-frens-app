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

    public function pakets()
    {
        return $this->hasMany('App\PaketProduk', 'id_produk');
    }

    public function agen()
    {
    	return $this->belongsToMany('App\Agen', 'partnership', 'id_produk', 'id_agen');
    }
}
