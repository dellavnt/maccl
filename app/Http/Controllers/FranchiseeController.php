<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Franchisee;
use App\Models\Paket;

class FranchiseeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $franchisee = Franchisee::all();
        return view('franchisee.index',compact('nomor','franchisee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paket = Paket::all();
        return view('franchisee.form',compact('paket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $franchisee = new Franchisee;

        $franchisee->nama = $request->nama;
        $franchisee->no_hp = $request->no_hp;
        $franchisee->alamat = $request->alamat;
        $franchisee->paket_id = $request->nm_paket;
        $franchisee->save();

        return redirect('/franchisee');
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
        $franchisee = Franchisee::find($id);
        $paket      = Paket::all();
        return view('franchisee.edit',compact('franchisee','paket'));
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
        $franchisee = Franchisee::find($id);

        $franchisee->nama = $request->nama;
        $franchisee->no_hp = $request->no_hp;
        $franchisee->alamat = $request->alamat;
        $franchisee->paket_id = $request->nm_paket;
        $franchisee->save();

        return redirect('/franchisee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $franchisee = Franchisee::find($id);
        $franchisee->delete();

        return redirect('/franchisee');
    }
}