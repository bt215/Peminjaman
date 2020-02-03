<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman_model;
use App\Buku_model;

class Peminjaman_controller extends Controller
{
    public function index(){

        $siswa=Peminjaman_model::all();
        $arr_siswa=array();
        foreach ($siswa as $nasmu) {
           $arr_prestasi=array();
           $sis=Buku_model::where('id',$nasmu->id)->get();
            foreach ($sis as $sis) {
            $arr_prestasi[]=array(    
                'id_Buku'=>$sis->id,
                'judul'=>$sis->judul
                );
            }
            $arr_siswa[]=array(
                'id_anggota'=>$nasmu->id_anggota,
                'id_petugas'=>$nasmu->id_petugas,
                'tgl'=>$nasmu->tgl,
                'denda'=>$nasmu->denda,
                'detail'=>$arr_prestasi
            );
        }
       
        return Response()->json($arr_siswa);
    }

  
    public function create(Request $request){
        $siswa=new Peminjaman_model();
        $siswa->tgl=$request->tgl;
        $siswa->id_anggota=$request->id_anggota;
        $siswa->id_petugas=$request->id_petugas;
        $siswa->deadline=$request->deadline;
        $siswa->denda=$request->denda;
        $siswa->save();

        return "data tersimpan";
    }

    public function update(Request $request, $id){
        $siswa=Peminjaman_model::find($id);
        $siswa->tgl=$request->tgl;
        $siswa->id_anggota=$request->id_anggota;
        $siswa->id_petugas=$request->id_petugas;
        $siswa->deadline=$request->deadline;
        $siswa->denda=$request->denda;
        $siswa->save();


        return "data terupdate";
    }

    public function delete($id){
        $siswa=Peminjaman_model::find($id);
        $siswa->delete();

        return "data terhapus";
    }

    public function detail($id){
        $siswa=Peminjaman_model::find($id);

        return $siswa;
    }
}
