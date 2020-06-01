<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * @property int $schoolid
 * @property string $schoolname
 * @property int $start_yr
 * @property int $end_yr
 * @property string $gradelevel
 * @property string $type
 * @property string $lastupdate
 */
class LegacySchools extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['schoolid', 'schoolname', 'start_yr', 'end_yr', 'gradelevel', 'type', 'lastupdate'];

    protected $primaryKey = 'schoolid';

    protected $table = 'legacy_schools';

//    public static function getLegacySchools()
//    {
//        /* Types from legacy to current:
//         * TR->TR,
//         * YR->YR :or: SY,
//         * OP-> TR,
//         * TR->TR +MG->schools.magnet_ind,
//         * YR-> YR + MG->schools.magnet_ind
//         */
//
//        return DB::table('legacy_schools')->get();
//    }
//
//    public function importLegacySchools($year)
//    {
//        $legacySchools = self::getLegacySchools();
//        foreach ($legacySchools as $legacySchool) {
//            if ($legacySchool['start_yr'] < $year) {
//                continue; // school did not exist for the new year being created
//            }
//
//            // magnet?
//            $magnetVal = 'NULL';
//            if (substr('-MG', $legacySchool['type'])){
//                $magnetVal = 'M';
//            }
//
//            $data = [
//                'school' => $legacySchool['schoolid'],
//                'school_year' => $year,
//                'school_name' => $legacySchool['schoolname'],
//                'magnet_ind' => $magnetVal,
//                'restart_ind' => 'NULL',
//                'school_grade_level_id' => ,
//                'school_type_id' => ,
//                'date_created' => ,
//                'date_modified' => ,
//                'has_schedule_assistance' => 0,
//                'schedule_assistance_hours' => 'NULL'
//            ];
//        }
//    }
}
