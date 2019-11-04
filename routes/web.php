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

// Route::get('/', 'homeController@index');

// Route::resource('produk', 'ProdukController');

// FRONTEND

Route::get('/', 'homeController@index')->name('home');

Route::get('/detail/{id_produk}', 'homeController@detailProduk');

Route::post('/produk/store', 'ProdukController@store');

Route::post('/produk/update', 'ProdukController@update');

Route::post('/paket/store', 'PaketController@store');

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
                'nama_produk'=>'Paket A',
                'alamat'=>'Perum Berkoh K 77',
                'harga'=>90000000,
            ],
        ];
        $riwayats=[
            [
                'path_foto'=>'images/frens_product_1.jpg',
                'nama_pembeli'=>'Ananda Arief',
                'nama_produk'=>'Paket A',
                'alamat'=>'Perum Berkoh K 77',
                'harga'=>90000000,
                'kuantitas'=>1,
                'total'=>90000000,
                'status'=>'Mengunggu Konfirmasi'
            ],[
                'path_foto'=>'images/frens_product_1.jpg',
                'nama_pembeli'=>'Ananda Arief',
                'nama_produk'=>'Bubuk Coklat',
                'alamat'=>'Perum Berkoh K 77',
                'harga'=>90000000,
                'kuantitas'=>1,
                'total'=>90000000,
                'status'=>'Terkonfirmasi'
            ],
        ];
        return view('pemesanan_agen',['keranjangs'=>$keranjang,'riwayats'=>$riwayats]);
    }elseif(session('jabatan')=='franchisor'){
        $riwayats=[
            [
                'path_foto'=>'images/frens_product_1.jpg',
                'nama_pembeli'=>'Ananda Arief',
                'nama_produk'=>'Paket A',
                'alamat'=>'Perum Berkoh K 77',
                'harga'=>90000000,
                'kuantitas'=>1,
                'total'=>90000000,
                'status'=>'Mengunggu Konfirmasi'
            ],[
                'path_foto'=>'images/frens_product_1.jpg',
                'nama_pembeli'=>'Ananda Arief',
                'nama_produk'=>'Bubuk Coklat',
                'alamat'=>'Perum Berkoh K 77',
                'harga'=>9000000,
                'kuantitas'=>1,
                'total'=>9000000,
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

// // DASHBOARD

// Route::get('/dashboard/franchisor', function () {
//     return view('backendFranchisor.dashboard');
// });

// // DASHBOARD.PRODUK

// Route::get('/dashboard/franchisor/produk', function () {
//     return view('backendFranchisor.daftarProduk');
// });

// Route::get('/dashboard/franchisor/produk/tambah', function () {
//     return view('backendFranchisor.tambahProduk');
// });

// Route::get('/dashboard/franchisor/produk/lihat', function () {
//     return view('backendFranchisor.lihatProduk');
// });

// Route::get('/dashboard/franchisor/produk/ubah', function () {
//     return view('backendFranchisor.ubahProduk');
// });

// // DASHBOARD.PRODUK.PAKET

// Route::get('/dashboard/franchisor/produk/paket/tambah', function () {
//     return view('backendFranchisor.tambahPaketProduk');
// });

// // DASHBOARD.LAPORAN

// Route::get('/dashboard/franchisor/laporan', function () {
//     return view('backendFranchisor.laporanFranchise');
// });

// // DASHBOARAD.AGEN

// Route::get('/dashboard/franchisor/agen', function () {
//     return view('backendFranchisor.daftarAgen');
// });

// Route::get('/dashboard/franchisor/agen/pantau', function () {
//     return view('backendFranchisor.pantauAgen');
// });

// Route::get('/dashboard/franchisor/agen/calonAgen', function () {
//     return view('backendFranchisor.daftarCalonAgen');
// });

// // DASHBOARD.PESANAN
// Route::get('/dashboard/franchisor/pesanan', function () {
//     return view('backendFranchisor.daftarPesanan');
// });

// // DASHBOARD AGEN
// Route::get('/dashboard/agen', function () {
//     return view('backendAgen.dashboard');
// });

// // DASHBOARD AGEN.PRODUK

// Route::get('/dashboard/agen/produk', function () {
//     return view('backendAgen.daftarProduk');
// });

// Route::get('/dashboard/agen/produk/lihat', function () {
//     return view('backendAgen.lihatProduk');
// });

// Route::get('/dashboard/agen/produk/pesan', function () {
//     return view('backendAgen.pesanProduk');
// });

// Route::get('/produk', function () {
//     return view('produk.tambahProduk');
// });
