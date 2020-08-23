<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user1 = User::create([
            'name' => 'Micky',
            'email' => 'micky@gmail.com',
            'password' => Hash::make('password')
        ]);
        $user1->assignRole('Admin');

        $user3 = User::create([
            'name' => 'Iso Solomon',
            'email' => 'iso@gmail.com',
            'password' => Hash::make('password')
        ]);
        $user3->assignRole('User');
    }
}
