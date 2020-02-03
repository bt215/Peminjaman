<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota_model;

class Anggota_controller extends Controller
{
    public function index(){
        $buku=Anggota_model::all();

        $data=['buku'=>$buku];
        return $data;

        if(Auth::user()->level=="admin"){
            $dt_buku=Anggota_Model::get();
        }else{
            return response()->json(['status'=>'no admin']);
        }
    }

    public function create(Request $request){
        $buku= new Anggota_model();
        $buku->nama_anggota=$request->nama_anggota;
        $buku->alamat=$request->alamat;
        $buku->telp=$request->telp;
        $buku->save();

        return "data tersimpan";
    }

    public function update(Request $request, $id){
        $buku=Anggota_model::find($id);
        $buku->nama_anggota=$request->nama_anggota;
        $buku->alamat=$request->alamat;
        $buku->telp=$request->telp;
        $buku->save();

        return "data terupdate";
    }

    public function delete($id){
        $buku=Anggota_model::find($id);
        $buku->delete();
        return "data terhapus";
    }

    public function detail($id){
        $buku=Anggota_model::find($id);
        
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
