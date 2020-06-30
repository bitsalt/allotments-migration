<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $school_id
 * @property int $school_year
 * @property int $allotment_type_id
 * @property float $moe
 * @property float $conversions
 * @property float $carryover
 * @property string $comments
 * @property string $date_created
 * @property string $date_modified
 */
class Allotments extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['school_id', 'school_year', 'allotment_type_id', 'moe', 'conversions', 'carryover', 'comments', 'date_created', 'date_modified'];

//    protected $dates = ['date_created', 'date_modified'];

    public $table = 'allotments';

    public $timestamps = false;
}
