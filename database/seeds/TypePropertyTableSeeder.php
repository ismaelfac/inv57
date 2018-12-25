<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\ModelsProperties\PropertyType;
use App\Http\Controllers\PropertiesWasiController;

class TypePropertyTableSeeder extends Seeder
{
    public function run()
    {
        $data = PropertiesWasiController::getDataWasi('property-type/all');
        $length = sizeof($data);
        for ($i = 0; $i < $length - 2; $i++) {
            PropertyType::create([
                'name' => $data[$i]['name'],
                'id_property_type' => $data[$i]['id_property_type']
            ]);
        }
    }
}
