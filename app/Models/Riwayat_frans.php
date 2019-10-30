<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riwayat_frans extends Model
{
    //
    protected $table = 'riwayat_frans';
    protected $primaryKey = 'id_rfrans';
    public $timestamps = false;

    public function franchisor(){
        return $this->belongsTo('App\Models\Franchisor','id_frans');
    }
    public function agen(){
        return $this->belongsTo('App\Models\Agen','id_agen');
    }
}
