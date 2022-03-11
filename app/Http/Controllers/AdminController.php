<?php

namespace App\Http\Controllers;

use App\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $part = DB::table('admin')->select('*')->get();
        return view('crud',['parts' => $part]);
    }

    public function editParts($id){
        $part = DB::select('SELECT * FROM admin where id=?',[$id]);
        return view('edit',['parts'=>$part]);
    }

    public function updateParts(Request $id,$request){
        $part = Part::find($id);

        $ptnum = $request->validate([
            'partnumber' => 'required',
            'name' => 'required',
            'UM' => 'required'
        ]);

        Part::create([
            'partnumber'=> $ptnum->get('partnumber'),
            'name' => $ptnum->get('name'),
            'UM' => $ptnum->get('UM')
        ]);

        return redirect()->route('edit',['parts'=>$part]);
    }

    public function deleteParts($id){

        $part = DB::table('admin')->where('id',$id)->delete();
        return view('crud',['parts'=> $part]);
    }

    
    public function searchParts(Request $request){
        $part = DB::table('admin')
                ->where('partnumber', 'LIKE', '%' . $request->cari . '%')->get();
        
        return view('crud',['parts' => $part]);
    }

    public function addParts(){
        return view('addPart');
    }
}
