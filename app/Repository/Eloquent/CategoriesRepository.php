<?php


namespace App\Repository\Eloquent;


use Illuminate\Database\Eloquent\Collection;
use App\Categories;
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

    public function rolloverLegacyData(int $newYear, array $categoryData)
    {
        $displayOrder = 1;
        foreach ($categoryData as $categoryName) {
            if ($match = $this->legacyCategoryNameHasRecentMatch($categoryName)) {
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

    public function legacyCategoryNameHasRecentMatch($testName): array
    {
        $matches = $this->model
            ->where('category_name', '=', $testName)
            ->orderBy('school_year', 'asc')
            ->get();

        if ($matches->isEmpty()) {
            return [];
        }

        $match = $matches->toArray();
        return $match[0];
    }

}
