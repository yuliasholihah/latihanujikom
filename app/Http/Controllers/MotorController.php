<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motor;
use Session;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motor = Motor::orderBy('created_at','desc')->get();
        return view('motor.index', compact('motor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('motor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $motor = new Motor();
        $motor->motor_kode = $request->motor_kode;
        $motor->motor_merk = $request->motor_merk;
        $motor->motor_type = $request->motor_type;
        $motor->motor_warna_pilihan = $request->motor_warna_pilihan;
        $motor->motor_harga = $request->motor_harga;
        //foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .'/assets/img/motor';
            $filename = str_random(6) . '_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $motor->foto = $filename;
        }

        $motor->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $motor->motor_type."</b>"
        ]);
        return redirect()->route('motor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motor = Motor::findOrFail($id);
        return view('motor.show', compact('motor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motor = Motor::findOrfail($id);
        return view('motor.edit',compact('motor'));
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
        $motor = Motor::findOrfail($id);
        $motor->motor_kode = $request->motor_kode;
        $motor->motor_merk = $request->motor_merk;
        $motor->motor_type = $request->motor_type;
        $motor->motor_warna_pilihan = $request->motor_warna_pilihan;
        $motor->motor_harga = $request->motor_harga;
        //foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .'/assets/img/artikel';
            $filename = str_random(6) . '_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $motor->foto = $filename;
        }

        $motor->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $motor->motor_type."</b>"
        ]);
        return redirect()->route('motor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $motor = Motor::findOrfail($id);
        if(!Motor::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $motor->motor_type."</b>"
        ]);
        return redirect()->route('motor.index');

    }
}
