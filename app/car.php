<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'first_registration',
        'price',
        'kilometer',
        'power',
        'cubic_capacity',
        'colour',
        'interior_features',
        'make',
        'model',
        'vin_number',
        'location',
        'lat',
        'lng',
        'vehicle_type_id',
        'engine_type_id',
        'transmission_type_id',
        'owner_id'
    ];
    public function vehicle_type() {return $this->belongsTo(Vehicle_type::class);}
    public function engine_type() {return $this->belongsTo(engine_type::class);}
    public function transmission_type() {return $this->belongsTo(transmission_type::class);}
    public function user() {return $this->belongsTo(User::class);}
}
