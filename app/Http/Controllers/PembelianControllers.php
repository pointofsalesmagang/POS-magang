<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;

class PembelianControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelian = Pembelian::all();
        return view ('pembelian.index',compact('pembelian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembelian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'supplier' => 'required',
            'total_item' => 'required',
            'total_harga' => 'required',
            'diskon' => 'required',
            'total_bayar' => 'required',
         ]);
         Pembelian::create($request->all());
 
         return redirect()->route('pembelian.index')->with('succes','Data berhasil di Input');
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
    public function edit(Pembelian $pembelian)
    {
        return view('pembelian.edit', compact('pembelian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembelian $pembelian)
    {
        $request->validate([
            'tanggal' => 'required',
            'supplier' => 'required',
            'total_item' => 'required',
            'total_harga' => 'required',
            'diskon' => 'required',
            'total_bayar' => 'required',
         ]);
         Pembelian::find($pembelian)->first()->update($request->all());
 
         return redirect()->route('pembelian.index')->with('succes','Data berhasil di Input');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembelian $pembelian)
    {
        $pembelian->delete();

        return redirect()->route('pembelian.index')->with('succes','Data Berhasil di Hapus');
    }
}
