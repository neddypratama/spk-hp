<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'id' => 1,
            'name' => 'user',
            'nim' => '21212121',
            'nohp' => '085857254736',
            'jabatan' => 'Mahasiswa',
            'email' => 'user@gmail.com',
            'password' => 12345,
            'foto' => '',
            'role' => 1,
        ]);
    }
}
