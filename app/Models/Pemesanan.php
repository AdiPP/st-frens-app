<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;   

class Pemesanan extends Model
{
    //
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pesan';
    public $timestamps = false;
    
    public function paket(){
        return $this->belongsTo('App\Models\Paket','id_paket');
    }
    public function agen(){
        return $this->belongsTo('App\Models\Agen','id_agen');
    }
    public function scoperiwayat_frans_id($query,$id){
        return $query->whereHas('paket.produk',function($q)use($id){
            $q->where('id_frans',$id);
        })->orderBy('tanggal','desc')->paginate(5);
    }
    public function scopekeranjang_agen_id($query,$id){
        return $query->where([['status','Keranjang'],['id_agen',$id]])->get();
    }
    public function scoperiwayat_agen_id($query,$id){
        return $query->where([['status','!=','Keranjang'],['id_agen',$id]])->orderBy('tanggal','desc')->paginate(5);
    }
    public function scoperiwayat_agen_tahunan_id($query,$id,$tahun){
        return ($query->where([['status','Terima'],['id_agen',$id]])->whereYear('tanggal',$tahun)->get()->groupBy(function($item) {
            return Carbon::parse($item->tanggal)->format('n');
        }));
    }
    public function scopelaporan_produk_frans($query,$id_frans){
        return ( $query->whereHas('paket.produk',function($q)use($id_frans){
            $q->where('id_frans',$id_frans);
        })->get()->groupBy('paket.produk.id_produk'));
    }
}
