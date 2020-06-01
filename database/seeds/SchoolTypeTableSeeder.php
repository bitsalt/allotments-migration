<?php

use Illuminate\Database\Seeder;

class SchoolTypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('school_type')->delete();
        
        \DB::table('school_type')->insert(array (
            0 => 
            array (
                'id' => 1,
                'school_year' => 2013,
                'school_type' => 'TR',
                'school_type_name' => 'Traditional',
                'override1' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'school_year' => 2013,
                'school_type' => 'YR',
                'school_type_name' => 'Multi-Track Year-round ',
                'override1' => 'Y',
            ),
            2 => 
            array (
                'id' => 3,
                'school_year' => 2013,
                'school_type' => 'SY',
                'school_type_name' => 'Single-Track Year-round',
                'override1' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'school_year' => 2013,
                'school_type' => 'Mod',
                'school_type_name' => 'Modified',
                'override1' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'school_year' => 2014,
                'school_type' => 'TR',
                'school_type_name' => 'Traditional',
                'override1' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'school_year' => 2014,
                'school_type' => 'YR',
                'school_type_name' => 'Multi-Track Year-round ',
                'override1' => 'Y',
            ),
            6 => 
            array (
                'id' => 7,
                'school_year' => 2014,
                'school_type' => 'SY',
                'school_type_name' => 'Single-Track Year-round',
                'override1' => '',
            ),
            7 => 
            array (
                'id' => 8,
                'school_year' => 2014,
                'school_type' => 'Mod',
                'school_type_name' => 'Modified',
                'override1' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'school_year' => 2014,
                'school_type' => 'Alt',
                'school_type_name' => 'Alternative',
                'override1' => '',
            ),
            9 => 
            array (
                'id' => 10,
                'school_year' => 2014,
                'school_type' => 'EC',
                'school_type_name' => 'Early College',
                'override1' => '',
            ),
            10 => 
            array (
                'id' => 11,
                'school_year' => 2015,
                'school_type' => 'TR',
                'school_type_name' => 'Traditional',
                'override1' => '',
            ),
            11 => 
            array (
                'id' => 12,
                'school_year' => 2015,
                'school_type' => 'YR',
                'school_type_name' => 'Multi-Track Year-round ',
                'override1' => 'Y',
            ),
            12 => 
            array (
                'id' => 13,
                'school_year' => 2015,
                'school_type' => 'SY',
                'school_type_name' => 'Single-Track Year-round',
                'override1' => '',
            ),
            13 => 
            array (
                'id' => 14,
                'school_year' => 2015,
                'school_type' => 'Mod',
                'school_type_name' => 'Modified',
                'override1' => '',
            ),
            14 => 
            array (
                'id' => 15,
                'school_year' => 2015,
                'school_type' => 'Alt',
                'school_type_name' => 'Alternative',
                'override1' => '',
            ),
            15 => 
            array (
                'id' => 16,
                'school_year' => 2015,
                'school_type' => 'EC',
                'school_type_name' => 'Early College',
                'override1' => '',
            ),
            16 => 
            array (
                'id' => 17,
                'school_year' => 2016,
                'school_type' => 'TR',
                'school_type_name' => 'Traditional',
                'override1' => '',
            ),
            17 => 
            array (
                'id' => 18,
                'school_year' => 2016,
                'school_type' => 'YR',
                'school_type_name' => 'Multi-Track Year-round ',
                'override1' => 'Y',
            ),
            18 => 
            array (
                'id' => 19,
                'school_year' => 2016,
                'school_type' => 'SY',
                'school_type_name' => 'Single-Track Year-round',
                'override1' => '',
            ),
            19 => 
            array (
                'id' => 20,
                'school_year' => 2016,
                'school_type' => 'Mod',
                'school_type_name' => 'Modified',
                'override1' => '',
            ),
            20 => 
            array (
                'id' => 21,
                'school_year' => 2016,
                'school_type' => 'Alt',
                'school_type_name' => 'Alternative',
                'override1' => '',
            ),
            21 => 
            array (
                'id' => 22,
                'school_year' => 2016,
                'school_type' => 'EC',
                'school_type_name' => 'Early College',
                'override1' => '',
            ),
            22 => 
            array (
                'id' => 23,
                'school_year' => 2017,
                'school_type' => 'TR',
                'school_type_name' => 'Traditional',
                'override1' => '',
            ),
            23 => 
            array (
                'id' => 24,
                'school_year' => 2017,
                'school_type' => 'YR',
                'school_type_name' => 'Multi-Track Year-round ',
                'override1' => 'Y',
            ),
            24 => 
            array (
                'id' => 25,
                'school_year' => 2017,
                'school_type' => 'SY',
                'school_type_name' => 'Single-Track Year-round',
                'override1' => '',
            ),
            25 => 
            array (
                'id' => 26,
                'school_year' => 2017,
                'school_type' => 'Mod',
                'school_type_name' => 'Modified',
                'override1' => '',
            ),
            26 => 
            array (
                'id' => 27,
                'school_year' => 2017,
                'school_type' => 'Alt',
                'school_type_name' => 'Alternative',
                'override1' => '',
            ),
            27 => 
            array (
                'id' => 28,
                'school_year' => 2017,
                'school_type' => 'EC',
                'school_type_name' => 'Early College',
                'override1' => '',
            ),
            28 => 
            array (
                'id' => 29,
                'school_year' => 2018,
                'school_type' => 'TR',
                'school_type_name' => 'Traditional',
                'override1' => '',
            ),
            29 => 
            array (
                'id' => 30,
                'school_year' => 2018,
                'school_type' => 'YR',
                'school_type_name' => 'Multi-Track Year-round ',
                'override1' => 'Y',
            ),
            30 => 
            array (
                'id' => 31,
                'school_year' => 2018,
                'school_type' => 'SY',
                'school_type_name' => 'Single-Track Year-round',
                'override1' => '',
            ),
            31 => 
            array (
                'id' => 32,
                'school_year' => 2018,
                'school_type' => 'Mod',
                'school_type_name' => 'Modified',
                'override1' => '',
            ),
            32 => 
            array (
                'id' => 33,
                'school_year' => 2018,
                'school_type' => 'Alt',
                'school_type_name' => 'Alternative',
                'override1' => '',
            ),
            33 => 
            array (
                'id' => 34,
                'school_year' => 2018,
                'school_type' => 'EC',
                'school_type_name' => 'Early College',
                'override1' => '',
            ),
            34 => 
            array (
                'id' => 35,
                'school_year' => 2019,
                'school_type' => 'TR',
                'school_type_name' => 'Traditional',
                'override1' => '',
            ),
            35 => 
            array (
                'id' => 36,
                'school_year' => 2019,
                'school_type' => 'YR',
                'school_type_name' => 'Multi-Track Year-round ',
                'override1' => 'Y',
            ),
            36 => 
            array (
                'id' => 37,
                'school_year' => 2019,
                'school_type' => 'SY',
                'school_type_name' => 'Single-Track Year-round',
                'override1' => '',
            ),
            37 => 
            array (
                'id' => 38,
                'school_year' => 2019,
                'school_type' => 'Mod',
                'school_type_name' => 'Modified',
                'override1' => '',
            ),
            38 => 
            array (
                'id' => 39,
                'school_year' => 2019,
                'school_type' => 'Alt',
                'school_type_name' => 'Alternative',
                'override1' => '',
            ),
            39 => 
            array (
                'id' => 40,
                'school_year' => 2019,
                'school_type' => 'EC',
                'school_type_name' => 'Early College',
                'override1' => '',
            ),
            40 => 
            array (
                'id' => 41,
                'school_year' => 2020,
                'school_type' => 'TR',
                'school_type_name' => 'Traditional',
                'override1' => '',
            ),
            41 => 
            array (
                'id' => 42,
                'school_year' => 2020,
                'school_type' => 'YR',
                'school_type_name' => 'Multi-Track Year-round ',
                'override1' => 'Y',
            ),
            42 => 
            array (
                'id' => 43,
                'school_year' => 2020,
                'school_type' => 'SY',
                'school_type_name' => 'Single-Track Year-round',
                'override1' => '',
            ),
            43 => 
            array (
                'id' => 44,
                'school_year' => 2020,
                'school_type' => 'Mod',
                'school_type_name' => 'Modified',
                'override1' => '',
            ),
            44 => 
            array (
                'id' => 45,
                'school_year' => 2020,
                'school_type' => 'Alt',
                'school_type_name' => 'Alternative',
                'override1' => '',
            ),
            45 => 
            array (
                'id' => 46,
                'school_year' => 2020,
                'school_type' => 'EC',
                'school_type_name' => 'Early College',
                'override1' => '',
            ),
        ));
        
        
    }
}