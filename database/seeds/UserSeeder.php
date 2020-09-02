<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;
use App\Plan;

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


        $plan = Plan::Create([
                'name' => 'BASIC',
                'price' => 500.00,
                'weekly_payout' => 50.00
        ]);
        $plan2 = Plan::Create([
            'name' => 'BRONZE',
            'price' => 1000.00,
            'weekly_payout' => 150.00
            ]);
        $plan4 = Plan::Create([
                'name' => 'SILVER',
                'price' => 5000.00,
                'weekly_payout' => 1000.00
        ]);
        $plan1 = Plan::Create([
            'name' => 'GOLD',
            'price' => 10000.00,
            'weekly_payout' => 2500.00
        ]);
        $plan3 = Plan::Create([
            'name' => 'PLATNUIM',
            'price' => 30000.00,
            'weekly_payout' => 6000.00
        ]);
    }
}
