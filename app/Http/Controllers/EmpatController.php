<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NumberFormatter;
use PhpSpellcheck\SpellChecker\Aspell;

class EmpatController extends Controller
{
    public function index(){

        return view('testkecil.empat');
    }


    public function terbilang($val) 
    {
        $Num = abs($val);
        $numBilangan = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $arrTemp = "";

        if ($Num < 12) 
        {
            $arrTemp = " ". $numBilangan[$Num];
        } 
        else if ($Num <20) 
        {
            $arrTemp = $this->terbilang($Num - 10). " belas";
        } 
        else if ($Num < 100) 
        {
            $arrTemp = $this->terbilang($Num/10)." puluh". $this->terbilang($Num % 10);
        } 
        else if ($Num < 200) 
        {
            $arrTemp = " seratus" . $this->terbilang($Num - 100);
        } 
        else if ($Num < 1000) 
        {
            $arrTemp = $this->terbilang($Num/100) . " ratus" . $this->terbilang($Num % 100);
        } 
        else if ($Num < 2000) 
        {
            $arrTemp = " seribu" . $this->terbilang($Num - 1000);
        } 
        else if ($Num < 1000000) 
        {
            $arrTemp = $this->terbilang($Num/1000) . " ribu" . $this->terbilang($Num % 1000);
        } 
        else if ($Num < 1000000000) 
        {
            $arrTemp = $this->terbilang($Num/1000000) . " juta" . $this->terbilang($Num % 1000000);
        } 
        else if ($Num < 1000000000000) 
        {
            $arrTemp = $this->terbilang($Num/1000000000) . " milyar" . $this->terbilang(fmod($Num,1000000000));
        }     
        return $arrTemp;
    }

    public function spellBilangan($val)
    {
        $tempAngka = trim($this->terbilang($val));   
        return $tempAngka;
    }


    public function soal4(Request $request)
    {
        $tempAngka = $this->spellBilangan($request->input);  
        if($request->input<0)
            $tempAngka = "minus ".$tempAngka;
        return view('testkecil.empat', ['res'=>$tempAngka, 'prev'=>$request->input]);
    }

}
