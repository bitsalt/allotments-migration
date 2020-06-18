<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $school_year
 * @property string $report_days
 * @property boolean $order_id
 */
class ReportingDays extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['school_year', 'report_days', 'order_id'];

    public $timestamps = false;
}
