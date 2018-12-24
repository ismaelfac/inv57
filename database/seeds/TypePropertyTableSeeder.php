<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\ModelsProperties\PropertyType;

class TypePropertyTableSeeder extends Seeder
{
    public function run()
    {
        $data = file_get_contents("database/Queries/type_properties.json");
        $type_property = json_decode($data, true);
        
        //dd($type_property);
        foreach ($type_property as $value) {
            PropertyType::create([
                'name' => $value['name'],
                'slug' => Str::slug($value['name'])
            ]);
        }
    }
}
