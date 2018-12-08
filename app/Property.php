<?php
namespace App;
use App\Modelsgenerals\{ Country, Departament, Location, Municipality, Neighborhood };
use App\{User, Post, RentType, Feature };
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Property extends Model
{
    protected $table = 'properties';
    protected $fillable = [
        'id', 'id_user_wasi','client_id','for_sale', 'for_rent','for_transfer','property_type_id','country_id', 'departament_id','municipality_id','location_id','neighborhood_id', 'iso_currency','title','address','area', 'unit_area_label','built_area','id_unit_built_area','unit_built_area_label', 'maintenance_fee','sale_price','rent_price','bedrooms','bathrooms', 'garages','floor','stratum','social_stratum_id','observations',
        'video','property_condition_id', 'property_condition_label','status_on_page_id', 'latitude','longitude','building_date', 'create_wasi','update_wasi', 'visits','reference','comment','rents_type_id', 'zip_code','availability_id','publish_on_map_id', 'main_image',
        'galleries','features','user_id','state_page_id'
    ];
    protected $casts = [
        'for_sale' => 'boolean',
        'for_rent' => 'boolean',
        'for_transfer' => 'boolean'
    ];
    public $incrementing = false;
    public function country()     { return $this->belongsTo(Country::class); }
    public function departaments() { return $this->hasMany(Departament::class); }
    public function locations()    { return $this->hasMany(Location::class); }
    public function neighborhoods(){ return $this->hasMany(Neighborhood::class); }
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
    public function Feature()
    {
        return $this->hasMany(Feature::class);
    }
    public static function loadImage($url, $name_image)
    {
        $path = Storage::disk('public')->download($url)->put($name_image,$url);
        $url_result = (['file' => asset($path)]);
        $size = Storage::size($url);
        dd($url_result);
        return $url_result;
    }   
    public static function getMainImageAttribue($main_page)
    {
        return [
            'id_gallery' => $main_page['id_gallery'],
            'id_image' => $main_page['id_image'],
            'url' => self::loadImage($main_page['url'], 'main_'.$main_page['id_gallery'])
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
