<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TigaController extends Controller
{
    public function index (){
        $kalimat = '';
        $hasil = '';
        return view('testkecil.tiga' , ['kalimat' => $kalimat, 'hasil'=>$hasil]);
    }


    public function HitungTiga(Request $request){

        $this->validate($request , [
            'kalimat' => 'required|max:255',
        ]);

        $kalimat = request()->input('kalimat');
        $Potongkalimat = explode(" ", $kalimat);

        return view('testkecil.tiga', ['Potongkalimat' => $Potongkalimat]);
    }
}
