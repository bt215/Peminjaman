<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anggota_model::insert([
            [
            'nama_anggota'=>'unga',
            'alamat'=>'russia',
            'telp'=>'12345',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'nama_anggot'=>'heh',
            'alamat'=>'german',
            'telp'=>'78910',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'nama_anggot'=>'leh',
            'alamat'=>'germs',
            'telp'=>'78912',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'nama_anggot'=>'poshol',
            'alamat'=>'soviet',
            'telp'=>'78911',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'nama_anggot'=>'abraco',
            'alamat'=>'ind',
            'telp'=>'78910',
            'created_at' => date('Y-m-d H:i:s'),
        ]
        
        ]);
    }
}
