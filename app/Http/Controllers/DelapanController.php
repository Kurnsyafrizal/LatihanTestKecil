<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DelapanController extends Controller
{
    public function index (){

        return view('testkecil.delapan');
        
    }


    public function bintang_req(Request $request){

        $request->validate([
            'angka' => 'required|numeric'
        ]);

        $angka = "";
        
        $regAngka = request()->input('angka');

        // Segitiga Pertama

        for ($i = 1; $i <= $regAngka; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                 $angka = $angka . "*";
            }
            $angka = $angka . "\n";
        }
        $angka = $angka . "\n";


        //Kedua
        for ($i = $regAngka - 1; $i >= 0; $i--) {
            for ($j = 0; $j < $regAngka; $j++) {
                if ($j >= $i) {
                    $angka = $angka . "*";
                } else {
                    $angka = $angka . " ";
                }
            }
            $angka = $angka . "\n";
        }
        $angka = $angka . "\n";


        //Ketiga
        for ($i = $regAngka - 1; $i >= 0; $i--) {
            for ($j = 0; $j < $regAngka; $j++) {
                if ($j <= $i) {
                    $angka = $angka . "*";
                } else {
                    $angka = $angka . " ";
                }
            }
            $angka = $angka . "\n";
        }
        $angka = $angka . "\n";

        //Keempat
        for ($i = 0; $i < $regAngka; $i++) {
            for ($j = 0; $j < $regAngka; $j++) {
                if ($j >= $i) {
                    $angka = $angka . "*";
                } else {
                    $angka = $angka . " ";
                }
            }
            $angka = $angka . "\n";
        }
        $angka = $angka . "\n";

        

        $result = array([
            'angka' =>$regAngka,
            'hasil'=> $angka
        ]);

        return view('testkecil.delapan')->with($result);
    }
}
