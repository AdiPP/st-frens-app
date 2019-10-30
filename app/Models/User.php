<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    public $timestamps = false;

    public function agen(){
        return $this->hasOne('App\Models\Agen','id_user','id_user');
    }
    public function franchisor(){
        return $this->hasOne('App\Models\Franchisor','id_user','id_user');
    }
}
