<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Store::create([
            'store_id'   => '0',
            'user_id' => '9',
            'name' => 'Bunda Shop',
            'email' => 'store1@gmail.com',
            'phone_number' => '08123456789',
            'address' => 'Jl. Kebon Jeruk No. 1',
            'image' => 'https://i.ibb.co/nzGDjkh/Logo.png',
            'created_at' => now(),
        ]);
    }
}
