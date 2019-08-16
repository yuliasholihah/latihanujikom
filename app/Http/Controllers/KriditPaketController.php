<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KriditPaket;
use Session;

class KriditPaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $kriditpaket = KriditPaket::orderBy('created_at','desc')->get();
        return view('kridit paket.index', compact('kriditpaket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('kridit paket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kriditpaket = new KriditPaket();
        $kriditpaket->paket_kode = $request->paket_kode;
        $kriditpaket->paket_harga_cash = $request->paket_harga_cash;
        $kriditpaket->paket_uang_muka = $request->paket_uang_muka;
        $kriditpaket->paket_jumlah_cicilan = $request->paket_jumlah_cicilan;
        $kriditpaket->paket_bunga = $request->paket_bunga;
        $kriditpaket->paket_nilai_cicilan = $request->paket_nilai_cicilan;

        $kriditpaket->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $kriditpaket->paket_kode."</b>"
        ]);
        return redirect()->route('kridit paket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kriditpaket = KriditPaket::findOrFail($id);
        return view('kridit paket.show', compact('kriditpaket'));
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
