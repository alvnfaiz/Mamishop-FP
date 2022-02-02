<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'user_id'   => '1',
            'username' => 'Admin Alvin',
            'email' => 'alvin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'user_id'   => '2',
            'username' => 'Raven',
            'email' => 'raven@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'user_id'   => '3',
            'username' => 'Tiara',
            'email' => 'tiara@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'user_id'   => '4',
            'username' => 'Ihsan',
            'email' => 'ihsan@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'user_id'   => '5',
            'username' => 'Ezik',
            'email' => 'ezik@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'user_id'   => '6',
            'username' => 'azim',
            'email' => 'azim@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);


        //
        User::create([
            'user_id'   => '16',
            'username' => 'Member 1',
            'email' => 'member1@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'user_id'   => '7',
            'username' => 'Member 2',
            'email' => 'member2@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'phone_number' => '08123456790',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'user_id'   => '8',
            'username' => 'Member 3',
            'email' => 'member3@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'phone_number' => '08123456791',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'user_id'   => '9',
            'username' => 'Member 4',
            'email' => 'member4@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'user_id'   => '10',
            'username' => 'Member 5',
            'email' => 'member5@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'user_id'   => '11',
            'username' => 'Member 6',
            'email' => 'member6@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'user_id'   => '12',
            'username' => 'Member 7',
            'email' => 'member7@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'user_id'   => '13',
            'username' => 'Member 8',
            'email' => 'member8@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'phone_number' => '08123456789',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'user_id'   => '14',
            'username' => 'Member 9',
            'email' => 'member9@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'phone_number' => '08123456792',
            'birth_date' => '1999-01-01',
        ]);
        User::create([
            'user_id'   => '15',
            'username' => 'Member 10',
            'email' => 'member10@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'phone_number' => '08123456792',
            'birth_date' => '1999-01-01',
        ]);
    }
}
