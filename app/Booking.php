<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
      'name','check_in','check_out','housing_type','children','adults','more_info','email','phone'
    ];

    protected $attributes = [
      'confirmed' => 0,
      'contacted' => 0
    ];
}
