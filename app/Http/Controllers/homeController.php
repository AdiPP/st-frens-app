<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Franchise;
use App\Produk as Produks;
use App\Partnership;
use App\Agen;

class homeController extends Controller
{
    public function index(){

        if (session()->exists('user')) {
            if(session('jabatan') == 'agen') {
                $produks = Agen::where('id_agen', session('user')->id_agen)->first();
            }
            else {
                $produks = Produks::where('id_frans', session('user')->id_frans)->get();
            }
        } else {
            $produks = Produks::get();
        }

        $katProduk = Produks::get();

        $katalog = [
            [
                'id_brand'=>1,
                'path_foto'=>'images/frens_product_1.jpg',
                'nama_produk'=>'Passion of Chocolate',
                'bintang'=>3.5
            ],[
                'id_brand'=>2,
                'path_foto'=>'images/frens_product_2.jpg',
                'nama_produk'=>'King Coklat',
                'bintang'=>5
            ],[
                'id_brand'=>3,
                'path_foto'=>'images/frens_product_3.jpg',
                'nama_produk'=>'Nyoklat Super',
                'bintang'=>4.5
            ],[
                'id_brand'=>4,
                'path_foto'=>'images/frens_product_4.jpg',
                'nama_produk'=>'Sel Sel',
                'bintang'=>4
            ],[
                'id_brand'=>5,
                'path_foto'=>'images/frens_product_5.jpg',
                'nama_produk'=>'Thai Tea Man',
                'bintang'=>3.5
            ],[
                'id_brand'=>6,
                'path_foto'=>'images/frens_product_6.jpg',
                'nama_produk'=>'Nyo Nyo Thai Tea',
                'bintang'=>3
            ],[
                'id_brand'=>7,
                'path_foto'=>'images/frens_product_7.jpg',
                'nama_produk'=>'Dum Thai Tea',
                'bintang'=>5
            ],[
                'id_brand'=>8,
                'path_foto'=>'images/frens_product_8.jpg',
                'nama_produk'=>'Yose Thai Tea',
                'bintang'=>2.5
            ],[
                'id_brand'=>9,
                'path_foto'=>'images/frens_product_9.jpg',
                'nama_produk'=>'Oma Thai Tea',
                'bintang'=>1.5
            ],[
                'id_brand'=>10,
                'path_foto'=>'images/frens_product_10.jpg',
                'nama_produk'=>'Tahu Gila',
                'bintang'=>3.5
            ],[
                'id_brand'=>11,
                'path_foto'=>'images/frens_product_11.jpg',
                'nama_produk'=>'48 Ice Blend',
                'bintang'=>4.5
            ],[
                'id_brand'=>12,
                'path_foto'=>'images/frens_product_12.jpg',
                'nama_produk'=>'Monster Ice Blend',
                'bintang'=>5
            ]
        ];

        $brand = [
            [
                'id_brand'=>1,
                'path_foto'=>'images/frens_product_1.jpg',
                'nama_produk'=>'Passion of Chocolate',
                'bintang'=>3.5
            ],[
                'id_brand'=>2,
                'path_foto'=>'images/frens_product_2.jpg',
                'nama_produk'=>'King Coklat',
                'bintang'=>5
            ]
        ];

        return view('home',['katalogs'=>$katalog,'brand'=>$brand, 'produks' => $produks, 'katProduks' => $katProduk]);
    }

