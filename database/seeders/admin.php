<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
               'name' => 'admin',
               'email' => 'admin@gmail.com',
               'email_verified_at' => now(),
               'password' => '$2y$10$RrpKOh0UryAuSflUJB2rTOu9LyWsRyu12Q12vDX6DUy.cWBtIMdJu', //12345678
               'remember_token' => Str::random(10),
               'isAdmin' => 1,
            ]);
    }
}
