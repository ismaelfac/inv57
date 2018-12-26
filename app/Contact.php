<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'email', 'message'
    ];
    protected $dates = ['deleted_at'];
}
