<?php

use App\StatePage;
use Illuminate\Database\Seeder;
class statePagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents("database/Queries/state_pages.json");
        $StatePage = json_decode($data, true);
        foreach ($StatePage as $value) {
            StatePage::create([
                'it_represents' => $value['it_represents'],
                'label' => $value['label']
            ]);
        }
    }
}
