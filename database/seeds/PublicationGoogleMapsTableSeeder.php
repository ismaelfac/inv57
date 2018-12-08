<?php
use App\PublicationGoogleMaps;
use Illuminate\Database\Seeder;

class PublicationGoogleMapsTableSeeder extends Seeder
{
    public function run()
    {
        $data = file_get_contents("database/Queries/publicationGoogleMaps.json");
        $publicationGoogle = json_decode($data, true);
        //dd($publicationGoogle);
        foreach ($publicationGoogle as $value) {
            PublicationGoogleMaps::create([
                'it_represents' => $value['it_represents'],
                'label' => $value['label']
            ]);
        }
    }
}
