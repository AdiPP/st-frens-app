<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Franchise;

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

        // $fileFoto = $request->file('fileFoto');

        // // nama file
        // echo 'File Name: '.$fileFoto->getClientOriginalName();
        // echo '<br>';
        
        // // ekstensi file
        // echo 'File Extension: '.$fileFoto->getClientOriginalExtension();
        // echo '<br>';
        
        // // real path
        // echo 'File Real Path: '.$fileFoto->getRealPath();
        // echo '<br>';
        
        // // ukuran file
        // echo 'File Size: '.$fileFoto->getSize();
        // echo '<br>';
        
        // // tipe mime
        // echo 'File Mime Type: '.$fileFoto->getMimeType();

        // // isi dengan nama folder tempat kemana file diupload
        // $tujuan_upload = 'data_file';
        // $nama_foto = $tujuan_upload;
        // $fileFoto->move($tujuan_upload,$fileFoto->getClientOriginalName());
        
        // echo '<br>';
        
        // echo $nama_foto;
        // dd($nama_foto);
        // die();

        $franchise = new Franchise([
            'nama_brand' => $request->get('namaBrand'),
            'hak_paten' => '1',
            'no_tlp' => '1',
            'no_ktp' => '1',
            'gambar' => '1',
            'email' => '1',
            'desk_brand' => $request->get('deskBrand')
        ]);
        $franchise->save();
        echo 'data masuk pak eko';
        // return redirect('/contacts')->with('success', 'Contact saved!');
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
