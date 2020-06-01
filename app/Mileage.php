<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $school_year
 * @property int $school
 * @property float $mileage
 */
class Mileage extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['school_year', 'school', 'mileage'];

    /**
     * Differs from traditional Laravel naming pattern.
     * @var string
     */
    protected $table = 'mileage';
}
