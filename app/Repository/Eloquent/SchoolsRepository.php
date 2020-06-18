<?php


namespace App\Repository\Eloquent;


use App\GradeLevel;
use App\Repository\SchoolTypeRepositoryInterface;
use App\School;
use App\SchoolType;
use App\Traits\ExceptionLogging;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Repository\SchoolsRepositoryInterface;
use Illuminate\Database\QueryException;

class SchoolsRepository implements SchoolsRepositoryInterface
{
    use ExceptionLogging;

    private $model;
    private $schoolTypeRepository;

    public function __construct(School $model, SchoolTypeRepositoryInterface $schoolTypeRepository)
    {
        $this->model = $model;
        $this->schoolTypeRepository = $schoolTypeRepository;
    }

    public function getAllDataByYear(int $year): array
    {
        return $this->model::where('school_year', '=', $year)
            ->get()
            ->toArray();
    }

    public function matchLegacySchoolToTargetYearSchool(int $year, array $school): array
    {
        try {
            $result = $this->model::where('school_year', '=', $year)
                ->where('school', '=', $school['schoolid'])
                ->firstOrFail()
                ->toArray();
            return $result;
        } catch (ModelNotFoundException $exception) {
            $this->logError(get_class($this), __FUNCTION__, ['year' => $year, 'school' => $school]);
        }

        return [];
    }

    public function getSchoolCountByYear(int $year): int {
        return $this->model::where('school_year', '=', $year)
            ->count();
    }

    public function legacyRolloverYear(int $newYear, int $targetYear, array $legacySchools): int
    {
        $legacySchoolCount = count($legacySchools);
        //$currentSchoolCount = $this->getSchoolCountByYear($targetYear);

        foreach ($legacySchools as $legacySchool) {
            $matchingCurrentSchool = $this->matchLegacySchoolToTargetYearSchool($targetYear, $legacySchool);

            $gradeLevelId = GradeLevel::select('id')
                ->where('school_year', '=', $newYear)
                ->where('grade_level', '=', $legacySchool['gradelevel'])
                ->first()
                ->toArray();

//            try {
//                $schoolTypeId = SchoolType::select('id')
//                    ->where('school_year', '=', $newYear)
//                    ->where('school_type', '=', $legacySchool['type'])
//                    ->firstOrFail()
//                    ->toArray();
//            } catch (ModelNotFoundException $exception) {
//                $this->logError(get_class($this), __FUNCTION__, ['query' => $schoolTypeId]);
//            }
            $schoolTypeId = $this->schoolTypeRepository->getIdByYearAndType($newYear, $legacySchool['gradelevel']);

            $isMagnet = ($legacySchool['type'] == 'TR-MG'
                        || $legacySchool['type'] == 'YR-MG') ?
                'M' : null;
            $data = [
                'school' => $legacySchool['schoolid'],
                'school_year' => $newYear,
                'school_name' => $legacySchool['schoolname'],
                'magnet_ind' => $isMagnet,
                'restart_ind' => null,
                'school_grade_level_id' => $gradeLevelId['id'],
                'school_type_id' => $schoolTypeId,
                'date_created' => date('Y-m-d H:i:s'),
                'date_modified' => null,
                'has_schedule_assistance' => '',
                'schedule_assistance_hours' => ''
            ];

            if (!empty($matchingCurrentSchool)) {
                $data['has_schedule_assistance'] = $matchingCurrentSchool['has_schedule_assistance'];
                $data['schedule_assistance_hours'] = $matchingCurrentSchool['schedule_assistance_hours'];

                // log info if magnet school info does not match
                if ($isMagnet && $matchingCurrentSchool['magnet_ind'] != 'M') {
                    $this->logError(get_class($this), __FUNCTION__, [
                        'legacy_magnet_value' => $legacySchool['type'],
                        'current_magnet_value' => $matchingCurrentSchool['magnet_ind'],
                        'legacy_school_id' => $legacySchool['schoolid'],
                        'current_school_id' => $matchingCurrentSchool['id']]);
                }
            }

            $this->addNewSchool($data);

        }

        $newSchoolCount = $this->getSchoolCountByYear($newYear);
        return $legacySchoolCount - $newSchoolCount;
    }


    public function addNewSchool(array $data): bool {
        try {
            $this->model::create($data);
            return true;
        } catch (QueryException $e) {
            $this->logError(get_class($this), __FUNCTION__, ['data' => $data]);
        }

        return false;
    }

    public function getSchoolIdBySchoolNum(int $schoolNum, int $year): int
    {
        $data = $this->model::where('school', '=', $schoolNum)
                ->where('school_year', '=', $year)
                ->first('id')
                ->toArray();
        return $data['id'];
    }
}
