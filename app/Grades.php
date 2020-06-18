<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $grade
 * @property int $school_year
 * @property int $grade_order
 * @property float $moe_divisor
 * @property float $ta_divisor
 * @property float $moe_divisor_override1
 * @property float $ta_divisor_override1
 */
class Grades extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['grade', 'school_year', 'grade_order', 'moe_divisor', 'ta_divisor', 'moe_divisor_override1', 'ta_divisor_override1'];

    public $timestamps = false;
}
