<?php

use Illuminate\Database\Seeder;
use App\ModelsProperties\Feature;
use App\Http\Controllers \{
    PropertiesWasiController
};

class FeatureTableSeeder extends Seeder
{
    public function run()
    {
        $features = PropertiesWasiController::getDataWasi('feature/all');
        foreach ($features['internal'] as $value) {
            Feature::create([
                'id_wasi' => $value['id'],
                'name' => $value['nombre'],
                'int_ext' => 1
            ]);
        }
        foreach ($features['external'] as $value) {
            Feature::create([
                'id_wasi' => $value['id'],
                'name' => $value['nombre'],
                'int_ext' => 0
            ]);
        }
    }
}
