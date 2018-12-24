<?php

use App\ModelsProperties\PropertyAvailability;
use Illuminate\Database\Seeder;

class propertyAvailabilitiesTableSeeder extends Seeder
{
    public function run()
    {
        $data = file_get_contents("database/Queries/property_availabilities.json");
        $PropertyAvailability = json_decode($data, true);
        //dd($PropertyAvailability);
        foreach ($PropertyAvailability as $value) {
            PropertyAvailability::create([
                'it_represents' => $value['it_represents'],
                'label' => $value['label']
            ]);
        }
    }
}
