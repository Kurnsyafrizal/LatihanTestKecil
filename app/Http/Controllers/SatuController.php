<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatuController extends Controller
{
    public function index (){
        $kalimat = '';
        $abjad = '';
        $hasil = '';

        return view('testkecil.satu', ['kalimat' => $kalimat, 'abjad' => $abjad, 'hasil' => $hasil]);
    }

    public function HitungSatu(Request $request){
       
        $kalimat = strtoupper(request()->input('kalimat'));
        $abjad = strtoupper(request()->input('abjad'));
        
        $hasil = 0;

        for($i = 0; $i < strlen($kalimat); $i++){
            if($kalimat[$i] == $abjad){
                $hasil++;
            }
        }

        return view('testkecil.satu', compact(['kalimat', 'hasil', 'abjad'])); 
    }


    
}
