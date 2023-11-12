<?php

namespace Database\Seeders;

// use DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class mhsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mhs')->insert(array(
            ['nim' => '2203006',
            'nama' => 'apriliady sukma',
            'prodi' => 'D3 Teknik Informatika',
            'angkatan' => '2022'],
            ['nim' => '2203001',
            'nama' => 'aditya rahman',
            'prodi' => 'D3 Teknik Informatika',
            'angkatan' => '2022']
        ));
    }
}
