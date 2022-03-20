<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LimaController extends Controller
{
    public function index (){
        $iterasi = ' ';
        $hasil = '';
        
        return view('testkecil.lima', ['iterasi' => $iterasi, 'hasil' => $hasil]);
    }


    public function Fibonnaci(Request $request){
        $request->validate([
            'iterasi' => 'numeric|integer|required'
        ]);

        if(isset($_POST['fibonacci'])){

            $iterasi = request()->input('iterasi');

            $temp  = 0;
            $temp1 = 1;
            $temp2 = 1;

            $hasil = " ";

            $i = 0;
            while($i < $iterasi){
                if($i == 0){
                    $hasil = $hasil." ". $temp1;
                }else{
                    $temp2 = $temp + $temp1;

                    $hasil = $hasil." ". $temp2;
                    $temp = $temp1;
                    $temp1 = $temp2;
                }
                $i++;
            }

            return view('testkecil.lima', ['iterasi' => $iterasi, 'hasil' => $hasil]);

        }

    }
    

}
