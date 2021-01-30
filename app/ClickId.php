<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clickid extends Model
{
    public $table = 'clickid';

    protected $fillable = [
        'clickid', 'event', 'type', 'app_id', 'sell', 'reg'
    ];
}
