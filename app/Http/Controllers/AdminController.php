<?php

namespace App\Http\Controllers;

use App\Exports\AdminExport;
use App\Imports\AdminImport;
use Maatwebsite\Excel\Facades\Excel;

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

    public function updateParts(Request $request, $id){
        $part = Part::find($id);

        $this->validate($request, [
            'partnumber' => 'required',
            'name' => 'required',
            'UM' => 'required'
        ]);

        $part->partnumber = $request->partnumber;
        $part->name = $request->name;
        $part->UM = $request->UM;

        $part->save();

        return redirect()->route('crud')->with('status', 'Berhasil Tambah Data');
    }

    public function deleteParts($id){

        $part = DB::table('admin')->where('id',$id)->delete();
        // $part->delete();
        return redirect()->route('crud',['parts' => $part]);
    }


    public function searchParts(Request $request){
        // $search_partnumber = $_GET['query'];
        $query = $request->get('query');
        $part = DB::table('admin')->where('partnumber', 'LIKE', "%".$query."%")->get();
        
        return view('search', ['parts' => $part]);
    }



    public function addParts(){
        return view('addPart');
    }

    public function addData(Request $request){
        $this->validate($request, [
            'partnumber' => 'required',
            'name' => 'required',
            'UM' => 'required'
        ]);

        $part = new Part();
        $part->partnumber = $request->partnumber;
        $part->name = $request->name;
        $part->UM = $request->UM;

        $part->save();

        return redirect()->route('crud')->with('status', 'Berhasil Tambah Data');

    }


    public function adminExport(){
        return Excel::download(new AdminExport, 'admin.xlsx');
    }

    public function importExcel(Request $request){

        $ExcelImport = new AdminImport;
        
        // dd($ExcelImport);

        Excel::import($ExcelImport, $request->file('file'));
        

        return redirect('/crud');

    }
}
