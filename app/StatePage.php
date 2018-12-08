<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatePage extends Model
{
    protected $table = 'state_pages';
    protected $fillable = ['it_represents', 'label'];
    public $timestamps = false;
}
