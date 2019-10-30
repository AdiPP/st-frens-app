<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    //

    /**
     * Modul Pemesanan
     *  - Pemesanan
     *  - Konfirmasi Pesanan
     *  - Riwayat Pesanan
     * 
     */
    public function pesanPaket(Request $request,Produk $id_brand)
    {
        # code...
        $pemesanan = new Pemesanan;
        $pemesanan->id_agen = $request->id_agen;
        $pemesanan->id_paket = $request->id_paket;
        $pemesanan->alamat_detil = '';
        $pemesanan->jumlah = 1;
        $pemesanan->status = $request->status;
        $pemesanan->save();

    }

    public function home()
    {
        if(session('jabatan')=='agen'){
            $pemesanan = Pemesanan::keranjang_agen_id(session('id_agen'));
            $keranjangs=[];
            foreach ($pemesanan as $keranjang) {
                $keranjangs[]=[
                    'id_keranjang'=>$keranjang->id_pesan,
                    'nama_pembeli'=>$keranjang->agen->nama,
                    'path_foto'=>$keranjang->paket->foto_paket,
                    'nama_produk'=>$keranjang->paket->nama_paket,
                    'alamat'=>$keranjang->agen->alamat_detil,
                    'harga'=>$keranjang->paket->harga,
                ];
            }
            $pemesanan = Pemesanan::riwayat_agen_id(session('id_agen'));
            return view('pemesanan_agen',['keranjangs'=>$keranjangs,'riwayats'=>$pemesanan]);
        }elseif(session('jabatan')=='franchisor'){
            $pemesanan = Pemesanan::riwayat_frans_id(session('id_frans'));
            return view('pemesanan_franchisor',['riwayats'=>$pemesanan]);
        }
    }
    public function postPemesanan(Request $request)
    {
        # code...
        // dd($request);
        foreach ($request->id_pesan as $key => $value) {
            $pemesanan = Pemesanan::findOrFail($value);
            $pemesanan->alamat_detil = $request->alamat_detil[$key];
            $pemesanan->jumlah = $request->jumlah[$key];
            $pemesanan->status = 'Menunggu Konfirmasi';
            $pemesanan->save();
        }
        return redirect()->route('pemesanan');
    }

    public function deleteKeranjang(Pemesanan $id_pemesanan)
    {
        # code...
        // dd($id_pemesanan);
        $id_pemesanan->delete();
        return redirect()->route('pemesanan');
    }
    public function konfirmasiPemesanan(Pemesanan $id_pemesanan,$jawaban){
        $id_pemesanan->status = $jawaban;
        $id_pemesanan->save();
        return redirect()->route('pemesanan');
    }
}
