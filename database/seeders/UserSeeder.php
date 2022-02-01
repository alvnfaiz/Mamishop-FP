<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'username' => 'Member 1',
            'email' => 'member1@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'member',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'username' => 'Member 2',
            'email' => 'member2@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'member',
            'phone_number' => '08123456790',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'username' => 'Member 3',
            'email' => 'member3@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'member',
            'phone_number' => '08123456791',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'username' => 'Member 4',
            'email' => 'member4@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'member',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'username' => 'Member 5',
            'email' => 'member5@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'member',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'username' => 'Member 6',
            'email' => 'member6@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'member',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'username' => 'Member 7',
            'email' => 'member7@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'member',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'username' => 'Member 8',
            'email' => 'member8@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'member',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'username' => 'Member 9',
            'email' => 'member9@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'member',
            'phone_number' => '08123456792',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'username' => 'Member 10',
            'email' => 'member10@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'member',
            'phone_number' => '08123456792',
            'birth_date' => '1999-01-01',
        ]);
    }
}
