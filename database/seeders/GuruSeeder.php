<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert([
            'nama' => 'Vexana',
            'nip' => '1234567890',
            'mapel_id' => 1,
            'no_telp' => '081234567890',
            'alamat' => 'pancabudi',
        ]);

        DB::table('gurus')->insert([
            'nama' => 'Lylia',
            'nip' => '0987654321',
            'mapel_id' => 2,
            'no_telp' => '089876543210',
            'alamat' => 'marelan',
        ]);
    }
}
