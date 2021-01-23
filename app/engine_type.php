<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Engine_type extends Model
{
    protected $fillable = [
        'name',
      
    ];

    public function cars() { return $this->hasMany(car::class);}
}
