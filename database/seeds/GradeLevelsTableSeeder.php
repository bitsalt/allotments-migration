<?php

use Illuminate\Database\Seeder;

class GradeLevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('grade_levels')->delete();
        
        \DB::table('grade_levels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'school_year' => 2013,
                'grade_level' => 'E',
                'grade_level_name' => 'Elementary',
                'display_order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'school_year' => 2013,
                'grade_level' => 'M',
                'grade_level_name' => 'Middle',
                'display_order' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'school_year' => 2013,
                'grade_level' => 'H',
                'grade_level_name' => 'High',
                'display_order' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'school_year' => 2013,
                'grade_level' => 'L',
                'grade_level_name' => 'K-8 Academy',
                'display_order' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'school_year' => 2013,
                'grade_level' => 'U',
                'grade_level_name' => '6-12 Leadership Academy',
                'display_order' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'school_year' => 2014,
                'grade_level' => 'E',
                'grade_level_name' => 'Elementary',
                'display_order' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'school_year' => 2014,
                'grade_level' => 'M',
                'grade_level_name' => 'Middle',
                'display_order' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'school_year' => 2014,
                'grade_level' => 'H',
                'grade_level_name' => 'High',
                'display_order' => 3,
            ),
            8 => 
            array (
                'id' => 9,
                'school_year' => 2014,
                'grade_level' => 'L',
                'grade_level_name' => 'K-8 Academy',
                'display_order' => 4,
            ),
            9 => 
            array (
                'id' => 10,
                'school_year' => 2014,
                'grade_level' => 'U',
                'grade_level_name' => '6-12 Leadership Academy',
                'display_order' => 5,
            ),
            10 => 
            array (
                'id' => 11,
                'school_year' => 2015,
                'grade_level' => 'E',
                'grade_level_name' => 'Elementary',
                'display_order' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'school_year' => 2015,
                'grade_level' => 'M',
                'grade_level_name' => 'Middle',
                'display_order' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'school_year' => 2015,
                'grade_level' => 'H',
                'grade_level_name' => 'High',
                'display_order' => 3,
            ),
            13 => 
            array (
                'id' => 14,
                'school_year' => 2015,
                'grade_level' => 'L',
                'grade_level_name' => 'K-8 Academy',
                'display_order' => 4,
            ),
            14 => 
            array (
                'id' => 15,
                'school_year' => 2015,
                'grade_level' => 'U',
                'grade_level_name' => '6-12 Leadership Academy',
                'display_order' => 5,
            ),
            15 => 
            array (
                'id' => 16,
                'school_year' => 2016,
                'grade_level' => 'E',
                'grade_level_name' => 'Elementary',
                'display_order' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'school_year' => 2016,
                'grade_level' => 'M',
                'grade_level_name' => 'Middle',
                'display_order' => 2,
            ),
            17 => 
            array (
                'id' => 18,
                'school_year' => 2016,
                'grade_level' => 'H',
                'grade_level_name' => 'High',
                'display_order' => 3,
            ),
            18 => 
            array (
                'id' => 19,
                'school_year' => 2016,
                'grade_level' => 'L',
                'grade_level_name' => 'K-8 Academy',
                'display_order' => 4,
            ),
            19 => 
            array (
                'id' => 20,
                'school_year' => 2016,
                'grade_level' => 'U',
                'grade_level_name' => '6-12 Leadership Academy',
                'display_order' => 5,
            ),
            20 => 
            array (
                'id' => 21,
                'school_year' => 2017,
                'grade_level' => 'E',
                'grade_level_name' => 'Elementary',
                'display_order' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'school_year' => 2017,
                'grade_level' => 'M',
                'grade_level_name' => 'Middle',
                'display_order' => 2,
            ),
            22 => 
            array (
                'id' => 23,
                'school_year' => 2017,
                'grade_level' => 'H',
                'grade_level_name' => 'High',
                'display_order' => 3,
            ),
            23 => 
            array (
                'id' => 24,
                'school_year' => 2017,
                'grade_level' => 'L',
                'grade_level_name' => 'K-8 Academy',
                'display_order' => 4,
            ),
            24 => 
            array (
                'id' => 25,
                'school_year' => 2017,
                'grade_level' => 'U',
                'grade_level_name' => '6-12 Leadership Academy',
                'display_order' => 5,
            ),
            25 => 
            array (
                'id' => 26,
                'school_year' => 2018,
                'grade_level' => 'E',
                'grade_level_name' => 'Elementary',
                'display_order' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'school_year' => 2018,
                'grade_level' => 'M',
                'grade_level_name' => 'Middle',
                'display_order' => 2,
            ),
            27 => 
            array (
                'id' => 28,
                'school_year' => 2018,
                'grade_level' => 'H',
                'grade_level_name' => 'High',
                'display_order' => 3,
            ),
            28 => 
            array (
                'id' => 29,
                'school_year' => 2018,
                'grade_level' => 'L',
                'grade_level_name' => 'K-8 Academy',
                'display_order' => 4,
            ),
            29 => 
            array (
                'id' => 30,
                'school_year' => 2018,
                'grade_level' => 'U',
                'grade_level_name' => '6-12 Leadership Academy',
                'display_order' => 5,
            ),
            30 => 
            array (
                'id' => 31,
                'school_year' => 2019,
                'grade_level' => 'E',
                'grade_level_name' => 'Elementary',
                'display_order' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'school_year' => 2019,
                'grade_level' => 'M',
                'grade_level_name' => 'Middle',
                'display_order' => 2,
            ),
            32 => 
            array (
                'id' => 33,
                'school_year' => 2019,
                'grade_level' => 'H',
                'grade_level_name' => 'High',
                'display_order' => 3,
            ),
            33 => 
            array (
                'id' => 34,
                'school_year' => 2019,
                'grade_level' => 'L',
                'grade_level_name' => 'K-8 Academy',
                'display_order' => 4,
            ),
            34 => 
            array (
                'id' => 35,
                'school_year' => 2019,
                'grade_level' => 'U',
                'grade_level_name' => '6-12 Leadership Academy',
                'display_order' => 5,
            ),
            35 => 
            array (
                'id' => 36,
                'school_year' => 2020,
                'grade_level' => 'E',
                'grade_level_name' => 'Elementary',
                'display_order' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'school_year' => 2020,
                'grade_level' => 'M',
                'grade_level_name' => 'Middle',
                'display_order' => 2,
            ),
            37 => 
            array (
                'id' => 38,
                'school_year' => 2020,
                'grade_level' => 'H',
                'grade_level_name' => 'High',
                'display_order' => 3,
            ),
            38 => 
            array (
                'id' => 39,
                'school_year' => 2020,
                'grade_level' => 'L',
                'grade_level_name' => 'K-8 Academy',
                'display_order' => 4,
            ),
            39 => 
            array (
                'id' => 40,
                'school_year' => 2020,
                'grade_level' => 'U',
                'grade_level_name' => '6-12 Leadership Academy',
                'display_order' => 5,
            ),
        ));
        
        
    }
}