<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    public $timestamps = false;
    protected $fillable = [
        'id_frans',
        'nama_produk',
        'alamat',
        'no_hp',
        'id_jenis',
        'harga',
        'deskripsi',
        'foto_produk',
        'hak_paten'
    ];

    public function partnership(){
        return $this->hasMany('App\Models\Partnership','id_produk','id_produk');
    }
    public function paket(){
        return $this->hasMany('App\Models\Paket','id_produk');
    }
    public function franchisor(){
        return $this->belongsTo('App\Models\Franchisor','id_frans');
    }
    public function jenis(){
        return $this->belongsTo('App\Models\Jenis','id_jenis');
    }
    public function agen()
    {
    	return $this->belongsToMany('App\Models\Agen', 'partnership', 'id_produk', 'id_agen');
    }

    public function scopeagen_tertarik(){
        return $this->partnership->where('status','Menunggu Konfirmasi');
    }
}
