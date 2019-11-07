<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    protected $table = 'franchisor';
    protected $primaryKey = 'id_frans';
    protected $fillable = [];
    public $timestamps = false;
}
