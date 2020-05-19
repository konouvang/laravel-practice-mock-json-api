<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    protected $table = 'practice';
    protected $primaryKey = "PracticeId";
    protected $fillable = [
        'PracticeName',
        'InstitutionId',
        'IsDeleted',
    ];
}