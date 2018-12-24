<?php

namespace App\ModelsProperties;

use Illuminate\Database\Eloquent\Model;

class SocialStratum extends Model
{
    protected $table = 'social_stratum';
    protected $fillable = ['it_represents', 'label'];
    public $timestamps = false;


}
