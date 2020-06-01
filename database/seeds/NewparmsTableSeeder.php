<?php

use Illuminate\Database\Seeder;

class NewparmsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('newparms')->delete();
        
        \DB::table('newparms')->insert(array (
            0 => 
            array (
                'school_year' => 2013,
                'parm_name' => 'Teacher MOE multiplier',
                'parm_num' => '10.00',
            ),
            1 => 
            array (
                'school_year' => 2013,
                'parm_name' => 'TA MOE Multiplier',
                'parm_num' => '9.30',
            ),
            2 => 
            array (
                'school_year' => 2014,
                'parm_name' => 'Teacher MOE multiplier',
                'parm_num' => '10.00',
            ),
            3 => 
            array (
                'school_year' => 2014,
                'parm_name' => 'TA MOE Multiplier',
                'parm_num' => '9.30',
            ),
            4 => 
            array (
                'school_year' => 2015,
                'parm_name' => 'Teacher MOE multiplier',
                'parm_num' => '10.00',
            ),
            5 => 
            array (
                'school_year' => 2015,
                'parm_name' => 'TA MOE Multiplier',
                'parm_num' => '9.30',
            ),
            6 => 
            array (
                'school_year' => 2016,
                'parm_name' => 'Teacher MOE multiplier',
                'parm_num' => '10.00',
            ),
            7 => 
            array (
                'school_year' => 2016,
                'parm_name' => 'TA MOE Multiplier',
                'parm_num' => '9.30',
            ),
            8 => 
            array (
                'school_year' => 2017,
                'parm_name' => 'Teacher MOE multiplier',
                'parm_num' => '10.00',
            ),
            9 => 
            array (
                'school_year' => 2017,
                'parm_name' => 'TA MOE Multiplier',
                'parm_num' => '9.30',
            ),
            10 => 
            array (
                'school_year' => 2018,
                'parm_name' => 'Teacher MOE multiplier',
                'parm_num' => '10.00',
            ),
            11 => 
            array (
                'school_year' => 2018,
                'parm_name' => 'TA MOE Multiplier',
                'parm_num' => '9.30',
            ),
            12 => 
            array (
                'school_year' => 2019,
                'parm_name' => 'Teacher MOE multiplier',
                'parm_num' => '10.00',
            ),
            13 => 
            array (
                'school_year' => 2019,
                'parm_name' => 'TA MOE Multiplier',
                'parm_num' => '9.30',
            ),
            14 => 
            array (
                'school_year' => 2020,
                'parm_name' => 'Teacher MOE multiplier',
                'parm_num' => '10.00',
            ),
            15 => 
            array (
                'school_year' => 2020,
                'parm_name' => 'TA MOE Multiplier',
                'parm_num' => '9.30',
            ),
        ));
        
        
    }
}