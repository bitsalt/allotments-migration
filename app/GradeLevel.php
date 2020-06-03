<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GradeLevel
 * @package App
 */
class GradeLevel extends Model {

    protected $fillable = ['school_year', 'grade_level', 'grade_level_name', 'display_order'];

    public $timestamps = false;
}
