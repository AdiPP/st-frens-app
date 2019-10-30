<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    //
    protected $table = 'partnership';
    protected $primaryKey = 'id_partnership';
    public $timestamps = false;

    public function produk(){
        return $this->belongsTo('App\Models\Produk','id_produk','id_produk');
    }
    public function agen(){
        return $this->belongsTo('App\Models\Agen','id_agen','id_agen');
    }
}
