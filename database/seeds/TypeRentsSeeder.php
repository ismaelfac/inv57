<?php

use Illuminate\Database\Seeder;
use App\ModelsProperties\RentType;

class TypeRentsSeeder extends Seeder
{

    public function run()
    {
        $data = file_get_contents("database/Queries/type_rents.json");
        $RentType = json_decode($data, true);
        foreach ($RentType as $value) {
            RentType::create([
                'represents' => $value['represents'],
                'label' => $value['label']
            ]);
        }
    }
}
