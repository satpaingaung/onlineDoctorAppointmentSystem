<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'name'
    ];
    //join with doctors table for department_id
    public function doctors()
    {
    	return $this->hasMany('App\Doctor');
    }
}
