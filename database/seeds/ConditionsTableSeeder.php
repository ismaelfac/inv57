<?php

use Illuminate\Database\Seeder;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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
