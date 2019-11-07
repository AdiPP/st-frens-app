<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    protected $table = 'partnership';
    protected $primaryKey = 'id_partnership';
    protected $fillable = [];
    public $timestamps = false;
}