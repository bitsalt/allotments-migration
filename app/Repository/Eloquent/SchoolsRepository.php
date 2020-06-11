<?php


namespace App\Repository\Eloquent;


use App\GradeLevel;
use App\School;
use App\SchoolType;
use App\Traits\ExceptionLogging;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Repository\SchoolsRepositoryInterface;

class SchoolsRepository implements SchoolsRepositoryInterface
{
    use ExceptionLogging;

    private $model;

    public function __construct(School $model)
    {
        $this->model = $model;
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

    public function legacyRolloverYear(int $newYear, int $targetYear, array $legacySchools): bool
    {
        $newSchoolCount = count($legacySchools);
        $currentSchoolCount = $this->getSchoolCountByYear($targetYear);
        $targetNumber = $newSchoolCount + $currentSchoolCount;
        $added = 0;

        foreach ($legacySchools as $legacySchool) {
            $matchingCurrentSchool = $this->matchLegacySchoolToTargetYearSchool($targetYear, $legacySchool);

            $gradeLevelId = GradeLevel::select('id')
                ->where('school_year', '=', $newYear)
                ->where('grade_level', '=', $legacySchool['gradelevel'])
                ->first()
                ->toArray();

            $schoolTypeId = SchoolType::select('id')
                ->where('school_year', '=', $newYear)
                ->where('school_type', '=', $legacySchool['type'])
                ->first()
                ->toArray();

            if (is_array($matchingCurrentSchool)) {
                $added = $this->addNewSchool([
                    'school' => $legacySchool['schoolid'],
                    'school_year' => $targetYear,
                    'school_name' => $matchingCurrentSchool['school_name'],
                    'magnet_ind' => $matchingCurrentSchool['magnet_ind'],
                    'restart_ind' => $matchingCurrentSchool['restart_ind'],
                    'school_grade_level_id' => $gradeLevelId['id'],
                    'school_type_id' => $schoolTypeId['id'],
                    'date_created' => date('Y-m-d H:i:s'),
                    'date_modified' => null,
                    'has_schedule_assistance' => $matchingCurrentSchool['has_schedule_assistance'],
                    'schedule_assistance_hours' => $matchingCurrentSchool['schedule_assistance_hours']
                ]);

            }
        }
    }


    public function addNewSchool(array $data): int {
        $result = $this->model::create($data);
    }
}
