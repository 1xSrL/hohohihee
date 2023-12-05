<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('siswa')->insert([
            'nama' => 'agus kapur',
            'nomor_induk' => '1000',
            'alamat' => 'gunungsari',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Tono bangunan',
            'nomor_induk' => '1021',
            'alamat' => 'mbeji',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama' => 'joni ojek',
            'nomor_induk' => '1043',
            'alamat' => 'tlekung',
            'created_at' => date('Y-m-d H:i:s')
         ]);
    }
}
