<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clickid extends Model
{
    protected $table = 'clickid';
    protected $primaryKey = 'clickid';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'clickid', 'event', 'type', 'app_id', 'sell', 'reg'
    ];
}
