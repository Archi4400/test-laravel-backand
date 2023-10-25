<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'      => 'Автор не известен',
                'email'     => 'author_unknown@g.g',
                'password'  => Hash::make(Str::random(16)),
            ],
            [
                'name'      => 'Автор',
                'email'     => 'author1@g.g',
                'password'  => Hash::make('password'),
            ],
        ];

        DB::table('users')->insert($data);
    }
}
