<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $table = 'institution';
    protected $primaryKey = "InstitutionId";
    protected $fillable = [
        'Name',
        'SchemaName',
        'Abbreviation' ,
        'OberdConnectEnabled'
    ];

    public function clinics()
    {
        return $this->hasMany(Clinic::class, "InstitutionId", "InstitutionId");
    }

    public function practices()
    {
        return $this->hasMany(Practice::class, "InstitutionId", "InstitutionId");
    }
}