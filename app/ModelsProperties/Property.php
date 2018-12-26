<?php
namespace App\ModelsProperties;

use Illuminate\Database\Eloquent\SoftDeletes;
use Caffeinated\Shinobi\Models\Role;
use App\Modelsgenerals \{
    Country, Departament, Location, Municipality, Neighborhood
};
use App \{
    User, Post, Gallery, Client
};
use App\ModelsProperties \{
    Feature, FeatureProperty, PropertyType, SocialStratum, CustomerRol, RentType
};
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Support\Facades\DB;

class Property extends Model
{
    use SoftDeletes;

    protected $table = 'properties';
    protected $fillable = [
        'propertywasi_id', 'id_user_wasi', 'client_id', 'for_sale', 'for_rent', 'for_transfer', 'property_type_id', 'country_id', 'departament_id', 'municipality_id', 'location_id', 'neighborhood_id', 'iso_currency', 'title', 'address', 'area', 'unit_area_label', 'built_area', 'id_unit_built_area', 'unit_built_area_label', 'maintenance_fee', 'sale_price', 'rent_price', 'bedrooms', 'bathrooms', 'garages', 'floor', 'stratum', 'social_stratum_id', 'observations',
        'video', 'property_condition_id', 'property_condition_label', 'status_on_page_id', 'latitude', 'longitude', 'building_date', 'create_wasi', 'update_wasi', 'visits', 'reference', 'comment', 'rents_type_id', 'zip_code', 'availability_id', 'publish_on_map_id',
        'gallery_id', 'features', 'user_id', 'state_page_id'
    ];
    protected $casts = [
        'for_sale' => 'boolean',
        'for_rent' => 'boolean',
        'for_transfer' => 'boolean'
    ];
    protected $dates = ['deleted_at'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function departament()
    {
        return $this->belongsTo(Departament::class);
    }
    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function neighborhood()
    {
        return $this->belongsTo(Neighborhood::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function feature_properties()
    {
        return $this->ManytoMany(FeaturesProperty::class);
    }
    public function RentType()
    {
        return $this->belongsTo(RentType::class);
    }
    public function Galleries()
    {
        return $this->hasMany(Gallery::class);
    }
    public function PropertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }
    public function SocialStratum()
    {
        return $this->belongsTo(SocialStratum::class);
    }
    public function customers()
    {
        return $this->belongsToMany(Client::class)->using(CustomerRol::class)->withPivot(['created_at', 'updated_at']);
    }
    public function features()
    {
        return $this->belongsToMany(Feature::class)->using(FeatureProperty::class)->withPivot(['int_ext', 'created_at', 'updated_at']);
    }
    public static function loadImage($url, $name_image)
    {
        $path = Storage::disk('public')->download($url)->put($name_image, $url);
        $url_result = (['file' => asset($path)]);
        $size = Storage::size($url);
        dd($url_result);
        return $url_result;
    }
    public static function getPropertiesAttribute($property = null)
    {
        //dd($property);
        $role = Role::find(4);
        try {
            if ($property) {
                $properties = Property::query()->with('PropertyType', 'country', 'departament', 'municipality', 'location', 'neighborhood', 'SocialStratum', 'galleries', 'features', 'clients')->where('id', $property)->paginate(5);
            } else {
                $properties = Property::query()->with('PropertyType', 'country', 'departament', 'municipality', 'location', 'neighborhood', 'SocialStratum')->paginate(5);
            }
            $buttons = $role->getPermissions();
            $headers = [
                array(
                    'key' => 'id',
                    'label' => 'Codigo',
                    'sortable' => true,
                    'sortDirection' => 'desc'
                ), array(
                    'key' => 'location',
                    'label' => 'Zona',
                    'sortable' => true,
                    'sortDirection' => 'desc'
                ), array(
                    'key' => 'country',
                    'label' => 'Pais',
                    'sortable' => true,
                    'sortDirection' => 'desc'
                ),
                array(
                    'key' => 'departament',
                    'label' => 'Depar',
                    'sortable' => true,
                    'sortDirection' => 'desc'
                ),
                array(
                    'key' => 'neighborhood',
                    'label' => 'Barrio',
                    'sortable' => true,
                    'sortDirection' => 'desc'
                ),
                array(
                    'key' => 'rent_price',
                    'label' => 'Cannon',
                    'sortable' => true,
                    'sortDirection' => 'desc'
                ),
                array(
                    'key' => 'sale_price',
                    'label' => 'Venta',
                    'sortable' => true,
                    'sortDirection' => 'desc'
                ),
                array(
                    'key' => 'title',
                    'label' => 'Titulo',
                    'sortable' => true,
                    'sortDirection' => 'desc'
                ),
                array(
                    'key' => 'address',
                    'label' => 'Dirección',
                    'sortable' => true,
                    'sortDirection' => 'desc'
                ),
                array(
                    'key' => 'actions',
                    'label' => 'Acciones'
                )
            ];
            return $properties;
        } catch (Exception $e) {
            Log::emergency('Error al obtener la propiedad local' . $e);
        }
    }
    public static function getPropertiesWasiAttribute($propertiesWasi)
    {
        $length_properties = sizeof($propertiesWasi);
        try {
            for ($i = 0; $i < $length_properties - 2; $i++) {
                DB::beginTransaction();
                //dd($propertiesWasi[$i]['id_property']);
                $properties = Property::create([
                    'propertywasi_id' => $propertiesWasi[$i]['id_property'],
                    'id_user_wasi' => $propertiesWasi[$i]['id_user'],
                    'for_sale' => ($propertiesWasi[$i]['for_sale'] == "false" ? false : true),
                    'for_rent' => ($propertiesWasi[$i]['for_rent'] == "false" ? false : true),
                    'for_transfer' => ($propertiesWasi[$i]['for_transfer'] == "false" ? false : true),
                    'property_type_id' => PropertyType::getPropertyTypeAttribute($propertiesWasi[$i]['id_property_type']),
                    'country_id' => 45,
                    'departament_id' => Departament::getDepartamentAttribute($propertiesWasi[$i]['region_label']),
                    'municipality_id' => Municipality::getMunicipalityAttribute($propertiesWasi[$i]['city_label']),
                    'neighborhood_id' => (isset($propertiesWasi[$i]['zone_label']) ? 1 : Neighborhood::getNeighborhoodforWasiAttribute($propertiesWasi[$i]['zone_label'])),
                    'location_id' => (isset($propertiesWasi[$i]['zone_label']) ? 1 : Location::getLocationforAttribute($propertiesWasi[$i]['zone_label'])),
                    'id_currency' => $propertiesWasi[$i]['id_currency'],
                    'iso_currency' => $propertiesWasi[$i]['iso_currency'],
                    'title' => $propertiesWasi[$i]['title'],
                    'address' => $propertiesWasi[$i]['address'],
                    'area' => $propertiesWasi[$i]['area'],
                    'id_unit_area' => $propertiesWasi[$i]['id_unit_area'],
                    'unit_area_label' => $propertiesWasi[$i]['unit_area_label'],
                    'built_area' => $propertiesWasi[$i]['built_area'],
                    'maintenance_fee' => $propertiesWasi[$i]['maintenance_fee'],
                    'sale_price' => $propertiesWasi[$i]['sale_price'],
                    'rent_price' => $propertiesWasi[$i]['rent_price'],
                    'bedrooms' => $propertiesWasi[$i]['bedrooms'],
                    'bathrooms' => $propertiesWasi[$i]['bathrooms'],
                    'garages' => $propertiesWasi[$i]['garages'],
                    'floor' => $propertiesWasi[$i]['floor'],
                    'social_stratum_id' => ($propertiesWasi[$i]['stratum'] ? : 9),
                    'observations' => $propertiesWasi[$i]['observations'],
                    'video' => $propertiesWasi[$i]['video'],
                    'property_condition_id' => $propertiesWasi[$i]['id_property_condition'],
                    'status_on_page_id' => $propertiesWasi[$i]['id_status_on_page'],
                    'latitude' => $propertiesWasi[$i]['latitude'],
                    'longitude' => $propertiesWasi[$i]['longitude'],
                    'building_date' => $propertiesWasi[$i]['building_date'],
                    'visits' => $propertiesWasi[$i]['visits'],
                    'create_wasi' => $propertiesWasi[$i]['created_at'],
                    'update_wasi' => (($propertiesWasi[$i]['updated_at'] === "0000-00-00 00:00:00" || $propertiesWasi[$i]['updated_at'] === null) ? null : $propertiesWasi[$i]['updated_at']),
                    'reference' => $propertiesWasi[$i]['reference'],
                    'comment' => $propertiesWasi[$i]['comment'],
                    'rents_type_id' => $propertiesWasi[$i]['id_rents_type'],
                    'zip_code' => $propertiesWasi[$i]['zip_code'],
                    'availability_id' => $propertiesWasi[$i]['id_availability'],
                    'publish_on_map_id' => $propertiesWasi[$i]['id_publish_on_map']
                ]);
				//paso 2: obtengo las galerias
                $property_id = Property::select('id')->where('propertywasi_id', $propertiesWasi[$i]['id_property'])->get();
                $property_id = json_encode($property_id[0]['id']);
                $length_galleries = sizeof($propertiesWasi[$i]['galleries'][0]);
                for ($j = 0; $j < $length_galleries - 1; $j++) {
                    error_reporting(0);
                    $gallery_id = $propertiesWasi[$i]['galleries'][0]['id'];
                    $galleries = Gallery::create([
                        'gallery_wasi_id' => $gallery_id,
                        'id_image' => $propertiesWasi[$i]['galleries'][0][$j]['id'],
                        'url' => $propertiesWasi[$i]['galleries'][0][$j]['url'],
                        'description' => $propertiesWasi[$i]['galleries'][0][$j]['description'],
                        'position' => $propertiesWasi[$i]['galleries'][0][$j]['position'],
                        'property_id' => $property_id
                    ]);
                }
				//paso 3: obtengo las caracteristicas
                $length_feature_int = sizeof($propertiesWasi[$i]['features']['internal']);
                $length_feature_ext = sizeof($propertiesWasi[$i]['features']['external']);
                for ($f = 0; $f < $length_feature_int; $f++) {
                    error_reporting(0);
                    $properties->features()->attach($propertiesWasi[$i]['features']['internal'][$f]['id'], ['int_ext' => '1', 'property_id' => $property_id]);
                }
                for ($e = 0; $e < $length_feature_ext; $e++) {
                    error_reporting(0);
                    $properties->features()->attach($propertiesWasi[$i]['features']['external'][$e]['id'], ['int_ext' => '0', 'property_id' => $property_id]);
                }
                DB::commit();
            }
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency('Error al sincronizar la propiedad con wasi');
        }
    }

    public static function getGalleriesAttribue($galleries)
    {
        dd($galleries);
    }
    public static function getFeaturesAttribue($features)
    {
        dd($features);
    }
}
