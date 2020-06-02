<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * @property int $id
 * @property int $school_year
 * @property string $school_type
 * @property string $school_type_name
 * @property string $override1
 */

/** TODO: add an auto-increment $id field to this table. */
class SchoolType extends Model
{
    /**
     * The primary key for the model.
     *
     * @var int
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $fillable = ['school_year', 'school_type', 'school_type_name', 'override1'];

    /**
     * Differs from Laravel conventional naming standard.
     *
     * @var string
     */
    protected $table = 'school_type';

//    public static function getCurrentSchoolTypes($year)
//    {
//        /* Types from the DB:
//         * TR, YR, SY, Mod, Alt, EC
//         */
//        $types =  DB::table('school_type')
//            ->where('school_year', '=', $year)
//            ->get(['id', 'school_type', 'school_type_name', 'override1']);
//
//        return $types;
//    }
}
