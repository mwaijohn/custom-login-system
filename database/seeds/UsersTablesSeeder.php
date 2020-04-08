<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Alice Kruger",
            "email" => "alicekruger@gmail.com",
            "password" => Hash::make('password'),
            "remember_token" => "1010101010"
        ]);
    }
}
