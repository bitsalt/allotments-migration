<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $school
 * @property int $school_year
 * @property string $school_name
 * @property string $magnet_ind
 * @property string $restart_ind
 * @property int $school_grade_level_id
 * @property int $school_type_id
 * @property string $date_created
 * @property string $date_modified
 * @property boolean $has_schedule_assistance
 * @property int $schedule_assistance_hours
 */
class School extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['school', 'school_year', 'school_name', 'magnet_ind', 'restart_ind', 'school_grade_level_id', 'school_type_id', 'date_created', 'date_modified', 'has_schedule_assistance', 'schedule_assistance_hours'];

    public $timestamps = false;

    public function gradeLevel()
    {
        return $this->hasOne('App\GradeLevel', 'id', 'school_grade_level_id');
    }

}
