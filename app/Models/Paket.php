<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    //
    protected $table = 'paket';
    protected $primaryKey = 'id_paket';
    public $timestamps = false;

    public function produk(){
        return $this->belongsTo('App\Models\Produk','id_produk');
    }
    public function pemesanan(){
        return $this->hasMany('App\Models\Pesan','id_paket');
    }
}
