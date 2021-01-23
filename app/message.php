<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'message_body',
        'from_id',
        'to_id',
       
    ];
    public function user() {return $this->belongsTO(User::class);}
}
