<?php

namespace App;
use App\{ Property, Feature };
use Illuminate\Database\Eloquent\Model;

class FeaturesProperty extends Model
{
    protected $fillable = ['property_id', 'feature_id'];
    
    public function property()
    {
        return $this->ManytoMany(Property::class);
    }
    public function Feature()
    {
        return $this->ManytoMany(Property::class);
    }
}
