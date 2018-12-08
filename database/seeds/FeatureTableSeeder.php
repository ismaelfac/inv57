<?php

use Illuminate\Database\Seeder;
use App\Feature;
class FeatureTableSeeder extends Seeder
{
    public function run()
    {
        $data = file_get_contents("database/Queries/features.json");
        $features = json_decode($data, true);
        foreach ($features as $value) {
            Feature::create([
                'name' => $value['name'],
                'int_ext' => $value['int_ext']
            ]);
        }
    }
}
