<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Period extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'name',
        'stat_time',
        'end_time'
    ];

    public function schedules()
    {
    	return $this->hasMany('App\Schedule');
    }
}