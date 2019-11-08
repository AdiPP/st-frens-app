<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Franchisor;
use App\Models\Agen;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // dd($request);
        $user = new User();
        $user->username = $request->get('username');
        $user->password = $request->get('password');
        $user->jabatan = $request->get('jabatan');
        $user->save();
        if ($user->jabatan == 'franchisor') {

            if ($ktpPict = $request->file('KTP')) {
                $pathKTP = $ktpPict->store('ktpPict', 'frens');
            }

            if ($npwpPict = $request->file('NPWP')) {
                $pathNPWP = $npwpPict->store('npwpPict', 'frens');
            }

            $franchisor = new Franchisor();
            $franchisor->nama_franchisor = $request->get('name');
            $franchisor->no_tlp = $request->get('noTelepon');
            $franchisor->foto_ktp = $pathKTP;
            $franchisor->npwp = $pathNPWP;
            $franchisor->gambar = '';
            $franchisor->email = $request->get('email');
            $franchisor->id_user = $user->id_user;
            $franchisor->desk_brand = '';
            $franchisor->save();
        } elseif ($user->jabatan == 'agen') {

            if ($ktpPict = $request->file('KTP')) {
                $pathKTP = $ktpPict->store('ktpPict', 'frens');
            }

            $agen = new Agen();
            $agen->nama = $request->get('name');
            $agen->alamat = 'Purwokerto';
            $agen->alamat_detil = '';
            $agen->foto_ktp = $pathKTP;
            $agen->no_tlp = $request->get('noTelepon');
            $agen->gambar_lokasi = '';
            $agen->id_user = $user->id_user;
            $agen->save();
        }

        return redirect('/login');

    }

    public function masuk(Request $request) {

        $user = User::where('username', $request->get('username'))
                        ->where('password', $request->get('password'))
                        ->first();

        if ($user == false) {
            return redirect('/login');
        }

        if  ($user->jabatan == 'franchisor') {
            $loginUser = Franchisor::where('id_user', $user->id_user)->first();
            session(['user' => $loginUser]);
            session(['id_frans' => $loginUser->id_frans]);

            return redirect('/session/franchisor');
        } elseif ($user->jabatan == 'agen') {
            $loginUser = Agen::where('id_user', $user->id_user)->first();
            session(['user' => $loginUser]);
            session(['id_agen' => $loginUser->id_agen]);

            return redirect('/session/agen');
        }

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
