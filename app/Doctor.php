<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'doctorName',
        'phoneNumber',
        'doctorNumber',
        'department_id',
        'doctorPhoto'
    ];

    public function department()
    {
    	return $this->belongsTo('App\department');
    }

    public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }
}
