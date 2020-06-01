<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $school_year
 * @property float $mileage_rate
 * @property int $trips
 * @property int $bonus_trips
 * @property float $bonus_miles
 */
class MileageVars extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['school_year', 'mileage_rate', 'trips', 'bonus_trips', 'bonus_miles'];

}
