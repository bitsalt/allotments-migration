<?php


namespace App\Repository\Eloquent;


use Illuminate\Database\Eloquent\Collection;
use App\Categories;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\isEmpty;

class CategoriesRepository implements \App\Repository\CategoriesRepositoryInterface
{

    private $model;

    public function __construct(Categories $model) {
        $this->model = $model;
    }

    /**
     * "Standard" school year rollover
     * @param int $newYear
     * @param array $categoryData
     * @return Collection
     */
    public function rolloverYear(int $newYear, array $categoryData): void
    {
        $categoryData['school_year'] = $newYear;
        unset($categoryData['category_id']);
        $this->model::create($categoryData);
    }

    /**
     * @param int $newYear
     * @param array $categoryData
     */
    public function rolloverLegacyData(int $newYear, int $copyYear, array $categoryData):void
    {
        $displayOrder = 1;
        foreach ($categoryData as $categoryName) {
            $match = $this->model::where('category_name', '=', $categoryName)
                ->where('school_year', '=', $copyYear)
                ->first();
            if ($match) {
                $match = $match->toArray();
                $match['display_order'] = $displayOrder;
                $this->rolloverYear($newYear, $match);
            } else {
                $data = [
                    'category_name' => $categoryName,
                    'school_year' => $newYear,
                    'fund' => NULL,
                    'salary_nonsalary_ind' => NULL,
                    'display_order' => $displayOrder
                ];
                $this->model::create($data);
            }
            $displayOrder++;
        }
    }


    public function getCategoryByName($testName, $year=''): array
    {
        if(!empty($year)) {
            $matches = $this->model::where([
                'category_name' => $testName,
                'school_year' => $year
            ])->orderBy('school_year', 'asc')
                ->get();
        } else {
            $matches = $this->model::where([
                'category_name' => $testName,
                ])->orderBy('school_year', 'asc')
                ->get();
        }

        if (empty($matches)) {
            return [];
        }

        $match = $matches->toArray();
        return $match;
    }

    public function getAllDataByYear(int $year): array
    {
        return $this->model::where('school_year', '=', $year)
            ->get()
            ->toArray();
    }
}
