<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuaController extends Controller
{
    public function index (){
        return view('testkecil.dua');
    }

    public function validasiTanggal(Request $request){
        $this->validate($request, [
            'tanggal' => 'numeric',
            'bulan' => 'numeric',
            'tahun' => 'numeric'
        ]);


        $tanggal = request()->input('tanggal');
        $bulan = request()->input('bulan');
        $tahun = request()->input('tahun');

        $validasi = "";

        if($bulan == '01' 
            or $bulan == '03'
            or $bulan == '05'
            or $bulan == '07'
            or $bulan == '09'
            or $bulan == '11'){
            if($tanggal <=31 && $tanggal >0  ){
                $validasi = "Benar";
            }else{
                $validasi ="Tidak Sesuai atau tidak lebih dari 31";
            }
        }
        else if( $bulan == '02' ){
            if($tanggal <=28 && $tanggal >0  ){
                $validasi = "Benar";
            }else{
                $validasi ="Tidak Sesuai atau tidak lebih dari 28";
            }
        }
        else if ($bulan == '04'
            or $bulan == '06'
            or $bulan == '08'
            or $bulan == '10'
            or $bulan == '12'){
            if( $tanggal <=30 && $tanggal >0  ){
                $validasi = "Benar";
            }else{
                $validasi ="Tidak Sesuai atau tidak lebih dari 30";
            }
        }


        return view('testkecil.dua',['validasi' => $validasi, 'tanggal' => $tanggal, 'bulan' => $bulan, 'tahun' => $tahun]);

    }   
}
