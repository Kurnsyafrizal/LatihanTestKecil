<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SepuluhController extends Controller
{
    public function index (){

        $hari = "";
        $jamawal ="";
        $tambahjam ="";
        $hasil ="";


        return view('testkecil.sepuluh',[
            'hari' => $hari,
            'jamawal' => $jamawal,
            'tambahjam' => $tambahjam,
            'hasil' => $hasil
        ]);
    }


    public function HitungJam(Request $request){
        $request->validate([    
            'jamawal' => 'required',
            'tambahjam' => 'required',
        ]);

        $hari = request()->input('hari');
        $jamawal = request()->input('jamawal');
        $tambahjam = request()->input('tambahjam');

        $total = $jamawal + $tambahjam;
        $day = "";
        $sumTotal = 0;
        $sumHari = 0;


        if($total >= 24){
            $sumHari = round($total/24);
            $total = $total % 24;

            $hari += $sumHari;

            if($hari >= 6){
                $hari %=6;
            }
        }
        
        if ($hari == 0) {
            $day = "Senin";
        } else if ($hari == 1) {
            $day = "Selasa";
        } else if ($hari == 2) {
            $day = "Rabu";
        } else if ($hari == 3) {
            $day = "Kamis";
        } else if ($hari == 4) {
            $day = "Jumat";
        } else if ($hari == 5) {
            $day = "Sabtu";
        } else if ($hari == 6) {
            $day = "Minggu";
        }


        if($sumHari == 0)
        {
            if($total <= 12)
            {
               $hasil = "Menjadi hari ". $day. " jam ". $total . ""; 
            }else{
                $hasil  = "Menjadi hari ". $day. " jam ". ($total - 12) . ""; 
            }
        }
        else {
            if ($total <= 12) {
                $hasil = "Menuju hari ". $day. " jam ". $total . ""; 
                         
            } else {
                $hasil = "Menuju hari: " . $day . "  Jam: " . $jumlah_jam . " Jam: " . ($total - 12) . "";
            }
        }



        return view('testkecil.sepuluh',[
            'hari' => $hari,
            'jamawal' => $jamawal,
            'tambahjam' => $tambahjam,
            'hasil' => $hasil
        ]);
    }
}
