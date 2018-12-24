<?php

use App\ModelsProperties\PropertyCondition;
use Illuminate\Database\Seeder;

class propertyConditionsTableSeeder extends Seeder
{
    public function run()
    {
        $data = file_get_contents("database/Queries/property_conditions.json");
        $PropertyCondition = json_decode($data, true);
        foreach ($PropertyCondition as $value) {
            PropertyCondition::create([
                'it_represents' => $value['it_represents'],
                'label' => $value['label']
            ]);
        }
    }
}
