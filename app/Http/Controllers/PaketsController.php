<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pakets;
use App\Models\Pemesanans;

class PaketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $paket = Pakets::all();
        return view('paket.index',compact('nomor','paket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pemesanan = Pemesanans::all();
        return view('paket.form',compact('pemesanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paket = new Pakets;

        $paket->kode = $request->kode;
        $paket->nm_paket = $request->nm_paket;
        $paket->harga_paket = $request->harga_paket;
        $paket->save();

        return redirect('/paket');
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
        $paket = Pakets::find($id);
        return view('paket.edit',compact('paket'));
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
        $paket = Pakets::find($id);

        $paket->kode = $request->kode;
        $paket->paket = $request->paket;
        $paket->save();

        return redirect('/paket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paket = Pakets::find($id);
        $paket->delete();

        return redirect('/paket');
    }
}