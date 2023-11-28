<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'role_name' => 'admin',
        ]);
        DB::table('roles')->insert([
            'role_name' => 'doctor',
        ]);
        DB::table('roles')->insert([
            'role_name' => 'patient',
        ]);
    }
}
