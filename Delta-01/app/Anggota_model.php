<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota_model extends Model
{
    protected $table="anggotas";
    protected $primaryKey="id";
    public $timestamps=false;
}
