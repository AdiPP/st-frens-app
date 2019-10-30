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
                    'id_paket'=>'1',
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
        return view('detail_franchisor',['brand'=>$brand,'agens'=>$agens]);
    }elseif(session('jabatan') == 'agen'){
        if ($id_produk == 1) {
            $brand=[
                'id_produk'=>'1',
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
                        'id_paket'=>'1',
                        'nama_produk'=>'PAKET A',
                        'path_foto_produk'=>'images/frens_product_2.jpg',
                        'harga_produk'=>'Rp. 9.000.000',
                        'deskripsi_produk'=>'Paket lengkap, Training Sumberdaya Manusia (SDM) Berupa pembekalan video SOP, Seragam / Outfit Lengkap media promosi online dan offline bahan baku awal semua paket SOP lengkap berupa video pembelajaran.'
                    ],[
                        'id_paket'=>'1',
                        'nama_produk'=>'PAKET B',
                        'path_foto_produk'=>'images/frens_product_2.jpg',
                        'harga_produk'=>'Rp. 10.0000.000',
                        'deskripsi_produk'=>''
                    ],[
                        'id_paket'=>'1',
                        'nama_produk'=>'PAKET C',
                        'path_foto_produk'=>'images/frens_product_2.jpg',
                        'harga_produk'=>'Rp. 11.0000.000',
                        'deskripsi_produk'=>''
                    ],[
                        'id_paket'=>'1',
                        'nama_produk'=>'PAKET D',
                        'path_foto_produk'=>'images/frens_product_2.jpg',
                        'harga_produk'=>'Rp. 12.0000.000',
                        'deskripsi_produk'=>''
                    ]
                ]
            ];
        }
        return view('detail_agen',['brand'=>$brand]);
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

        return view('detail',['brand'=>$brand,'testimonis'=>$testimonis,'brandSerupa'=>$brandSerupa]);
    }
})->name('detail_produk');

Route::middleware('checkIsRole:franchisor')->get('detail/{id_brand}/riwayat_agen/{id_agen}/{jawaban}','FranchisorController@konfirmasiAgen')->name('konfirmasi_jawaban_agen');

Route::middleware('checkIsRole:franchisor')->get('detail/{id_brand}/riwayat_agen/{id_agen}','FranchisorController@lihatAgen')->name('konfirmasi_agen');

Route::post('detail/{id_brand}','PemesananController@pesanPaket')->name('post_pesan_paket');


Route::get('/session/{jabatan}', function ($jabatan) {
    Session::put('jabatan',$jabatan);
    return redirect()->route('home');
});

Route::get('/sessionUser/{id_user}', function (App\Models\User $id_user) {
    Session::put('jabatan',$id_user->jabatan);
    Session::put('id_user',$id_user->id_user);
    switch ($id_user->jabatan) {
        case 'agen':
            # code...
            Session::put('id_agen',$id_user->agen->id_agen);
            break;
        
        default:
            # code...
            Session::put('id_frans',$id_user->franchisor->id_frans);
            break;
    }
    return redirect()->route('home');
});

Route::get('/logout', function () {
    Session::flush();
    return redirect()->route('home');
});

Route::middleware('checkIsLogin')->get('/pemesanan','PemesananController@home')->name('pemesanan');
Route::post('/pemesanan','PemesananController@postPemesanan')->name('post_pemesanan');


Route::middleware('checkIsRole:agen')->get('/pemesanan_delete/{id_pemesanan}','PemesananController@deleteKeranjang')->name('delete_keranjang');
Route::middleware('checkIsRole:franchisor')->get('/pemesanan_konfirmasi/{id_pemesanan}/{jawaban}','PemesananController@konfirmasiPemesanan')->name('konfirmasi_pemesanan');


Route::get('/login', function () {
    return view('login');
});

Route::middleware('checkIsRole:franchisor')->get('/agen','FranchisorController@lihatDaftarAgen')->name('lihat_daftar_agen');

Route::middleware('checkIsRole:franchisor')->get('/agen/{id_agen}/getData/{tahun}','FranchisorController@getDataYearly')->name('get_data_yearly');
Route::middleware('checkIsRole:franchisor')->get('/agen/{id_agen}','FranchisorController@lihatDaftarAgenDetail')->name('lihat_daftar_agen_detail');

Route::middleware('checkIsRole:franchisor')->get('/laporan', 'FranchisorController@laporan')->name('laporan');
Route::middleware('checkIsRole:franchisor')->get('/laporan/getData', 'FranchisorController@getDataLaporan')->name('get_data_laporan');

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

Route::get('/dashboard/franchisor', function () {
    return view('backendFranchisor.dashboard');
});

// DASHBOARD.PRODUK

Route::get('/dashboard/franchisor/produk', function () {
    return view('backendFranchisor.daftarProduk');
});

Route::get('/dashboard/franchisor/produk/tambah', function () {
    return view('backendFranchisor.tambahProduk');
});

Route::get('/dashboard/franchisor/produk/lihat', function () {
    return view('backendFranchisor.lihatProduk');
});

Route::get('/dashboard/franchisor/produk/ubah', function () {
    return view('backendFranchisor.ubahProduk');
});

// DASHBOARD.PRODUK.PAKET

Route::get('/dashboard/franchisor/produk/paket/tambah', function () {
    return view('backendFranchisor.tambahPaketProduk');
});

// DASHBOARD.LAPORAN

Route::get('/dashboard/franchisor/laporan', function () {
    return view('backendFranchisor.laporanFranchise');
});

// DASHBOARAD.AGEN

Route::get('/dashboard/franchisor/agen', function () {
    return view('backendFranchisor.daftarAgen');
});

Route::get('/dashboard/franchisor/agen/pantau', function () {
    return view('backendFranchisor.pantauAgen');
});

Route::get('/dashboard/franchisor/agen/calonAgen', function () {
    return view('backendFranchisor.daftarCalonAgen');
});

// DASHBOARD.PESANAN
Route::get('/dashboard/franchisor/pesanan', function () {
    return view('backendFranchisor.daftarPesanan');
});

// DASHBOARD AGEN
Route::get('/dashboard/agen', function () {
    return view('backendAgen.dashboard');
});

// DASHBOARD AGEN.PRODUK

Route::get('/dashboard/agen/produk', function () {
    return view('backendAgen.daftarProduk');
});

Route::get('/dashboard/agen/produk/lihat', function () {
    return view('backendAgen.lihatProduk');
});

Route::get('/dashboard/agen/produk/pesan', function () {
    return view('backendAgen.pesanProduk');
});