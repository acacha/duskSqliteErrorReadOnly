<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vacancy.
 *
 * @package App
 */
class Vacancy extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'speciality_id',
    ];

}
