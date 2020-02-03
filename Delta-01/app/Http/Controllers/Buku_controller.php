<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Buku_model;

class Buku_controller extends Controller
{
    public function index(){
        $buku=buku_model::all();

        $data=['buku'=>$buku];
        return $data;

        if(Auth::user()->level=="admin"){
            $dt_buku=buku_Model::get();
        }else{
            return response()->json(['status'=>'no admin']);
        }
    }

    public function create(Request $request){
        $buku= new buku_model();
        $buku->judul=$request->judul;
        $buku->penerbit=$request->penerbit;
        $buku->pengarang=$request->pengarang;
        $buku->save();

        return "data tersimpan";
    }

    public function update(Request $request, $id){
        $buku=buku_model::find($id);
        $buku->judul=$request->judul;
        $buku->penerbit=$request->penerbit;
        $buku->pengarang=$request->pengarang;
        $buku->save();

        return "data terupdate";
    }

    public function delete($id){
        $buku=buku_model::find($id);
        $buku->delete();
        return "data terhapus";
    }

    public function detail($id){
        $buku=buku_model::find($id);
        
        return $buku;
    }

    public function book() {
        $data = "Data All Book";
        return response()->json($data, 200);
    }

    public function bookAuth() {
        $data = "Welcome " . Auth::user()->name;
        return response()->json($data, 200);
    }


}