<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_model extends Model
{
    protected $table="detail_peminjamans";
    protected $primaryKey="id";
    public $timestamps=false;
}
