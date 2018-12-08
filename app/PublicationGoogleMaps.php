<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicationGoogleMaps extends Model
{
    protected $table = 'publication_google_maps';
    protected $fillable = ['it_represents', 'label'];
    public $timestamps = false;
    
    public function property()
    {
        return $this->hasMany(Property::class);
    }
}
