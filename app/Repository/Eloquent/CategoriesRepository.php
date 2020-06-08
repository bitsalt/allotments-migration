<?php


namespace App\Repository\Eloquent;


use Illuminate\Database\Eloquent\Collection;
use App\Categories;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\isEmpty;

class CategoriesRepository extends BaseRepository implements \App\Repository\CategoriesRepositoryInterface
{

    public function __construct(Categories $model) {
        parent::__construct($model);
    }

    /**
     * "Standard" school year rollover
     * @param int $newYear
     * @param array $categoryData
     * @return Collection
     */
    public function rolloverYear(int $newYear, array $categoryData): Collection
    {
        foreach ($categoryData as $data) {
            $type = $this->model->find($data['category_id']);
            $newType = $type->replicate();
            $newType->save();
            $newType->update(['school_year' => $newYear]);
        }
        return $this->getDataByYear($newYear);
    }

    /**
     * @param int $newYear
     * @param array $categoryData
     */
    public function rolloverLegacyData(int $newYear, array $categoryData):void
    {
        $displayOrder = 1;
        foreach ($categoryData as $categoryName) {
            if ($match = $this->getCategoryByName($categoryName)) {
                $match['display_order'] = $displayOrder;
                $this->rolloverYear($newYear, [$match]);
            } else {
                $data = [
                    'category_name' => $categoryName,
                    'school_year' => $newYear,
                    'fund' => NULL,
                    'salary_nonsalary_ind' => NULL,
                    'display_order' => $displayOrder
                ];
                $this->model->create($data);
            }
            $displayOrder++;
        }
    }

    public function getCategoryByName($testName, $year=''): array
    {
        if(!empty($year)) {
            $matches = $this->model
                ->where('category_name', '=', $testName)
                ->where('school_year', '=', $year)
                ->orderBy('school_year', 'asc')
                ->get();
        } else {
            $matches = $this->model
                ->where('category_name', '=', $testName)
                ->orderBy('school_year', 'asc')
                ->get();
        }

        if ($matches->isEmpty()) {
            return [];
        }

        $match = $matches->toArray();
        return $match[0];
    }

}
