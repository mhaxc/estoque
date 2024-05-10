<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\category;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cozinha = Category::updateOrCreate([
            'name' => 'Cozinha',
        ]);

        Category::updateOrCreate([
            'name' => 'Panela',
            'category_id' => $cozinha->id
        ]);

        $pets = Category::updateOrCreate([
            'name' => 'Pets',
        ]);

        Category::updateOrCreate([
            'name' => 'Ração',
            'category_id' => $pets->id
        ]);
    }
}
