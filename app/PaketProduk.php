<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaketProduk extends Model
{
    protected $table = 'paket';
    protected $primaryKey = 'id_paket';
    protected $fillable = [];
    public $timestamps = false;
}
