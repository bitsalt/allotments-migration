<?php

namespace App\Providers;

use App\Repository\Eloquent\BaseRepository;
use App\Repository\Eloquent\LegacySchoolRepository;
use App\Repository\Eloquent\SchoolRepository;
use App\Repository\Eloquent\SchoolYearsRepository;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\LegacySchoolRepositoryInterface;
use App\Repository\SchoolRepositoryInterface;
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
//        $this->app->bind(
//            EloquentRepositoryInterface::class,
//            BaseRepository::class
//        );
//        $this->app->bind(
//            SchoolRepositoryInterface::class,
//            SchoolRepository::class
//        );
//        $this->app->bind(
//            LegacySchoolRepositoryInterface::class,
//            LegacySchoolRepository::class
//        );
//        $this->app->bind(
//            SchoolYearsRepositoryInterface::class,
//            SchoolYearsRepository::class
//        );
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
