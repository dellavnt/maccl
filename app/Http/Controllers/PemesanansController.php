<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanans;

class PemesanansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $pemesanan = Pemesanans::all();
        return view('pemesanan.index',compact('nomor','pemesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemesanan.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pemesanan = new Pemesanans;

        $pemesanan->kode = $request->kode;
        $pemesanan->pemesanan = $request->pemesanan;
        $pemesanan->save();

        return redirect('/pemesanan');
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
        $pemesanan = Pemesanans::find($id);
        return view('pemesanan.edit',compact('pemesanan'));
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
        $pemesanan = Pemesanans::find($id);

        $pemesanan->kode = $request->kode;
        $pemesanan->pemesanan = $request->pemesanan;
        $pemesanan->save();

        return redirect('/pemesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemesanan = Pemesanans::find($id);
        $pemesanan->delete();

        return redirect('/pemesanan');
    }
}