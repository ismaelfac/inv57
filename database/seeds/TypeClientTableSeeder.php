<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\PropertiesWasiController;
use App\TypeClient;

class TypeClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = PropertiesWasiController::getDataWasi('client-type/all');
        $lengthClientType = sizeof($data);
        for ($i = 0; $i <= $lengthClientType - 2; $i++) {
            error_reporting(0);
            TypeClient::firstOrCreate(['id_client_type' => $data[$i]['id_client_type'], 'name' => $data[$i]['name']]);
        }
    }
}
