<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guru = Guru::all();
        $siswa = Siswa::all();

        DB::table('users')->insert([
            'name' => 'Aulia',
            'email' => 'adminaulia@gmail.com',
            'password' => Hash::make('aulia123'),
            'roles' => 'admin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Dita',
            'email' => 'admindita@gmail.com',
            'password' => Hash::make('dita123'),
            'roles' => 'admin',
        ]);
    }
}
