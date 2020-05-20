<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    public $timestamps = false;

    protected $table = 'Clinic';
    protected $primaryKey = "ClinicId";
    protected $fillable = [
        'Name',
        'CreatedOn',
        'InstitutionId',
    ];
}