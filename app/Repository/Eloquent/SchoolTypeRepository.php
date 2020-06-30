<?php


namespace App\Repository\Eloquent;


use App\LegacySchools;
use App\Repository\LegacySchoolRepositoryInterface;
use App\SchoolType;
use App\Traits\ExceptionLogging;
use Illuminate\Database\Eloquent\Model;
use App\Repository\SchoolTypeRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SchoolTypeRepository implements SchoolTypeRepositoryInterface
{
    use ExceptionLogging;

    private $model;
    private $legacySchoolsRepository;

    public function __construct(SchoolType $model, LegacySchoolRepositoryInterface $legacySchools) {
        $this->model = $model;
        $this->legacySchoolsRepository = $legacySchools;
    }

    public function rolloverLegacyYear(int $newYear): array
    {
        $legacyData = $this->legacySchoolsRepository->getAllDataByYear($newYear);

        // create unique records based on data from all schools
        $data = [];
        foreach ($legacyData as $school) {
            $type = $this->mapLegacyTypes($school['type']);
            if (in_array($type, $data)) {
                continue;
            }
            $data[] = $type;

            $this->model::create([
                'school_year' => $newYear,
                'school_type' => $type,
                'school_type_name' => $this->mapLegacyTypeDescriptions([$school['type']]),
                'override1' => null,
            ]);
        }

        return $this->getAllDataByYear($newYear);
    }

    /**
     * @param array $schoolTypeData
     * @return Model
     */
    public function rolloverYear(int $newYear, int $targetYear): array
    {
        $data = $this->getAllDataByYear($targetYear);
        foreach ($data as $schoolType) {
            try {
                $type = $this->model::where('id', '=', $schoolType['id'])
                    ->firstOrFail()
                    ->toArray();
                $type['school_year'] = $newYear;
                unset($type['id']);
                $this->model::create($type);
            }  catch (ModelNotFoundException $exception) {
                $this->logError(get_class($this), __FUNCTION__, ['year' => $newYear,
                    'school type data' => $data]);
            }
        }
        return $this->getAllDataByYear($newYear);
    }

    public function getAllDataByYear($year): array
    {
        return $this->model::where('school_year', '=', $year)
            ->get()
            ->toArray();
    }

    public function getIdByYearAndType(int $year, string $type): int
    {
        $filteredType = $this->mapLegacyTypes($type);
        try {
            $schoolTypeId = $this->model::where('school_year', '=', $year)
                ->where('school_type', '=', $filteredType)
                ->firstOrFail()
                ->toArray();
            return $schoolTypeId['id'];
        } catch (ModelNotFoundException $exception) {
            $this->logError(get_class($this), __FUNCTION__, ['year' => $year, 'type' => $type]);
        }
    }

    public function mapLegacyTypes($type)
    {
        $map = [
            'TR-MG' => 'TR',
            'YR-MG' => 'YR',
            'TR' => 'TR',
            'YR' => 'YR',
            'OP' => 'OP',
        ];

        if(array_key_exists($type, $map)) {
            return $map[$type];
        }
    }

    public function mapLegacyTypeDescriptions($type)
    {
        $map = [
            'OP' => 'Alternative',
            'TR' => 'Traditional',
            'YR' => 'Year-round',
            'TR-MG' => 'Traditional',
            'YR-MG' => 'Year-round',
        ];

        return $map[$type[0]];
    }

    public function getRecordsCount(): int
    {
        $records = $this->model::all();
        $records->count();
    }
}
