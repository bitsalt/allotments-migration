<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $school_id
 * @property int $school_year
 * @property int $grade_id
 */
class SchoolGrades extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['school_id', 'school_year', 'grade_id'];

}
