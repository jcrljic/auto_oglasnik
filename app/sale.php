<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'price',
        'buyer_id',
        'seller_id'
    ];
    public function user() {return $this->belongsTO(User::class);}
}
