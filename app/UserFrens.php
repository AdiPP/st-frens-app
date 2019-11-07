<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFrens extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $fillable = [];
    public $timestamps = false;

    public function frens()
    {
        return $this->hasMany('App\Franchise', 'id_user');
    }
}
