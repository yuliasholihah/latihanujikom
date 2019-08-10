<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembeli;
use Session;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli = Pembeli::orderBy('created_at','desc')->get();
        return view('pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembeli = new Pembeli();
        $pembeli->pembeli_no_ktp = $request->pembeli_no_ktp;
        $pembeli->pembeli_nama = $request->pembeli_nama;
        $pembeli->pembeli_alamat = $request->pembeli_alamat;
        $pembeli->pembeli_telpon = $request->pembeli_telpon;

        $pembeli->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $pembeli->pembeli_nama."</b>"
        ]);
        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.show', compact('pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembeli = Pembeli::findOrfail($id);
        return view('pembeli.edit',compact('pembeli'));
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
        $pembeli = Pembeli::findOrfail($id);
        $pembeli->pembeli_no_ktp = $request->pembeli_no_ktp;
        $pembeli->pembeli_nama = $request->pembeli_nama;
        $pembeli->pembeli_alamat = $request->pembeli_alamat;
        $pembeli->pembeli_telpon = $request->pembeli_telpon;

        $pembeli->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $pembeli->pembeli_nama."</b>"
        ]);
        return redirect()->route('pembeli.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = Pembeli::findOrfail($id);
        if(!pembeli::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $pembeli->pembeli_nama."</b>"
        ]);
        return redirect()->route('pembeli.index');
    }
}
