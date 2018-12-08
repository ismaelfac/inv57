<?php

namespace App\Modelsgenerals;
use App\Modelsgenerals\Member;
use Illuminate\Database\Eloquent\Model;

class Identification extends Model
{
    //
    protected $fillable = ['description','shortName'];
    public $timestamps = false;

    public function members () 
    {
        return $this->belongsTo(Member::class);
    }
}
