<?php

use App\ModelsProperties\SocialStratum;
use Illuminate\Database\Seeder;

class SocialStratumTableSeeder extends Seeder
{
    public function run()
    {
        $data = file_get_contents("database/Queries/social_stratum.json");
        $SocialStratum = json_decode($data, true);
        //dd($SocialStratum);
        foreach ($SocialStratum as $value) {
            SocialStratum::create([
                'it_represents' => $value['it_represents'],
                'label' => $value['label']
            ]);
        }
    }
}
