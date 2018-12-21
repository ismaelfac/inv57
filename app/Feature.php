<?php

namespace App;

use App\Property;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = ['name', 'int_ext'];
    public $timestamps = false;
    protected $casts = [
        'int_ext' => 'boolean'
    ];
    public function Property()
    {
        return $this->belongsTo(Property::class);
    }

}
