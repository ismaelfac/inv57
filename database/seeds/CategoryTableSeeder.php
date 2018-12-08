<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        Category::Create([
            'name' => 'Casa',
            'slug' => 'Casa',
        ]);

        Category::Create([
            'name' => 'Apartamento',
            'slug' => 'apartamento',
        ]);

        Category::Create([
            'name' => 'Local Comercial',
            'slug' => 'local-comercial',
        ]);

        Category::Create([
            'name' => 'Lote / Terreno',
            'slug' => 'lote-terreno',
        ]);

        Category::Create([
            'name' => 'Lote Comercial',
            'slug' => 'lote-comercial',
        ]);

        Category::Create([
            'name' => 'Finca',
            'slug' => 'finca',
        ]);

        Category::Create([
            'name' => 'Bodega',
            'slug' => 'bodega',
        ]);

        Category::Create([
            'name' => 'Chalet',
            'slug' => 'chalet',
        ]);
    }
}
