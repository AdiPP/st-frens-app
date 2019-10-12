<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// FRONTEND

Route::get('/', function () {
    
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

    return view('home',['katalogs'=>$katalog,'brands'=>$brand]);
})->name('home');

Route::get('/detail/{id_produk}', function ($id_produk) {
    if(session('jabatan') == 'franchisor'){
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
                    'nama_produk'=>'Bubuk Coklat',
                    'path_foto_produk'=>'images/frens_product_2.jpg',
                    'harga_produk'=>'Rp. 5.000',
                    'deskripsi_produk'=>'Bubuk Ini adalah Bubuk Khusus produk ini dibuat dengan bubuk rahasia.'
                ],[
                    'nama_produk'=>'Cup',
                    'path_foto_produk'=>'images/frens_product_2.jpg',
                    'harga_produk'=>'Rp. 500',
                    'deskripsi_produk'=>'Cup Ini adalah Cup Khusus produk ini dibuat dengan cara rahasia.'
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
        return view('detail_franchisor',['brand'=>$brand,'agens'=>$agens]);
    }elseif(session('jabatan') == 'agen'){
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
                    'nama_produk'=>'Bubuk Coklat',
                    'path_foto_produk'=>'images/frens_product_2.jpg',
                    'harga_produk'=>'Rp. 5.000',
                    'deskripsi_produk'=>'Bubuk Ini adalah Bubuk Khusus produk ini dibuat dengan bubuk rahasia.'
                ],[
                    'nama_produk'=>'Cup',
                    'path_foto_produk'=>'images/frens_product_2.jpg',
                    'harga_produk'=>'Rp. 500',
                    'deskripsi_produk'=>'Cup Ini adalah Cup Khusus produk ini dibuat dengan cara rahasia.'
                ]
            ]
        ];
        return view('detail_agen',['brand'=>$brand]);
    }else{
        $brand=[
            'nama_brand'=>'Passion Of Chocolate',
            'path_foto_brand'=>'images/frens_product_1.jpg',
            'bintang'=>3,
            'lokasi'=>'JABODETABEK',
            'kontak'=>'08123721721',
            'harga'=>'Rp. 10.000.000',
            'deskripsi'=>'Franchise Minuman Populer Dengan Modal Dibawah 13 Juta.',
            'produk'=>[
                [
                    'nama_produk'=>'Bubuk Coklat',
                    'path_foto_produk'=>'images/frens_product_2.jpg',
                    'harga_produk'=>'Rp. 5.000',
                    'deskripsi_produk'=>'Bubuk Ini adalah Bubuk Khusus produk ini dibuat dengan bubuk rahasia.'
                ],[
                    'nama_produk'=>'Cup',
                    'path_foto_produk'=>'images/frens_product_2.jpg',
                    'harga_produk'=>'Rp. 500',
                    'deskripsi_produk'=>'Cup Ini adalah Cup Khusus produk ini dibuat dengan cara rahasia.'
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

        return view('detail',['brand'=>$brand,'testimonis'=>$testimonis,'brandSerupa'=>$brandSerupa]);
    }
});

Route::get('detail/{id_brand}/riwayat_agen/{id_agen}', function ($id_brand,$id_agen) {
    $brand=[
        'nama_brand'=>'Passion Of Chocolate'
    ];
    $agen = [
        'id_agen'=>1,
        'path_foto'=>'images/person_1.jpg',
        'bintang'=>5,
        'nama'=>'Tejo Anusapati',
        'lokasi'=>'SEMARANG'
    ];   

    $testimonis = [
        [
            'path_foto'=>'images/person_1.jpg',
            'bintang'=>5,
            'deskripsi'=>'Performanya bagus',
            'nama'=>'Ahmad Yuli',
            'brand'=>'King Choco'
        ],[
            'path_foto'=>'images/person_1.jpg',
            'bintang'=>5,
            'deskripsi'=>'Produk saya laku',
            'nama'=>'Bambang Rino',
            'brand'=>'Fiesta Nugget'
        ]
    ]; 
    return view('riwayat_agen',['brand'=>$brand,'agen'=>$agen,'testimonis'=>$testimonis]);
});

Route::get('/session/{jabatan}', function ($jabatan) {
    Session::put('jabatan',$jabatan);
    return redirect()->route('home');
});

Route::get('/logout', function () {
    Session::flush();
    return redirect()->route('home');
});

Route::get('/pemesanan', function () {
    if(session('jabatan')=='agen'){
        $keranjang=[
            [
                'path_foto'=>'images/frens_product_1.jpg',
                'nama_pembeli'=>'Ananda Arief',
                'nama_produk'=>'Bubuk Coklat',
                'alamat'=>'Perum Berkoh K 77',
                'harga'=>5000,
            ],
        ];
        $riwayats=[
            [
                'path_foto'=>'images/frens_product_1.jpg',
                'nama_pembeli'=>'Ananda Arief',
                'nama_produk'=>'Bubuk Coklat',
                'alamat'=>'Perum Berkoh K 77',
                'harga'=>5000,
                'kuantitas'=>2,
                'total'=>10000,
                'status'=>'Mengunggu Konfirmasi'
            ],[
                'path_foto'=>'images/frens_product_1.jpg',
                'nama_pembeli'=>'Ananda Arief',
                'nama_produk'=>'Bubuk Coklat',
                'alamat'=>'Perum Berkoh K 77',
                'harga'=>5000,
                'kuantitas'=>2,
                'total'=>10000,
                'status'=>'Terkonfirmasi'
            ],
        ];
        return view('pemesanan_agen',['keranjangs'=>$keranjang,'riwayats'=>$riwayats]);
    }elseif(session('jabatan')=='franchisor'){
        $riwayats=[
            [
                'path_foto'=>'images/frens_product_1.jpg',
                'nama_pembeli'=>'Ananda Arief',
                'nama_produk'=>'Bubuk Coklat',
                'alamat'=>'Perum Berkoh K 77',
                'harga'=>5000,
                'kuantitas'=>2,
                'total'=>10000,
                'status'=>'Mengunggu Konfirmasi'
            ],[
                'path_foto'=>'images/frens_product_1.jpg',
                'nama_pembeli'=>'Ananda Arief',
                'nama_produk'=>'Bubuk Coklat',
                'alamat'=>'Perum Berkoh K 77',
                'harga'=>5000,
                'kuantitas'=>2,
                'total'=>10000,
                'status'=>'Terkonfirmasi'
            ],
        ];
        return view('pemesanan_franchisor',['riwayats'=>$riwayats]);
    }
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/agen', function () {
    return view('agen');
});

Route::get('/agen/{id_agen}', function ($id_agen) {
    return view('agen_detail');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/laporan/{id_produk}', function ($id_produk) {
    return view('laporan_detail');
});

Route::get('/lupa_password', function () {
    return view('lupa_password');
});

Route::get('/tentang_kami', function () {
    return view('tentang_kami');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/daftar_franchisor', function () {
    return view('daftar_franchisor');
});

Route::get('/daftar_agen', function () {
    return view('daftar_agen');
});

// DASHBOARD

// DASHBOARD.PRODUK

Route::get('/dashboard/produk', function () {
    return view('backendFran.daftarProduk');
});

Route::get('/dashboard/produk/tambah', function () {
    return view('backendFran.tambahProduk');
});

Route::get('/dashboard/produk/lihat', function () {
    return view('backendFran.lihatProduk');
});

Route::get('/dashboard/produk/ubah', function () {
    return view('backendFran.ubahProduk');
});

// DASHBOARD.PRODUK.PAKET

Route::get('/dashboard/produk/paket/tambah', function () {
    return view('backendFran.tambahPaketProduk');
});

// DASHBOARD.LAPORAN

Route::get('/dashboard/laporan', function () {
    return view('backendFran.laporanFranchise');
});

// DASHBOARAD.AGEN

Route::get('/dashboard/agen', function () {
    return view('backendFran.daftarAgen');
});

Route::get('/dashboard/agen/pantau', function () {
    return view('backendFran.pantauAgen');
});

Route::get('/dashboard/agen/calonAgen', function () {
    return view('backendFran.daftarCalonAgen');
});

// DASHBOARD.PESANAN
Route::get('/dashboard/pesanan', function () {
    return view('backendFran.daftarPesanan');
});