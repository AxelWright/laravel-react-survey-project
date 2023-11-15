<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Axel";
        $user->email = "axel.ramoss@icloud.com";
        $user->email_verified_at = now();
        $user->password = bcrypt("password123");
        $user->remember_token = Str::random(10);
        $user->save();
    }
}
