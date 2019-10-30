<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    public $timestamps = false;

    public function partnership(){
        return $this->hasMany('App\Models\Parnership','id_produk','id_produk');
    }
    public function paket(){
        return $this->hasMany('App\Models\Paket','id_produk');
    }
    public function franchisor(){
        return $this->belongsTo('App\Models\Franchisor','id_frans');
    }
    public function jenis(){
        return $this->belongsTo('App\Models\Jenis','id_jenis');
    }
}
