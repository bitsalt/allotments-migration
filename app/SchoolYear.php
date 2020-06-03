<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * @property int $school_year
 * @property string $display
 * @property int $current_ind
 * @property boolean $admin_current_ind
 * @property boolean $visible_to_schools
 */

class SchoolYear extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'school_year';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['school_year', 'display', 'current_ind', 'admin_current_ind', 'visible_to_schools'];

    /**
     * Differs from Laravel conventional naming standard.
     *
     * @var string
     */
    protected $table = 'school_years';

    public $timestamps = false;

}
