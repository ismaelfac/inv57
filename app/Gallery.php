<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\{ Property };

class Gallery extends Model
{
    protected $fillable = [
        'id','property_id', 'url', 'description', 'position'
    ];

    public function Property()
    {
        return $this->belongsTo(Property::class);
    }
}
