<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Franchisor extends Model
{
    //
    protected $table = 'franchisor';
    protected $primaryKey = 'id_frans';
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\Models\User','id_user','id_user');
    }
    public function riwayat_agen(){
        return $this->hasMany('App\Models\Riwayat_agen','id_frans');
    }
    public function riwayat_frans(){
        return $this->hasMany('App\Models\Riwayat_frans','id_frans');
    }
    public function produk(){
        return $this->hasMany('App\Models\Produk','id_frans');
    }
}
