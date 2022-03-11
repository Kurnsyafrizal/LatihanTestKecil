<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungController extends Controller
{
    public function home(){ 
        return view('welcome');
    }
    
    public function Perhitungan(Request $request){
        $bil1 = $request->input('bilangan1');
        $bil2 = $request->input('bilangan2');
        $op = $request->input('operator');
        
        $hasil = NULL;

        if($op == 'penjumlahan'){
            $hasil = ($bil1 + $bil2);
        }
        if($op == 'pengurangan'){
            $hasil = ($bil1 - $bil2);
        }
        if($op == 'pembagian'){
            $hasil = ($bil1 / $bil2);
        }
        if($op == 'perkalian'){
            $hasil = ($bil1 * $bil2);
        }

        // dd($hasil);
        return view('welcome',['hasil'=>$hasil]);
    }


    public function reset(){
        return redirect('/welcome');
    }
}
