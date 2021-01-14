<?php

namespace Database\Seeders;

use Carbon\Traits\Date;
use Illuminate\Database\Seeder;
use Illuminate\Support\DateFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 25; $i++) {
            DB::table('conferences')->insert([
                'name' => Str::random(10),
                'descricao' => Str::random(20),
                'local' => Str::random(10),
                'lotacao' => '10',
                'inscritos' => '5',
                'data' => '2021-03-01',
            ]);
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'password' => Hash::make('password'),
            ]);
        }
    }
}
