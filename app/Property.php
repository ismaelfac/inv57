<?php
namespace App;

use Caffeinated\Shinobi\Models\Role;
use App\Modelsgenerals \{
    Country, Departament, Location, Municipality, Neighborhood
};
use App \{
    User, Post, RentType, Feature, Gallery, PropertyType
};
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;
use Caffeinated\Shinobi\Models\Permission;

class Property extends Model
{
    protected $table = 'properties';
    protected $fillable = [
        'id', 'id_user_wasi', 'client_id', 'for_sale', 'for_rent', 'for_transfer', 'property_type_id', 'country_id', 'departament_id', 'municipality_id', 'location_id', 'neighborhood_id', 'iso_currency', 'title', 'address', 'area', 'unit_area_label', 'built_area', 'id_unit_built_area', 'unit_built_area_label', 'maintenance_fee', 'sale_price', 'rent_price', 'bedrooms', 'bathrooms', 'garages', 'floor', 'stratum', 'social_stratum_id', 'observations',
        'video', 'property_condition_id', 'property_condition_label', 'status_on_page_id', 'latitude', 'longitude', 'building_date', 'create_wasi', 'update_wasi', 'visits', 'reference', 'comment', 'rents_type_id', 'zip_code', 'availability_id', 'publish_on_map_id',
        'gallery_id', 'features', 'user_id', 'state_page_id'
    ];
    protected $casts = [
        'for_sale' => 'boolean',
        'for_rent' => 'boolean',
        'for_transfer' => 'boolean'
    ];
    public $incrementing = false;
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
    public function features()
    {
        return $this->hasMany(Feature::class);
    }
    public function Galleries()
    {
        return $this->hasMany(Gallery::class, 'id');
    }
    public function PropertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }
    public static function loadImage($url, $name_image)
    {
        $path = Storage::disk('public')->download($url)->put($name_image, $url);
        $url_result = (['file' => asset($path)]);
        $size = Storage::size($url);
        dd($url_result);
        return $url_result;
    }
    public static function getPropertiesAttribute()
    {
        $role = Role::find(4);
        try {
            $properties = Property::query()->with('PropertyType', 'country', 'departament', 'municipality', 'location', 'neighborhood')->paginate(5);
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

        }
    }
    public static function setPropertiesWasi($property_id)
    {

    }
    public static function getMainImageAttribue($main_page, $galleries)
    {
        return [
            'id_gallery' => $main_page['id_gallery'],
            'id_image' => $main_page['id_image'],
            'url' => self::loadImage($main_page['url'], 'main_' . $main_page['id_gallery'])
        ];
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
