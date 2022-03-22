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
            'angka' => 'numeric|integer|required'
        ]);

        $angka = "";
        $tempAngka = $request->angka;

        // Segitiga 1
        $i= 0;
        while($i < $tempAngka){
            $j=0;
            while($j <= $i){
                $angka = $angka . "*";
                $j++;
            }
            $angka = $angka . "\n";
            $i++;
        }

        $angka = $angka . "\n";

        // Segitiga 2
        $i= $tempAngka -1;
        while($i >=0){
            $j=0;
            while($j < $tempAngka){
                if($j >= $i){
                    $angka = $angka . "*";
                }else{
                    $angka = $angka . " ";
                }   
                
                $j++;
            }
            $angka = $angka . "\n";
            $i--;
        }

        $angka = $angka . "\n";
 
        // Segitiga 3
        $i= $tempAngka -1;
        while($i >=0){
            $j=0;
            while($j < $tempAngka){
                if($j <= $i){
                    $angka = $angka . "*";
                }else{
                    $angka = $angka . " ";
                }   
                
                $j++;
            }
            $angka = $angka . "\n";
            $i--;
        }

        $angka = $angka . "\n";

        // Segitiga 4
        $i= 0;
        while($i < $tempAngka){
            $j=0;
            while($j < $tempAngka){
                if($j >= $i){
                    $angka = $angka . "*";
                }else{
                    $angka = $angka . " ";
                }   
                
                $j++;
            }
            $angka = $angka . "\n";
            $i++;
        }

        $angka = $angka . "\n";
        
        return view('testkecil.delapan',[
            'angka' => $tempAngka,
            'hasil' => $angka,
        ]);
    }
    
}
