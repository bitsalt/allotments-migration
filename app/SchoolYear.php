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

/** TODO: add an auto-increment $id field to this table. */
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
    protected $fillable = ['display', 'current_ind', 'admin_current_ind', 'visible_to_schools'];

    /**
     * Differs from Laravel conventional naming standard.
     *
     * @var string
     */
    protected $table = 'school_years';

    /**
     * @param $year
     * @param $displayYears
     * @return int
     */
    public static function addSchoolYear($year, $displayYears)
    {
        $result = DB::table('school_years')
            ->insert([
                'school_year' => $year,
                'display' => $displayYears,
                'current_ind' => 0,
                'admin_current_ind' => 0,
                'visible_to_schools' => 0
            ]);
        return $result;
    }

    /**
     * Return a hard-coded value to use the oldest school year for the
     * legacy import.
     * @return bool|int|mixed
     */
    public static function getCurrentSchoolYear() {
        return 2013;
        try {
            $result = DB::table('school_years')
                ->where('current_ind', '=', 1)
                ->pluck('school_year')
                ->all();
            return $result[0];
        }
        catch(\Exception $e) {
            echo $e;
            return false;
        }

    }

    /**
     * Gets the most recent school year.
     */
    public static function getLastSchoolYearRecorded()
    {
        /** TODO:
         * This could possibly be more useful by calling "WHERE current_ind = 1"
         * But in this case, we also need to consider what to use for importing
         * all of the legacy years. Probably still the same, but perhaps not all
         * of it will be used.
         */
        $sql = "SELECT school_year FROM `school_years` ORDER BY school_year DESC LIMIT 1";

        $result = DB::table('school_years')
            ->where('current_ind', '=', 1)
            ->pluck('school_year')
            ->all();
        //$result = $this->db->query($sql)->fetchall();
        return $result[0];

    }
}
