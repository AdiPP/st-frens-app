<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Franchise;
use App\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'HELLO';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'first_name'=>'required',
        //     'last_name'=>'required',
        //     'email'=>'required'
        // ]);

        if ($brandPict = $request->file('fotoBrand')) {

            // $brandFileName = $this->randName();
            $pathBrand = $brandPict->store('brandPict', 'public');

            // $brandPict->move('brandPict', $brandFileName);

        }

         if ($patenPict = $request->file('hakPaten')) {

            // $patenFileName = $this->randName();
            $pathPaten = $patenPict->store('patenPict', 'public');

            // $patenPict->move('patenPict', $patenFileName);

         }

        $produk = new Produk([
            'id_frans' => 1,
            'nama_produk' => $request->get('namaBrand'),
            'alamat' => $request->get('alamat'),
            'no_hp' => $request->get('handphone'),
            'id_jenis' => 1,
            'harga' => '0',
            'deskripsi' => $request->get('deskBrand'),
            'foto_produk' => $pathBrand,
            'hak_paten' => $pathPaten,
        ]);
        $produk->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $idProduk = $request->idProduk;

        $produk = Produk::find($request->idProduk);
        $produk->no_hp = $request->handphone;
        $produk->deskripsi = $request->deskProduk;
        $produk->save();

        return redirect('detail/'.$idProduk);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function randName(){
        return date("Ymd").'_'.rand(10000,99999);
    }
}
