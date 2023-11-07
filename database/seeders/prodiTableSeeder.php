<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prodiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodi')->insert(array(
            ['kode' => '433001',
            'prodi' => 'D4 PERANCANGAN MANUFAKTUR',
            'jurusan' => 'Teknik Mesin'],
            ['kode' => '433002',
            'prodi' => 'D4 REKAYASA PERANGKAT LUNAK',
            'jurusan' => 'Teknik Informatika'],
            ['kode' => '433007',
            'prodi' => 'D4 SISTEM INFORMASI KOTA CERDAS',
            'jurusan' => 'Teknik Informatika'],
            ['kode' => '433008',
            'prodi' => 'D4 TEKNOLOGI REKAYASA INSTRUMENTASI DAN KONTROL',
            'jurusan' => 'Teknik Pendingin dan Tata Udara'],
            ['kode' => '433003',
            'prodi' => 'D3 KEPERAWATAN',
            'jurusan' => 'Teknik Informatika'],
            ['kode' => '433004',
            'prodi' => 'D3 TEKNIK MESIN',
            'jurusan' => 'Teknik Mesin'],
            ['kode' => '433005',
            'prodi' => 'D3 TEKNIK INFORMATIKA',
            'jurusan' => 'Teknik Informatika'],
            ['kode' => '433006',
            'prodi' => 'D3 PENDINGIN DAN TATA UDARA',
            'jurusan' => 'Teknik Pendingin dan Tata Udara']
        ));
    }
}
