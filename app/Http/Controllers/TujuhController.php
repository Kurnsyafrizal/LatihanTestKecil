<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TujuhController extends Controller
{
    public function index(){
        $nilaiAwal ="";
        $iteration ="";
        $hasil ="";


        return view('testkecil.tujuh',[
            'nilaiAwal' => $nilaiAwal,
            'iteration' => $iteration,
            'hasil' => $hasil
        ]);
    }

    public function convertIteration(Request $request){
        $request->validate([
            'nilaiAwal' => 'required',
            'iteration' => 'required|numeric|integer',
        ]);

        $nilaiAwal = $request->nilaiAwal;
        $iteration = $request->iteration;

        (int) $satuan = ord($nilaiAwal[3]);
        (int) $puluhan = ord($nilaiAwal[2]);
        (int) $ratusan = ord($nilaiAwal[1]);
        (int) $ribuan = ord($nilaiAwal[0]);

        $hasil = "";
        $array = array();

        for($i = 0; $i < $iteration; $i++){

            array_push($array,chr($ribuan). chr($ratusan). chr($puluhan). chr($satuan));

            if($satuan >= 49 && $satuan < 57 || $satuan >= 65 && $satuan < 90){
                $satuan++;      
              }else if($satuan == 57){
                $satuan = 65;
              }else if($satuan == 90){
                $satuan = 49;
                if($puluhan >= 49 && $puluhan < 57 || $puluhan >= 65 && $puluhan < 90 || $puluhan == 48){
                  $puluhan++;
                }else if($puluhan == 57){
                  $puluhan = 65;        
                }else if($puluhan == 90){
                  $puluhan = 49;
                  if($ratusan >= 49 && $ratusan < 57 || $ratusan >= 65 && $ratusan < 90 || $ratusan == 48){
                    $ratusan++;          
                  }else if($ratusan == 57){
                    $ratusan = 65;
                  }else if($ratusan == 90){
                    $ratusan = 49;
                    if($ribuan >= 49 && $ribuan < 57 || $ribuan >= 65 && $ribuan < 90 || $ribuan == 48){
                      $ribuan++;
                    }else if($ribuan == 57){
                      $ribuan = 65;
                    }else if($ribuan == 90){
                      break;
                    } 
                  } 
                }
              }
        }
        
        // dd($array);

        $result = array(
            'nilaiAwal' => $request->nilaiAwal,
            'iteration' => $request->iteration,
            'hasil' => $array
        );

        return view('testkecil.tujuh')->with($result);
    }
}
