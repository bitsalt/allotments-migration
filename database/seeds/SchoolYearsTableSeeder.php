<?php

use Illuminate\Database\Seeder;

class SchoolYearsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('school_years')->delete();

        \DB::table('school_years')->insert(array (
            0 =>
            array (
                'id' => 1,
                'school_year' => 2013,
                'display' => '2013-2014',
                'current_ind' => 0,
                'admin_current_ind' => 0,
                'visible_to_schools' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'school_year' => 2014,
                'display' => '2014-2015',
                'current_ind' => 0,
                'admin_current_ind' => 0,
                'visible_to_schools' => 1,
            ),
            2 =>
            array (
                'id' => 3,
                'school_year' => 2015,
                'display' => '2015-2016',
                'current_ind' => 0,
                'admin_current_ind' => 0,
                'visible_to_schools' => 1,
            ),
            3 =>
            array (
                'id' => 4,
                'school_year' => 2016,
                'display' => '2016-2017',
                'current_ind' => 0,
                'admin_current_ind' => 0,
                'visible_to_schools' => 1,
            ),
            4 =>
            array (
                'id' => 5,
                'school_year' => 2017,
                'display' => '2017-2018',
                'current_ind' => 0,
                'admin_current_ind' => 0,
                'visible_to_schools' => 1,
            ),
            5 =>
            array (
                'id' => 6,
                'school_year' => 2018,
                'display' => '2018-2019',
                'current_ind' => 0,
                'admin_current_ind' => 0,
                'visible_to_schools' => 1,
            ),
            6 =>
            array (
                'id' => 7,
                'school_year' => 2019,
                'display' => '2019-2020',
                'current_ind' => 1,
                'admin_current_ind' => 0,
                'visible_to_schools' => 1,
            ),
            7 =>
            array (
                'id' => 8,
                'school_year' => 2020,
                'display' => '2020-2021',
                'current_ind' => 0,
                'admin_current_ind' => 1,
                'visible_to_schools' => 1,
            ),
        ));


    }
}
