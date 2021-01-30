<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clickid extends Model
{
    public $table = 'clickid';
    public $timestamps = false;
    public $incrementing = false;
    protected $primary_key = null;

    protected $fillable = [
        'clickid', 'event', 'type', 'app_id', 'sell', 'reg'
    ];
}
