<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Agen;
use App\Models\Franchisor;
use App\Models\Partnership;
use App\Models\Pemesanan;

class FranchisorController extends Controller
{
    //

   /***
     * Modul Franchisor
     *   - Konfirmasi Agen
     *   - Monitoring Agen
     *   - Laporan Produk
     * 
     */

   public function lihatAgen(Produk $id_brand,Agen $id_agen){
      $brand=[
         'nama_brand'=>$id_brand->nama_produk
      ];
      $agen = [
         'id_agen'=>$id_agen->id_agen,
         'path_foto'=>$id_agen->gambar_lokasi,
         'bintang'=>$id_agen->bintang($id_agen->id_agen),
         'nama'=>$id_agen->nama,
         'lokasi'=>$id_agen->alamat
      ];   
      $testimonis = [];
      foreach ($id_agen->riwayat_agen as $testimoni){
         $testimonis[]= [
            'path_foto'=>$testimoni->franchisor->gambar,
            'bintang'=>$testimoni->nilai,
            'deskripsi'=>$testimoni->isi,
            'nama'=>$testimoni->franchisor->nama_franchisor,
         ];
      }
   return view('riwayat_agen',['id_brand'=>$id_brand->id_produk,'id_agen'=>$id_agen->id_agen,'brand'=>$brand,'agen'=>$agen,'testimonis'=>$testimonis]);
   }

   public function konfirmasiAgen(Produk $id_brand,Agen $id_agen,$jawaban)
   {
      $partnership = Partnership::where([['id_produk',$id_brand->id_produk],['id_agen',$id_agen->id_agen]])->firstOrFail();
      switch ($jawaban) {
         case 'terima':
            $partnership->status = "Diterima";
            $partnership->save();
            return redirect()->route('detail_produk',['id_produk'=>$id_brand->id_produk]);
            break;
         
         default:
            $partnership->status = "Ditolak";
            $partnership->save();
            return redirect()->route('detail_produk',['id_produk'=>$id_brand->id_produk]);
            break;
      }
   }

   public function lihatDaftarAgen()
   {
      # code...
      $agens = Agen::daftar_agen_by_frans(session('id_frans'));
      return view('agen',['agens'=>$agens]);
   }

   public function lihatDaftarAgenDetail(Agen $id_agen){
      $pemesanan = Pemesanan::riwayat_agen_id($id_agen->id_agen);

      return view('agen_detail',['agen'=>$id_agen,'riwayats'=>$pemesanan]);
   }

   public function getDataYearly(Agen $id_agen,$tahun){
      $pemesanan = Pemesanan::riwayat_agen_tahunan_id($id_agen->id_agen,$tahun);
      $arrPemesanan = ($pemesanan->toArray());
      // dd($arrPemesanan);
      $dataYearly = [];
      for ($i=1; $i <= 12 ; $i++) { 
         if(array_key_exists($i,$arrPemesanan)){
            $dataYearly[] = count($pemesanan[$i]);
         }else{
            $dataYearly[] = 0;
         }
      }
      // dd($dataYearly);
      return response()->json($dataYearly);
   }

   public function laporan(){
      
      return view('laporan');
   }

   public function getDataLaporan(){
      $pemesanan = Pemesanan::laporan_produk_frans(session('id_frans'));
      $franchisor = Franchisor::find(session('id_frans'));
      $arrPemesanan = [] ;
      foreach($pemesanan as $key=>$arr){
         $arrPemesanan[] = count($arr);
      }
      // dd($pemesanan);
      // dd($arrPemesanan);
      $bankBgColor = [
         'rgba(255, 99, 132, 0.2)',
         'rgba(54, 162, 235, 0.2)',
         'rgba(179, 207, 94, 0.2)',
         'rgba(207, 94, 94, 0.2)',
         'rgba(207, 94, 132, 0.2)',
         'rgba(94, 113, 207, 0.2)',
         'rgba(94, 207, 188, 0.2)'
      ];
      $bankBorderColor = [
         'rgba(255, 99, 132, 1)',
         'rgba(54, 162, 235, 1)',
         'rgba(179, 207, 94, 1)',
         'rgba(207, 94, 94, 1)',
         'rgba(207, 94, 132, 1)',
         'rgba(94, 113, 207, 1)',
         'rgba(94, 207, 188, 1)'
      ];

      $arrProduk=[];
      $arrBrColor=[];
      $arrBgColor=[];
      foreach($franchisor->produk as $key=>$arr){
         $arrProduk[] = $arr->nama_produk;
         $rand_keys = array_rand($bankBgColor);
         $arrBrColor[]=$bankBorderColor[$rand_keys];
         $arrBgColor[]=$bankBgColor[$rand_keys];
      }
      // dd($arrProduk);
      return response()->json(['produks'=>$arrProduk,'pemesanan'=>$arrPemesanan,'bgColor'=>$arrBgColor,'brColor'=>$arrBrColor]);
   }
}
