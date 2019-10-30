<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riwayat_agen extends Model
{
    //
    protected $table = 'r_agen';
    protected $primaryKey = 'id_ragen';
    public $timestamps = false;

    public function franchisor(){
        return $this->belongsTo('App\Models\Franchisor','id_frans');
    }
    public function agen(){
        return $this->belongsTo('App\Models\Agen','id_agen');
    }
}
