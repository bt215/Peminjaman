<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman_model extends Model
{
    protected $table='peminjamans';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable=[
        'tgl','id_anggota','id_petugas','deadline','denda'
    ];
}