    public function detailProduk($id_produk){

        $produk = Produks::where('id_produk', $id_produk)->first();

        $pakets = Produks::find($id_produk)->pakets;

        if(session('jabatan') == 'franchisor' && $produk->id_frans == session('user')->id_frans){
            $brand=[
                'nama_brand'=>'Passion Of Chocolate',
                'path_foto_brand'=>'images/frens_product_1.jpg',
                'bintang'=>3,
                'lokasi'=>'JABODETABEK',
                'kontak'=>'08123721721',
                'harga'=>'10000000',
                'deskripsi'=>'Franchise Minuman Populer Dengan Modal Dibawah 13 Juta.',
                'produk'=>[
                    [
                        'nama_produk'=>'PAKET A',
                        'path_foto_produk'=>'images/frens_product_2.jpg',
                        'harga_produk'=>'Rp. 9.000.000',
                        'deskripsi_produk'=>'Paket lengkap, Training Sumberdaya Manusia (SDM) Berupa pembekalan video SOP, Seragam / Outfit Lengkap media promosi online dan offline bahan baku awal semua paket SOP lengkap berupa video pembelajaran.'
                    ],[
                        'nama_produk'=>'PAKET B',
                        'path_foto_produk'=>'images/frens_product_2.jpg',
                        'harga_produk'=>'Rp. 10.0000.000',
                        'deskripsi_produk'=>''
                    ],[
                        'nama_produk'=>'PAKET C',
                        'path_foto_produk'=>'images/frens_product_2.jpg',
                        'harga_produk'=>'Rp. 11.0000.000',
                        'deskripsi_produk'=>''
                    ],[
                        'nama_produk'=>'PAKET D',
                        'path_foto_produk'=>'images/frens_product_2.jpg',
                        'harga_produk'=>'Rp. 12.0000.000',
                        'deskripsi_produk'=>''
                    ]
                ]
            ];

            $agens = [
                [
                    'id_agen'=>1,
                    'path_foto'=>'images/person_1.jpg',
                    'bintang'=>5,
                    'deskripsi'=>'Mantab setelah saya berjualan ini laku keras',
                    'nama'=>'Tejo Anusapati',
                    'lokasi'=>'SEMARANG'
                ],[
                    'id_agen'=>2,
                    'path_foto'=>'images/person_1.jpg',
                    'bintang'=>5,
                    'deskripsi'=>'Mantab setelah saya berjualan ini laku keras',
                    'nama'=>'Tejo Anusapati',
                    'lokasi'=>'SEMARANG'
                ],[
                    'id_agen'=>3,
                    'path_foto'=>'images/person_1.jpg',
                    'bintang'=>5,
                    'deskripsi'=>'Mantab setelah saya berjualan ini laku keras',
                    'nama'=>'Tejo Anusapati',
                    'lokasi'=>'SEMARANG'
                ],[
                    'id_agen'=>4,
                    'path_foto'=>'images/person_1.jpg',
                    'bintang'=>5,
                    'deskripsi'=>'Mantab setelah saya berjualan ini laku keras',
                    'nama'=>'Tejo Anusapati',
                    'lokasi'=>'SEMARANG'
                ]
            ];
            return view('detail_franchisor',['brand'=>$brand,'agens'=>$agens, 'produk' => $produk, 'pakets' => $pakets]);
        }elseif(session('jabatan') == 'agen'){
            
            $partnership = new Partnership();

            if ($id_produk == 1) {
                $brand=[
                    'nama_brand'=>'Passion Of Chocolate',
                    'path_foto_brand'=>'images/frens_product_1.jpg',
                    'bintang'=>3,
                    'lokasi'=>'JABODETABEK',
                    'kontak'=>'08123721721',
                    'harga'=>'Rp. 10.000.000',
                    'deskripsi'=>'Franchise Minuman Populer Dengan Modal Dibawah 13 Juta.',
                    'status'=>'Terkonfirmasi',
                    'produk'=>[
                        [
                            'nama_produk'=>'PAKET A',
                            'path_foto_produk'=>'images/frens_product_2.jpg',
                            'harga_produk'=>'Rp. 9.000.000',
                            'deskripsi_produk'=>'Paket lengkap, Training Sumberdaya Manusia (SDM) Berupa pembekalan video SOP, Seragam / Outfit Lengkap media promosi online dan offline bahan baku awal semua paket SOP lengkap berupa video pembelajaran.'
                        ],[
                            'nama_produk'=>'PAKET B',
                            'path_foto_produk'=>'images/frens_product_2.jpg',
                            'harga_produk'=>'Rp. 10.0000.000',
                            'deskripsi_produk'=>''
                        ],[
                            'nama_produk'=>'PAKET C',
                            'path_foto_produk'=>'images/frens_product_2.jpg',
                            'harga_produk'=>'Rp. 11.0000.000',
                            'deskripsi_produk'=>''
                        ],[
                            'nama_produk'=>'PAKET D',
                            'path_foto_produk'=>'images/frens_product_2.jpg',
                            'harga_produk'=>'Rp. 12.0000.000',
                            'deskripsi_produk'=>''
                        ]
                    ]
                ];
            } elseif ($id_produk == 2) {

                $brand=[
                    'nama_brand'=>'Passion Of Chocolate',
                    'path_foto_brand'=>'images/frens_product_1.jpg',
                    'bintang'=>3,
                    'lokasi'=>'JABODETABEK',
                    'kontak'=>'08123721721',
                    'harga'=>'Rp. 10.000.000',
                    'deskripsi'=>'Franchise Minuman Populer Dengan Modal Dibawah 13 Juta.',
                    'status'=>'Menunggu Konfirmasi',
                    'produk'=>[
                        [
                            'nama_produk'=>'PAKET A',
                            'path_foto_produk'=>'images/frens_product_2.jpg',
                            'harga_produk'=>'Rp. 9.000.000',
                            'deskripsi_produk'=>'Paket lengkap, Training Sumberdaya Manusia (SDM) Berupa pembekalan video SOP, Seragam / Outfit Lengkap media promosi online dan offline bahan baku awal semua paket SOP lengkap berupa video pembelajaran.'
                        ],[
                            'nama_produk'=>'PAKET B',
                            'path_foto_produk'=>'images/frens_product_2.jpg',
                            'harga_produk'=>'Rp. 10.0000.000',
                            'deskripsi_produk'=>''
                        ],[
                            'nama_produk'=>'PAKET C',
                            'path_foto_produk'=>'images/frens_product_2.jpg',
                            'harga_produk'=>'Rp. 11.0000.000',
                            'deskripsi_produk'=>''
                        ],[
                            'nama_produk'=>'PAKET D',
                            'path_foto_produk'=>'images/frens_product_2.jpg',
                            'harga_produk'=>'Rp. 12.0000.000',
                            'deskripsi_produk'=>''
                        ]
                    ]
                ];
            }
            return view('detail_agen',['brand'=>$brand, 'produk' => $produk, 'pakets' => $pakets, 'partnership' => $partnership]);
        }else{
            $brand=[
                'nama_brand'=>'Passion Of Chocolate',
                'path_foto_brand'=>'images/frens_product_1.jpg',
                'bintang'=>3,
                'lokasi'=>'JABODETABEK',
                'kontak'=>'08123721721',
                'harga'=>'Rp.9.000.000',
                'deskripsi'=>'Franchise Minuman Populer Dengan Modal Dibawah 13 Juta.',
                'produk'=>[
                    [
                        'nama_produk'=>'PAKET A',
                        'path_foto_produk'=>'images/frens_product_2.jpg',
                        'harga_produk'=>'Rp. 9.000.000',
                        'deskripsi_produk'=>'Paket lengkap, Training Sumberdaya Manusia (SDM) Berupa pembekalan video SOP, Seragam / Outfit Lengkap media promosi online dan offline bahan baku awal semua paket SOP lengkap berupa video pembelajaran.'
                    ],[
                        'nama_produk'=>'PAKET B',
                        'path_foto_produk'=>'images/frens_product_2.jpg',
                        'harga_produk'=>'Rp. 10.0000.000',
                        'deskripsi_produk'=>''
                    ],[
                        'nama_produk'=>'PAKET C',
                        'path_foto_produk'=>'images/frens_product_2.jpg',
                        'harga_produk'=>'Rp. 11.0000.000',
                        'deskripsi_produk'=>''
                    ],[
                        'nama_produk'=>'PAKET D',
                        'path_foto_produk'=>'images/frens_product_2.jpg',
                        'harga_produk'=>'Rp. 12.0000.000',
                        'deskripsi_produk'=>''
                    ]
                ]
            ];

            $testimonis = [
                [
                    'path_foto'=>'images/person_1.jpg',
                    'bintang'=>5,
                    'deskripsi'=>'Mantab setelah saya berjualan ini laku keras',
                    'nama'=>'Tejo Anusapati',
                    'lokasi'=>'SEMARANG'
                ],[
                    'path_foto'=>'images/person_1.jpg',
                    'bintang'=>5,
                    'deskripsi'=>'Mantab setelah saya berjualan ini laku keras',
                    'nama'=>'Tejo Anusapati',
                    'lokasi'=>'SEMARANG'
                ],[
                    'path_foto'=>'images/person_1.jpg',
                    'bintang'=>5,
                    'deskripsi'=>'Mantab setelah saya berjualan ini laku keras',
                    'nama'=>'Tejo Anusapati',
                    'lokasi'=>'SEMARANG'
                ],[
                    'path_foto'=>'images/person_1.jpg',
                    'bintang'=>5,
                    'deskripsi'=>'Mantab setelah saya berjualan ini laku keras',
                    'nama'=>'Tejo Anusapati',
                    'lokasi'=>'SEMARANG'
                ]
            ];

            $brandSerupa=[
                [
                    'nama_brand'=>'Passion Of Chocolate',
                    'path_foto'=>'images/frens_product_1.jpg',
                    'bintang'=>3,
                ],
                [
                    'nama_brand'=>'Passion Of Chocolate',
                    'path_foto'=>'images/frens_product_1.jpg',
                    'bintang'=>5,
                ]
            ];

            return view('detail',['brand'=>$brand,'testimonis'=>$testimonis,'brandSerupa'=>$brandSerupa, 'produk' => $produk, 'pakets' => $pakets]);
        }
    }
}
