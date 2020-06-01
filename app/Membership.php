<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $school_id
 * @property int $school_year
 * @property string $day_proj_plan_ind
 * @property string $grade
 * @property int $studentcount
 */
class Membership extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['school_id', 'school_year', 'day_proj_plan_ind', 'grade', 'studentcount'];

    /**
     * Differs from traditional Laravel naming pattern.
     * @var string
     */
    protected $table = 'membership';
}
