<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $table = 'clinic';
    protected $primaryKey = "ClinicId";
    protected $fillable = [
        'Name',
        'CreatedOn',
        'InstitutionId',
    ];
}