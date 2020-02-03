<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\petugas_model::insert([
            [
            'nama_petugas'=>'lenien',
            'alamat'=>'petrogad',
            'telp'=>'12331',
            'username'=>'soviet',
            'password'=>'soyuz',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'nama_petugas'=>'lenin',
            'alamat'=>'petrogads',
            'telp'=>'012321',
            'username'=>'sobiet',
            'password'=>'boyuz',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'nama_petugas'=>'leninin',
            'alamat'=>'petrogadad',
            'telp'=>'0987231',
            'username'=>'sodiet',
            'password'=>'doyuz',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'nama_petugas'=>'leninnnnn',
            'alamat'=>'petrogaddddd',
            'telp'=>'001111111',
            'username'=>'soviettttt',
            'password'=>'soyuzzzz',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'nama_petugas'=>'the',
            'alamat'=>'snake',
            'telp'=>'15',
            'username'=>'long',
            'password'=>'sevenmiles',
            'created_at' => date('Y-m-d H:i:s'),
        ]
        
        ]);
    }
}
