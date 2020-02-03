<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detail_model;

class detail_controller extends Controller
{
    public function index(){
        $buku=detail_model::all();

        $data=['buku'=>$buku];
        return $data;

        if(Auth::user()->level=="admin"){
            $dt_buku=buku_Model::get();
        }else{
            return response()->json(['status'=>'no admin']);
        }
    }

    public function create(Request $request){
        $buku= new detail_model();
        $buku->id_pinjam=$request->id_pinjam;
        $buku->id_buku=$request->id_buku;
        $buku->qty=$request->qty;
        $buku->save();

        return "data tersimpan";
    }

    public function update(Request $request, $id){
        $buku=detail_model::find($id);
        $buku->id_pinjam=$request->id_pinjam;
        $buku->id_buku=$request->id_buku;
        $buku->qty=$request->qty;
        $buku->save();

        return "data terupdate";
    }

    public function delete($id){
        $buku=detail_model::find($id);
        $buku->delete();
        return "data terhapus";
    }

    public function detail($id){
        $buku=detail_model::find($id);
        
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
