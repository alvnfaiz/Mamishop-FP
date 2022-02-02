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
            'category_id'   => '1',
            'name' => 'Lainnya',
            'slug' => 'lainnya',
        ]);
        Categories::create([
            'category_id'   => '2',
            'name' => 'Makanan Ringan',
            'slug' => 'makanan-ringan',
        ]);
        Categories::create([
            'category_id'   => '3',
            'name' => 'Makanan Berat',
            'slug' => 'makanan-berat',
        ]);
        Categories::create([
            'category_id'   => '4',
            'name' => 'Minuman',
            'slug' => 'minuman',
        ]);
        Categories::create([
            'category_id'   => '5',
            'name' => 'Pakaian',
            'slug' => 'pakaian',
        ]);
    }
}
