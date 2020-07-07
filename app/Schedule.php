<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'day_id', 
        'period_id',
        'doctor_id'
    ];

    public function weekday()
    {
    	return $this->belongsTo('App\Weekday');
    }

    public function period()
    {
    	return $this->belongsTo('App\Period');
    }
    
    public function doctor()
    {
    	return $this->belongsTo('App\Doctor');
    }
}
