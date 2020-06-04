<?php

namespace App\Http\Controllers;

use App\LegacySchools;
use App\Repository\GradeLevelRepositoryInterface;
use App\Repository\LegacyResourcesRepositoryInterface;
use App\Repository\LegacySchoolRepositoryInterface;
use App\Repository\SchoolRepositoryInterface;
use App\Repository\SchoolTypeRepositoryInterface;
use App\Repository\SchoolYearsRepositoryInterface;
use App\SchoolType;
use App\SchoolYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Psr7\str;

class RolloverController extends Controller
{

    /**
     * Track number of records in all tables before and after the rolloever
     * @var $preRolloverTableRowCount
     * @var $postRolloverTableRowCount
     */
    private $preRolloverTableRowCount;
    private $postRolloverTableRowCount;

    private $currentSchoolYear;
    private $currentSchoolTypes;

    private $newSchoolYear;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(
        SchoolRepositoryInterface $schoolRepository,
        LegacySchoolRepositoryInterface $legacySchoolRepository,
        SchoolYearsRepositoryInterface $schoolYearsRepository,
        SchoolTypeRepositoryInterface $schoolTypeRepository,
        GradeLevelRepositoryInterface $gradeLevelRepository,
        LegacyResourcesRepositoryInterface $legacyResourcesRepository
        )
    {


        /** Rollovers for... **/
        $newYear = 2006;
        $copyYear = 2013;

            /** Begin test bed **/
//        $resources = $legacyResourcesRepository->getCategories($newYear);
//        dd($resources);

            /** End test bed **/

        // ...school year
        $ret = $schoolYearsRepository->addSchoolYear($newYear, '2006-2007');
        $mod = $schoolYearsRepository->getSchoolYearDataByYear($newYear);
        $newSchoolYear = $mod->toArray();

        // ...school types
        $stCollection = $schoolTypeRepository->getDataByYear($copyYear);
        $types = $stCollection->toArray();
        $typesColl = $schoolTypeRepository->rolloverYear($newYear, $types);
        $schoolTypes = $typesColl->toArray();

        // ...grade levels
        $glCollection = $gradeLevelRepository->getDataByYear($copyYear);
        $gradeLevels = $glCollection->toArray();
        $gradeLevelsColl = $gradeLevelRepository->rolloverYear($newYear, $gradeLevels);
        $rolloverGradeLevels = $gradeLevelsColl->toArray();
        // ...categories
        $categories = $legacyResourcesRepository->getCategories($newYear);



//        $data = [
//            'okToSave' => 'yes',
//            'updateCurrentYear' => 1,
//            'updateCurrentAdminYear' => 0,
//            'school_year' => 2006,
//            'display1' => 2006,
//            'display2' => 2007,
//            'adminCurrent' => 0,
//            'display' => '2006-2007',
//        ];
//
//        $year = 2006;
//        while ($year < 2013) {
//            $schools = $legacySchoolRepository->allByYear($year);
//            foreach ($schools as $school) {
//                $legacySchoolRepository->getSchoolData($school->schoolid);
//                $isMagnet = $legacySchoolRepository->isMagnetSchool();
//                echo '<br>magnet? -> '.$isMagnet;
//            }
//
//            $year++;
//        }


        return view('rollover.index')
//            ->with('newSchoolYear', $newSchoolYear);
//            ->with('schoolTypes', $schoolTypes)
//            ->with('gradeLevels', $rolloverGradeLevels);

            ->with([
                'newSchoolYear' => $newSchoolYear,
                'schoolTypes' => $schoolTypes,
                'gradeLevels' => $rolloverGradeLevels,
                'categories' => $categories,
            ]);

    }

    /**
     * Get a row count for all tables managed within Laravel.
     */
    public function countem($type)
    {
        $tables = [
            'allotments' => 0,
            'allotment_types' => 0,
            'allot_formulas' => 0,
            'allot_formulas_meta' => 0,
            'allot_grade_levels' => 0,
            'announcements' => 0,
            'categories' => 0,
            'grades' => 0,
            'grade_levels' => 0,
            'membership' => 0,
            'mileage' => 0,
            'mileage_vars' => 0,
            'newparms' => 0,
            'reporting_days' => 0,
            'schools' => 0,
            'school_grades' => 0,
            'school_type' => 0,
            'school_years' => 0,
            'specific_reports' => 0,
            'users' => 0,
            'user_role' => 0
        ];

        foreach ($tables as $table => $cnt) {
            $tables[$table] = count(DB::table($table)->get());
        }

        if($type == 'pre') {
            $this->preRolloverTableRowCount = $tables;
        }
        else {
            $this->postRolloverTableRowCount = $tables;
        }

    }

    public function getPreRolloverCount() {
        return $this->preRolloverTableRowCount;
    }

    public function getPostRolloverCount() {
        return $this->postRolloverTableRowCount;
    }

    /**
     * Begin the rollover process and orchestrate it from this point.
     * * Add new school year and copy db tables for new school year
     * @param $data mixed
     * Data set in $data arg.
     * '*' Denotes the args dependent on user selection.
     * '**' Denotes args generated by the code, but based on user selection.
        Array
        (
            [okToSave] => yes
            [updateCurrentYear] => 1
            *[updateCurrentAdminYear] => 0
            *[school_year] => 2021
            *[display1] => 2021
            *[display2] => 2022
            [adminCurrent] => 1
            [cancel] => Cancel
            **[display] => 2021-2022
        )
     */
    public function orchestrateRollover($data)
    {
        // get an initial count of all data records
        $this->countem('pre');

        $newSchoolYear = $data['school_year']; // was $nextSchoolYear

        // I think this is still okay to use
        $currentSchoolYear = SchoolYear::getLastSchoolYearRecorded();

        // new school_year record was going in the sql array, but can be
        // executed now...I think.
        $sy = new SchoolYear();
        $newSchoolYearId = $sy->addSchoolYear($data['school_year'], $data['display']);

        return $newSchoolYearId;
        /* TODO: Possibly...track these in another way rather than in this function. */
        // Initialize some arrays to use when creating empty non-salary records
        $categoryNonSalMapping = array();
        $allotTypeNonSalMapping = array();



    }

    private function dd($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
