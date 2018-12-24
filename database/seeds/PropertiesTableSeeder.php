<?php
use App\Http\Controllers\PropertiesWasiController;
use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{
    public function run()
    {
        $properties = PropertiesWasiController::getDataWasi('property/clients/', '691358');
    }
}
