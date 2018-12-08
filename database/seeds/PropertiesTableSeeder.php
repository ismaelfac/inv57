<?php
use App\Http\Controllers\PropertiesController;
use App\Modelsgenerals\{ Civilstatus, Country, Departament, Identification, Location, Municipality, Neighborhood };
use App\{ Property, PropertiesType };
use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{
    public function run()
    {
        $propertiesTercero = PropertiesController::getLatestProperties(30)
        ['properties'];
        //dd($propertiesTercero[0]);
        //$propertiesTercero = json_encode($propertiesTercero);
        foreach ($propertiesTercero as $property_tercero) {
            $properties = Property::create([
                    'id' => $property_tercero['id_property'],  
                    'id_user_wasi' => $property_tercero['id_user'],
                    'client_id' => 1,
                    'for_sale' => ($property_tercero['for_sale'] == "false" ? false : true),
                    'for_rent' => ($property_tercero['for_rent'] == "false" ? false : true),
                    'for_transfer' => ($property_tercero['for_transfer'] == "false" ? false : true),
                    'property_type_id' => $property_tercero['id_property_type'],
                    'country_id' => 45,
                    'departament_id' => Departament::getDepartamentWasiAttribute($property_tercero['region_label']),
                    'municipality_id' => Municipality::getMunicipalityWasiAttribute($property_tercero['city_label']),
                    'location_id' => Location::getLocationforWasiAttribute($property_tercero['city_label']),
                    'neighborhood_id' => '1',
                    'id_currency' => $property_tercero['id_currency'],
                    'iso_currency' => $property_tercero['iso_currency'],
                    'title' => $property_tercero['title'],
                    'address' => $property_tercero['address'],
                    'area' => $property_tercero['area'],
                    'id_unit_area' => $property_tercero['id_unit_area'],
                    'unit_area_label' => $property_tercero['unit_area_label'],
                    'built_area' => $property_tercero['built_area'],
                    'maintenance_fee' => $property_tercero['maintenance_fee'],
                    'sale_price' => $property_tercero['sale_price'],
                    'rent_price' => $property_tercero['rent_price'],
                    'bedrooms' => $property_tercero['bedrooms'],
                    'bathrooms' => $property_tercero['bathrooms'],
                    'garages' => $property_tercero['garages'],
                    'floor' => $property_tercero['floor'],
                    'social_stratum_id' => $property_tercero['stratum'],
                    'observations' => $property_tercero['observations'],
                    'video' => $property_tercero['video'],
                    'property_condition_id' => $property_tercero['id_property_condition'],
                    'status_on_page_id' => $property_tercero['id_status_on_page'],
                    'latitude' => $property_tercero['latitude'],
                    'longitude' => $property_tercero['longitude'],
                    'building_date' => $property_tercero['building_date'],
                    'visits' => $property_tercero['visits'],
                    'create_wasi' => $property_tercero['created_at'],
                    'update_wasi' => $property_tercero['updated_at'],
                    'reference' => $property_tercero['reference'],
                    'comment' => $property_tercero['comment'],
                    'rents_type_id' => $property_tercero['id_rents_type'],
                    'zip_code' => $property_tercero['zip_code'],
                    'availability_id' => $property_tercero['id_availability'],
                    'publish_on_map_id' => $property_tercero['id_publish_on_map'],
                    'main_image' => Property::getMainImageAttribue($property_tercero['main_image']),
                    'galleries' => Property::getGalleriesAttribue($property_tercero['galleries']),
                    'features' => Property::getFeaturesAttribue($property_tercero['features'])
                ]);
            }        
            dd($properties);
    }
}
