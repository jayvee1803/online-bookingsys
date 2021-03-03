<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_infos extends Model
{
    protected $fillable = [
        'email','first_name','last_name','address','city','postal_code','aboutme', 'photo',
    ];
}
