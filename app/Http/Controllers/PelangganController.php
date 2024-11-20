<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use App\Models\pelanggan;

class PelangganController extends Controller
{
    public function index(){
        return "ini adalah halaman index pelanggan";
    }

    public function create(){
        return view('form-pelanggan');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'pelangganid'   =>'required|size :5',
            'namapelanggan' =>'required|size:60',
            'alamat'        =>'required|size:100',
            'notelepon'     =>'required|size:12'
        ]);

        $pelanggan = new Pelanggan();
        $pelanggan->pelangganid = $validateData['pelangganid'];
        $pelanggan->namapelanggan = $validateData['namapelanggan'];
        $pelanggan->alamat = $validateData['alamat'];
        $pelanggan->notelepon = $validateData['notelepon'];
        $pelanggan->save();

        return "Data berhasil diinput ke database";
    }
}
