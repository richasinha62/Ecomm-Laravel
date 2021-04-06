<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            'first_name' => 'Prachi',
            'last_name' => 'Sinha',
            'email' => 'prachisinha@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'user'
        ]);
    }
}
