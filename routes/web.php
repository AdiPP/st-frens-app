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

Route::post('/daftar/store', 'RegistrasiController@store');

Route::get('/partnership/daftar/{id_produk}/{id_agen}', 'PartnershipController@daftar');

Route::get('/login', function () {
    return view('login');
});

Route::post('/login/masuk', 'RegistrasiController@masuk');

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


Route::get('/agen', function () {
    return view('agen');
});

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
