<?php

use Illuminate\Database\Seeder;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Buku_model::insert([
            [
            'judul'=>'roadside_picnic',
            'penerbit'=>'soviet',
            'pengarang'=>'boris',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'judul'=>'solaris',
            'penerbit'=>'soviet',
            'pengarang'=>'stainslaw',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'judul'=>'hind',
            'penerbit'=>'soviet',
            'pengarang'=>'yuri',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'judul'=>'hind_d',
            'penerbit'=>'solid',
            'pengarang'=>'liquid',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'judul'=>'spetsnaz',
            'penerbit'=>'soviet',
            'pengarang'=>'russia',
            'created_at' => date('Y-m-d H:i:s'),
        ]
        
        ]);
    }
}
