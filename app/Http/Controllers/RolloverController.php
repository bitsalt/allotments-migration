<?php

namespace App\Http\Controllers;

use App\LegacySchools;
use App\Repository\AllotmentsRepositoryInterface;
use App\Repository\AllotmentTypesRepositoryInterface;
use App\Repository\CategoriesRepositoryInterface;
use App\Repository\Eloquent\AllotmentsRepository;
use App\Repository\GradeLevelRepositoryInterface;
use App\Repository\GradesRepositoryInterface;
use App\Repository\LegacyAllotmentRepositoryInterface;
use App\Repository\LegacyResourcesRepositoryInterface;
use App\Repository\LegacySchoolRepositoryInterface;
use App\Repository\NewParmsRepositoryInterface;
use App\Repository\ReportingDaysRepositoryInterface;
use App\Repository\SchoolGradesRepositoryInterface;
use App\Repository\SchoolsRepositoryInterface;
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

    private $copyYear = 2013;
    private $lastStep = 12;
    private $newSchoolYear;
    private $expectedVal;
    private $actualVal;
    private $currentStep;
    private $schoolYearsRepository;
    private $schoolTypeRepository;
    private $gradeLevelRepository;
    private $categoriesRepository;
    private $legacyResourcesRepository;
    private $allotmentTypesRepository;
    private $legacySchoolRepository;
    private $schoolsRepository;
    private $reportingDaysRepository;
    private $newParmsRepository;

    public function __construct(
        SchoolYearsRepositoryInterface $schoolYearsRepository,
        SchoolTypeRepositoryInterface $schoolTypeRepository,
        GradeLevelRepositoryInterface $gradeLevelRepository,
        CategoriesRepositoryInterface $categoriesRepository,
        LegacyResourcesRepositoryInterface $legacyResourcesRepository,
        AllotmentTypesRepositoryInterface $allotmentTypesRepository,
        LegacySchoolRepositoryInterface $legacySchoolRepository,
        SchoolsRepositoryInterface $schoolsRepository,
        ReportingDaysRepositoryInterface $reportingDaysRepository,
        NewParmsRepositoryInterface $newParmsRepository,
        GradesRepositoryInterface $gradesRepository,
        SchoolGradesRepositoryInterface $schoolGradesRepository,
        AllotmentsRepositoryInterface $allotmentsRepository,
        LegacyAllotmentRepositoryInterface $legacyAllotmentRepository
    )
    {
        $this->schoolYearsRepository = $schoolYearsRepository;
        $this->schoolTypeRepository = $schoolTypeRepository;
        $this->gradeLevelRepository = $gradeLevelRepository;
        $this->categoriesRepository = $categoriesRepository;
        $this->legacyResourcesRepository = $legacyResourcesRepository;
        $this->allotmentTypesRepository = $allotmentTypesRepository;
        $this->legacySchoolRepository = $legacySchoolRepository;
        $this->schoolsRepository = $schoolsRepository;
        $this->reportingDaysRepository = $reportingDaysRepository;
        $this->newParmsRepository = $newParmsRepository;
        $this->gradesRepository = $gradesRepository;
        $this->schoolGradesRepository = $schoolGradesRepository;
        $this->allotmentsRepository = $allotmentsRepository;
        $this->legacyAllotmentRepository = $legacyAllotmentRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $rolloverStep)
    {
        $this->newSchoolYear = $request->post('year');
        $this->currentStep = $rolloverStep;
        $truncate = $request->post('truncateYear');
        if ($truncate) {
            $this->truncateData();
        }

        switch ($rolloverStep) {
            case 1:
                return $this->rolloverStepOne();
                break;
            case 2:
                return $this->rolloverStepTwo();
                break;
            case 3:
                return $this->rolloverStepThree();
                break;
            case 4:
                return $this->rolloverStepFour();
                break;
            case 5:
                return $this->rolloverStepFive();
                break;
            case 6:
                return $this->rolloverStepSix();
                break;
            case 7:
                return $this->rolloverStepSeven();
                break;
            case 8:
                return $this->rolloverStepEight();
                break;
            case 9:
                return $this->rolloverStepNine();
                break;
            case 10:
                return $this->rolloverStepTen();
                break;
            case 11:
                return $this->rolloverStepEleven();
                break;
            case 12:
                return $this->rolloverStepTwelve();
                break;
            default:
                $response = $this->packageResponse(0, 'Something went wrong...horribly wrong.');
                return response()->json($response);
        }
    }


    // ...school year
    private function rolloverStepOne()
    {
        $next = 1 + $this->newSchoolYear;
        $displayYear = $this->newSchoolYear.'-'.$next;
        $this->expectedVal = $this->schoolYearsRepository->getRecordsCount() + 1;
        $ret = $this->schoolYearsRepository->addSchoolYear($this->newSchoolYear, $displayYear);
        $this->actualVal = $this->schoolYearsRepository->getRecordsCount();

        $response = $this->packageResponse($ret, 'Current number of school years +1');
        return response()->json($response);
    }


    // ...school types
    private function rolloverStepTwo()
    {
        $this->expectedVal = count($this->schoolTypeRepository->getAllDataByYear($this->copyYear));
        $ret = $this->schoolTypeRepository->rolloverLegacyYear($this->newSchoolYear, $this->copyYear);
        $this->actualVal = count($this->schoolTypeRepository->getAllDataByYear($this->newSchoolYear));

        $response = $this->packageResponse($ret, 'Equal number of school types as previous year');
        return response()->json($response);
    }


    // ...grade levels
    private function rolloverStepThree()
    {
        $this->expectedVal = count($this->gradeLevelRepository->getAllDataByYear($this->copyYear));
        $ret = $this->gradeLevelRepository->rolloverYear($this->newSchoolYear, $this->copyYear);
        $this->actualVal = count($this->gradeLevelRepository->getAllDataByYear($this->copyYear));

        $response = $this->packageResponse($ret, 'Equal number of grade levels as previous year');
        return response()->json($response);
    }


    // ...categories - uses the Resources repository, but must be processed first
    private function rolloverStepFour()
    {
        $categoriesArr = $this->legacyResourcesRepository->getCategories($this->newSchoolYear);
        $this->expectedVal = count($categoriesArr);
        $ret = $this->categoriesRepository->rolloverLegacyData($this->newSchoolYear, $this->copyYear, $categoriesArr);
        $this->actualVal = count($this->categoriesRepository->getAllDataByYear($this->newSchoolYear));
        $response = $this->packageResponse($ret, 'Legacy categories equal to new year categories');
        return response()->json($response);
    }


    // ...resources
    private function rolloverStepFive()
    {
        $this->expectedVal = count($this->legacyResourcesRepository->getAllDataByYear($this->newSchoolYear));
        $ret = $this->legacyResourcesRepository->rolloverLegacyData($this->newSchoolYear);
        $this->actualVal = count($this->allotmentTypesRepository->getAllDataByYear($this->newSchoolYear));
        $response = $this->packageResponse($ret, 'Legacy resource equal to new year resources');
        return response()->json($response);
    }


    // ...schools
    private function rolloverStepSix()
    {
        $legacySchools = $this->legacySchoolRepository->getAllDataByYear($this->newSchoolYear);
        $this->expectedVal = count($legacySchools);
        $ret = $this->schoolsRepository->legacyRolloverYear($this->newSchoolYear, $this->copyYear, $legacySchools);
        $this->actualVal = $this->schoolsRepository->getSchoolCountByYear($this->newSchoolYear);
        $response = $this->packageResponse($ret, 'Legacy school count equal to new year school count');
        return response()->json($response);
    }


    // ...allotment types
    private function rolloverStepSeven()
    {

        $legacyRecords = $this->legacyResourcesRepository->getAllDataByYear($this->newSchoolYear);
        $ret = $this->legacyResourcesRepository->rolloverLegacyData($this->newSchoolYear);
        $newRecords = $this->allotmentTypesRepository->getAllDataByYear($this->newSchoolYear);
        $this->expectedVal = count($legacyRecords);
        $this->actualVal = count($newRecords);
        $response = $this->packageResponse($ret, 'Legacy allotment/resources count equal to new year resources count');
        return response()->json($response);
    }


    // reporting days
    private function rolloverStepEight()
    {
        $ret = $this->reportingDaysRepository->rolloverYear($this->newSchoolYear, $this->copyYear);
        $expected = $this->reportingDaysRepository->getDataByYear($this->newSchoolYear);
        $current = $this->reportingDaysRepository->getDataByYear($this->copyYear);
        $this->expectedVal = count($expected);
        $this->actualVal = count($current);
        $response = $this->packageResponse($ret, 'New year reporting days count equal to previous year count');
        return response()->json($response);
    }


    // new parms
    private function rolloverStepNine()
    {
        $ret = $this->newParmsRepository->rolloverYear($this->newSchoolYear, $this->copyYear);

        $this->expectedVal = count($this->newParmsRepository->getDataByYear($this->copyYear));
        $this->actualVal = count($this->newParmsRepository->getDataByYear($this->newSchoolYear));
        $response = $this->packageResponse($ret, 'New year parms count equal to previous year parms count');
        return response()->json($response);
    }


    // grades
    private function rolloverStepTen()
    {
        $ret = $this->gradesRepository->rolloverYear($this->newSchoolYear, $this->copyYear);
        $this->expectedVal = count($this->gradesRepository->getDataByYear($this->copyYear));
        $this->actualVal = count($this->gradesRepository->getDataByYear($this->newSchoolYear));
        $response = $this->packageResponse($ret, 'New year grades count equal to previous year grades count');
        return response()->json($response);
    }


    // school_grades
    private function rolloverStepEleven()
    {
        $map = [
            'E' => 6, //['K','01','02','03','04','05'],
            'M' => 3, // ['06','07','08'],
            'H' => 4, // ['09','10','11','12'],
            'U' => 5, // ['06','07','08','09','10'],
            'L' => 8 // ['K','01','02','03','04','05','06','07']
        ];
        $total = 0;
        $schools = $this->schoolsRepository->getAllDataByYear($this->newSchoolYear);
        foreach ($schools as $school) {
            $gLevel = $this->gradeLevelRepository->getGradeLevelById($school['school_grade_level_id']);
            $total += $map[$gLevel];
        }
        $this->expectedVal = $total;
        $metric = 'School grades are totaled based on school type and number of grades for that
        type (ex. total of middle schools x 3 + total high schools x 4 + ...etc.).';
        $ret = $this->schoolGradesRepository->rolloverLegacyYear($this->newSchoolYear);
        $this->actualVal = count($this->schoolGradesRepository->getAllDataByYear($this->newSchoolYear));
        $response = $this->packageResponse($ret, $metric);
        return response()->json($response);
    }


    // allotments
    public function rolloverStepTwelve()
    {
        $this->expectedVal = count($this->legacyAllotmentRepository->getAllDataByYear($this->newSchoolYear));
        $ret = $this->allotmentsRepository->rolloverLegacyData($this->newSchoolYear, $this->copyYear);
        $this->actualVal = count($this->allotmentsRepository->getAllDataByYear($this->newSchoolYear));
        $response = $this->packageResponse($ret, 'New year allotments count equal to legacy year allotments count');
        return response()->json($response);
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

    private function packageResponse($ret, $metric)
    {
        $nextStep = 1 + $this->currentStep;
        if ($nextStep > $this->lastStep) {
            $nextStep = 0;
        }

        $retArr = [
            'currentStep' => $this->currentStep,
            'nextStep' => $nextStep,
            'expected' => $this->expectedVal,
            'actual' => $this->actualVal,
            'metric' => $metric,
        ];
        if ($ret) {
            $retArr['result'] = 1;
            $retArr['msg'] = 'Success!';
        } else {
            $retArr['result'] = 0;
            $retArr['msg'] = 'ERROR!';
        }
        return $retArr;
    }


    private function truncateData()
    {
        if (!$this->newSchoolYear) {
            return false;
        }

        // Oh shit...what about allot_grade_levels??!?!?
        $affectedTables = [
            'allotments',
            'allotment_types',
            'categories',
            'grade_levels',
            'grades',
            'reporting_days',
            'school_grades',
            'school_type',
            'schools',
            'school_years',
        ];

        foreach ($affectedTables as $table) {
            $query = "TRUNCATE TABLE $table WHERE school_year = $this->newSchoolYear";
            $model = DB::table($table)
                ->where('school_year', '=', $this->newSchoolYear)
                ->delete();
        }
    }
}
