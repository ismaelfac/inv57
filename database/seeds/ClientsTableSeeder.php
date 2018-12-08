<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsTableSeeder extends Seeder
{
    public function run()
    {
        $data = file_get_contents("database/Queries/clients.json");
        $clients = json_decode($data, true);
        //dd($clients);
        foreach ($clients as $value) {
            Client::create([
                'id' => $value['id'],
                'first_name' => $value['first_name'],
                'last_name' => $value['last_name'],
                'slug' => $value['slug'],
                'type_dni' => $value['type_dni'],
                'phone' => $value['phone'],
                'landline' => $value['landline'],
                'email' => $value['email'],
                'address' => $value['address'],
                'country_id' => $value['country_id'],
                'departament_id' => $value['departament_id'],
                'municipality_id' => $value['municipality_id'],
                'location_id' => $value['location_id'],
                'neighborhood_id' => $value['neighborhood_id'],
                'latitude' => $value['latitude'],
                'longitude' => $value['longitude'],
                'birthdate' => $value['birthdate'],
                'active' => $value['active']
            ]);
        }
    }
}
