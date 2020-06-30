<?php


namespace App\Repository\Eloquent;


use App\Allotments;
use App\AllotmentTypes;
use App\Repository\AllotmentsRepositoryInterface;
use App\School;
use App\Traits\ExceptionLogging;

class AllotmentsRepository implements AllotmentsRepositoryInterface
{
    use ExceptionLogging;

    protected $model;
    private $legacyAllotmentsRepository;

    public function __construct(Allotments $model, LegacyAllotmentRepository $legacyAllotmentRepository)
    {
        $this->model = $model;
        $this->legacyAllotmentsRepository = $legacyAllotmentRepository;
    }


    public function getAllDataByYear(int $year): array
    {
        return $this->model::where('school_year', '=', $year)
            ->get()
            ->toArray();
    }

    public function getLegacyData(int $year): array
    {
        return $this->legacyAllotmentsRepository->getAllDataByYear($year);
    }

    public function rolloverLegacyData(int $year): bool
    {
        // Default unless we hit a catch block. This allows the rest of the
        // error reporting to continue.
        $rolloverSuccess = true;

        $legacyData = $this->getLegacyData($year);
        $allotmentTypeMap = $this->buildAllotmentTypesMap($year);
        $schoolsMap = $this->buildSchoolsMap($year);
        $missingSchoolLog = $missingAllotmentTypeLog = [];

        foreach ($legacyData as $lData) {
            if (!isset($schoolsMap[$lData['schoolid']])) {
                if (!isset($missingSchoolLog[$lData['schoolid']])) {
                    $missingSchoolLog[$lData['schoolid']] = 1;
                } else {
                    $missingSchoolLog[$lData['schoolid']] += 1;
                }
                continue;
            }
            if (!isset($allotmentTypeMap[$lData['resourceid']])) {
                if (!isset($missingAllotmentTypeLog[$lData['resourceid']])) {
                    $missingAllotmentTypeLog[$lData['resourceid']] = 1;
                } else {
                    $missingAllotmentTypeLog[$lData['resourceid']] += 1;
                }
                continue;
            }
            // either null or a float
            $moe = ($lData['moe'] == null) ? null : floatval($lData['moe']);
            $conversions = ($lData['conv'] == null) ? null : floatval($lData['conv']);

            $newAllotData = [
                'school_id' => $schoolsMap[$lData['schoolid']],
                'school_year' => $year,
                'allotment_type_id' => $allotmentTypeMap[$lData['resourceid']],
                'moe' => $moe,
                'conversions' => $conversions,
                'carryover' => null,
                'comments' => $lData['comments'],
                'date_created' => date("Y-m-d H:i:s"),
                'date_modified' => null
            ];

            try {
                $this->model::create($newAllotData);
            } catch (TypeError $exception) {
                $this->logError(get_class($this), __FUNCTION__, ['year' => $year, 'data' => $newAllotData]);
                $rolloverSuccess = false;
            }

        }

        if (!empty($missingSchoolLog)) {
            foreach ($missingSchoolLog as $schoolId => $count) {
                $this->logError(get_class($this), __FUNCTION__, ['issue' => 'missing school record',
                    'legacy school id' => $schoolId, 'record count' => $count]);
            }
            $rolloverSuccess = false;
        }
        if (!empty($missingAllotmentTypeLog)) {
            foreach ($missingAllotmentTypeLog as $typeId => $count) {
                $this->logError(get_class($this), __FUNCTION__, ['issue' => 'missing allotment record',
                    'legacy resource' => $typeId, 'record count' => $count]);
            }
            $rolloverSuccess = false;
        }

        return $rolloverSuccess;
    }

    private function buildSchoolsMap($year): array
    {
        try {
            $schoolArr = School::where('school_year', '=', $year)
                ->get()
                ->toArray();
        } catch (ModelNotFoundException $exception) {
            $this->logError(get_class($this), __FUNCTION__, ['year' => $year]);
        }

        $map = [];
        foreach ($schoolArr as $school) {
            $map[$school['school']] = $school['id'];
        }
        return $map;
    }

    private function buildAllotmentTypesMap($year): array
    {
        try {
            $allotmentTypeArr = AllotmentTypes::where('school_year', '=', $year)
                ->get()
                ->toArray();
        } catch (ModelNotFoundException $exception) {
            $this->logError(get_class($this), __FUNCTION__, ['year' => $year]);
        }

        $map = [];
        foreach ($allotmentTypeArr as $type) {
            $map[$type['allotment_prog_code']] = $type['id'];
        }

        return $map;
    }

    public function getRecordsCount(): int
    {
        $records = $this->model::all();
        $records->count();
    }
}
