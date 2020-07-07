<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Patient extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'patientName',
        'phoneNumber',
        'birthDate',
        'bloodType',
        'address',
        'note',
        'user_id'
    ];
}
