<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    //
    protected $table = 'jenis';
    protected $primaryKey = 'id_jenis';
    public $timestamps = false;

    public function produk(){
        return $this->hasMany('App\Models\Produk','id_jenis');
    }
}
