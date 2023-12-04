<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Siswaseeder extends Seeder
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
        'nama'=>'Ani',
        'nomor_induk'=>'1000',
        'alamat'=>'Uni Emirate Arab',
        'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
        'nama'=>'Asep Bakso',
        'nomor_induk'=>'1100',
        'alamat'=>'Croatia',
        'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
        'nama'=>'Yudi Minyak',
        'nomor_induk'=>'1200',
        'alamat'=>'Swedia',
        'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
