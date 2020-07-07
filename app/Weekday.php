<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weekday extends Model
{
    //

    protected $fillable = [
        'name',
        'number'
    ];
    public function schedules()
    {
    	return $this->hasMany('App\Schedule');
    }
}
