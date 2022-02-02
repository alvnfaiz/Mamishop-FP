<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Categories::create([
            'id'   => '1',
            'name' => 'Lainnya',
            'slug' => 'lainnya',
        ]);
        Categories::create([
            'id'   => '2',
            'name' => 'Makanan Ringan',
            'slug' => 'makanan-ringan',
        ]);
        Categories::create([
            'id'   => '3',
            'name' => 'Makanan Berat',
            'slug' => 'makanan-berat',
        ]);
        Categories::create([
            'id'   => '4',
            'name' => 'Minuman',
            'slug' => 'minuman',
        ]);
        Categories::create([
            'id'   => '5',
            'name' => 'Pakaian',
            'slug' => 'pakaian',
        ]);
    }
}
