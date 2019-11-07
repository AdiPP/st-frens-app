<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agen extends Model
{
    protected $table = 'agen';
    protected $primaryKey = 'id_agen';
    protected $fillable = [];
    public $timestamps = false;

    public function produk()
    {
    	return $this->belongsToMany('App\Produk', 'partnership', 'id_agen', 'id_produk');
    }
}
