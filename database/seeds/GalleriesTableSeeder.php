<?php

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $length = sizeof($property_tercero['galleries'][0]);
        for ($i = 0; $i < $length - 1; $i++) {
            error_reporting(0);
            $gallery_id = $property_tercero['galleries'][0]['id'];
            $galleries = Gallery::create([
                'gallery_wasi_id' => $property_tercero['galleries'][0]['id'],
                'id_image' => $property_tercero['galleries'][0][$i]['id'],
                'url' => $property_tercero['galleries'][0][$i]['url'],
                'description' => $property_tercero['galleries'][0][$i]['description'],
                'position' => $property_tercero['galleries'][0][$i]['position'],
                'property_id' => $properties->id
            ]);
        }
    }
}
