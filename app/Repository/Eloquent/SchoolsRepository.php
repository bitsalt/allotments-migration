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

    public function getSchoolGradeLevelIdByLevel(string $level, int $year): int
    {
        $data = GradeLevel::select('id')
            ->where('school_year', '=', $year)
            ->where('grade_level', '=', $level)
            ->first()
            ->toArray();
        return $data['id'];
    }


    public function legacyRolloverYear(int $newYear, int $targetYear, array $legacySchools): int
    {
        foreach ($legacySchools as $legacySchool) {
            $matchingCurrentSchool = $this->matchLegacySchoolToTargetYearSchool($targetYear, $legacySchool);

            $gradeLevelId =$this->getSchoolGradeLevelIdByLevel($legacySchool['gradelevel'], $newYear);

            $schoolTypeId = $this->schoolTypeRepository->getIdByYearAndType($newYear, $legacySchool['type']);


            $isMagnet = (strstr($legacySchool['type'], '-MG')) ? 'M' : null;
            $data = [
                'school' => $legacySchool['schoolid'],
                'school_year' => $newYear,
                'school_name' => $legacySchool['schoolname'],
                'magnet_ind' => $isMagnet,
                'restart_ind' => null,
                'school_grade_level_id' => $gradeLevelId,
                'school_type_id' => $schoolTypeId,
                'date_created' => date('Y-m-d H:i:s'),
                'date_modified' => null,
                'has_schedule_assistance' => 0,
                'schedule_assistance_hours' => null
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

            try {
                $this->addNewSchool($data);
            } catch (ModelNotFoundException $exception) {
                $this->logError(get_class($this), __FUNCTION__, ['data' => $data,
                    'failure_on' => 'adding new school']);
                return false;
            }
        }

        return true;
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
        try {
            $data = $this->model::where('school', '=', $schoolNum)
                ->where('school_year', '=', $year)
                ->first('id')
                ->toArray();
            return $data['id'];
        }  catch (\Error $exception) {
            $this->logError(get_class($this), __FUNCTION__, ['year' => $year, 'schoolNum' => $schoolNum]);
        }

    }

    public function getSchoolBySchoolNum(int $schoolNum, $year): array
    {
        try {
            $data = $this->model::where('school', '=', $schoolNum)
                ->where('school_year', '=', $year)
                ->first()
                ->toArray();
            return $data;
        }  catch (\Error $exception) {
            $this->logError(get_class($this), __FUNCTION__, ['year' => $year, 'schoolNum' => $schoolNum]);
        }
    }

    public function getRecordsCount(): int
    {
        $records = $this->model::all();
        $records->count();
    }
}
