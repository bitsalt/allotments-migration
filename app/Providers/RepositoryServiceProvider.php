<?php

namespace App\Providers;

use App\Repository\AllotmentTypesRepositoryInterface;
use App\Repository\CategoriesRepositoryInterface;
use App\Repository\Eloquent\AllotmentTypesRepository;
use App\Repository\Eloquent\CategoriesRepository;
use App\Repository\Eloquent\GradeLevelRepository;
use App\Repository\Eloquent\LegacyAllotmentRepository;
use App\Repository\Eloquent\LegacyResourcesRepository;
use App\Repository\Eloquent\LegacySchoolRepository;
use App\Repository\Eloquent\SchoolRepository;
use App\Repository\Eloquent\SchoolsRepository;
use App\Repository\Eloquent\SchoolTypeRepository;
use App\Repository\Eloquent\SchoolYearsRepository;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\GradeLevelRepositoryInterface;
use App\Repository\LegacyAllotmentRepositoryInterface;
use App\Repository\LegacyResourcesRepositoryInterface;
use App\Repository\LegacySchoolRepositoryInterface;
use App\Repository\SchoolRepositoryInterface;
use App\Repository\SchoolsRepositoryInterface;
use App\Repository\SchoolTypeRepositoryInterface;
use App\Repository\SchoolYearsRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            SchoolRepositoryInterface::class,
            SchoolRepository::class
        );
        $this->app->bind(
            LegacySchoolRepositoryInterface::class,
            LegacySchoolRepository::class
        );
        $this->app->bind(
            SchoolYearsRepositoryInterface::class,
            SchoolYearsRepository::class
        );
        $this->app->bind(
            SchoolTypeRepositoryInterface::class,
            SchoolTypeRepository::class
        );
        $this->app->bind(
            GradeLevelRepositoryInterface::class,
            GradeLevelRepository::class
        );
        $this->app->bind(
            CategoriesRepositoryInterface::class,
            CategoriesRepository::class
        );
        $this->app->bind(
            LegacyResourcesRepositoryInterface::class,
            LegacyResourcesRepository::class
        );
        $this->app->bind(
            LegacyAllotmentRepositoryInterface::class,
            LegacyAllotmentRepository::class
        );
        $this->app->bind(
            AllotmentTypesRepositoryInterface::class,
            AllotmentTypesRepository::class
        );
        $this->app->bind(
            SchoolsRepositoryInterface::class,
            SchoolsRepository::class
        );

//        // Base repository binding
//        $this->app->bind(
//            EloquentRepositoryInterface::class,
//            BaseRepository::class
//        );
//
//        // Repository bindings on models
//        $models = [
//            'School',
//            'LegacySchool',
//            'SchoolYears',
//            'SchoolType',
//            'GradeLevel',
//            'Categories',
//            'LegacyResources',
//            'LegacyAllotments',
//            'AllotmentTypes',
//        ];
//
//        foreach ($models as $model) {
//            $this->app->bind(
//                "App\\Repository\\{$model}RepositoryInterface",
//                "App\\Repository\\Eloquent\\{$model}Repository"
//            );
//        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
