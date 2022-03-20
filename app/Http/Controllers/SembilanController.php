<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SembilanController extends Controller
{
    public function index (){
        return view('testkecil.sembilan');
    }

    public function separtor(Request $request){
        $request->validate([
            'separator' => 'required|numeric|integer'
        ]);

        $num ="";
        $numSeparator = 0; 
        $separator = request()->input('separator');


        $i = strlen($separator) -1;
        while($i >=0){
            $num = $separator[$i] . $num;
            $numSeparator++;
            
            if ($i != 0) {
                if ($numSeparator == 3) {
                    $num ="." . $num;
                    $numSeparator = 0;
                }
            }
            $i--;
        }

        $num = $num;

        $result = array(
            'kalimat' => $separator,
            'hasil' => $num,
        );

        return view('testkecil.sembilan')->with($result);
    }
}
