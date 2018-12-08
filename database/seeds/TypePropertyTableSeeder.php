<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
Use App\TypeProperty;

class TypePropertyTableSeeder extends Seeder
{
    public function run()
    {
        $data = file_get_contents("database/Queries/type_properties.json");
        $type_property = json_decode($data, true);
        foreach ($type_property as $value) {
            TypeProperty::create([
                'name' => $value['name'],
                'slug' => Str::slug($value['name'])
            ]);
        }
    }
}
