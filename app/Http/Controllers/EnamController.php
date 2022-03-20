<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnamController extends Controller
{
    public function index (){
        $deretangka = "";
        $deret = "";
        $hasil = "";
        return view('testkecil.enam',['deretangka' => $deretangka, 'deret' => $deret, 'hasil' => $hasil]);
    }

    public function DeretAngka(Request $request){
        $request->validate([
            'deretangka' => 'required|numeric|integer'
        ]);

        $deretangka = request()->input('deretangka');

        $deret = "";
        $hasil = 1;

        $i =0;
        while($i < $deretangka){
            $j =0;
            while($j < $deretangka){
                $deret = $deret . $hasil . " ";

                if($i % 2 == 0){
                    if($hasil != $deretangka){
                        $hasil += 1;
                    }   
                }else{
                    if($hasil != 1){
                        $hasil -= 1;
                    }
                }   
                $j++;
            }
            $deret = $deret . "\n";
            $i++;
        }

        return view('testkecil.enam',['deretangka' => $deretangka, 'deret' => $deret, 'hasil' => $deret]);
    }
}
