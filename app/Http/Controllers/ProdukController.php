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

        $fotoBrand = $request->file('fotoBrand');

        $name = $fotoBrand->getClientOriginalName();

        $fotoBrand->move('test', $name);

        $produk = new Produk([
            'id_frans' => 1,
            'nama_produk' => $request->get('namaBrand'),
            'alamat' => $request->get('alamat'),
            'no_hp' => $request->get('handphone'),
            'id_jenis' => 1,
            'harga' => '5000',
            'deskripsi' => $request->get('deskBrand'),
            'foto_produk' => $name,
            'hak_paten' => '',
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
    public function update(Request $request, $id)
    {
        //
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
}
