<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App \{
    Customer, CustomerRol
};

class TypeClient extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;
    public function customers()
    {
        return $this->belongsToMany(Client::class)->using(CustomerRol::class);
    }

}
