<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agen extends Model
{
    //
    protected $table = 'agen';
    protected $primaryKey = 'id_agen';
    public $timestamps = false;

    public function partnership(){
        return $this->hasMany('App\Models\Partnership','id_agen','id_agen');
    }
    public function user(){
        return $this->belongsTo('App\Models\User','id_user','id_user');
    }
    public function riwayat_agen(){
        return $this->hasMany('App\Models\Riwayat_agen','id_agen','id_agen');
    }
    public function riwayat_frans(){
        return $this->hasMany('App\Models\Riwayat_frans','id_agen','id_agen');
    }
    public function pemesanan(){
        return $this->hasMany('App\Models\Pemesanan','id_agen','id_agen');
    }
    public function scopebintang($query,$id){
        $bintang = ($this->riwayat_agen->avg('nilai'));
        if($bintang == null){
            $bintang = 0;
        }
        return $bintang;
    }
    public function scopeagen_menunggu($query){
        return $query->whereHas('riwayat_agen',function($q){
            $q->where('status','Menunggu Konfirmasi');
        })->get();
    }
    public function scopedaftar_agen_by_frans($query,$id_frans){
        return $query->whereHas('partnership.produk',function($q)use($id_frans){
            $q->where('id_frans',$id_frans);
        })->whereHas('partnership',function($q){
            $q->where('status','Diterima');
        })->paginate(5);
    }
}
