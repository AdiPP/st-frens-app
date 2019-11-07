<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partnership;

class PartnershipController extends Controller
{
    public function daftar($id_produk, $id_agen){

        $partner = new Partnership();
        $partner->id_produk =  $id_produk;
        $partner->id_agen = $id_agen;
        $partner->status = 'Menunggu Konfirmasi';
        $partner->save();

        return redirect()->back();
    }
}
