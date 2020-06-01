<?php

use Illuminate\Database\Seeder;

class ReportingDaysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reporting_days')->delete();
        
        \DB::table('reporting_days')->insert(array (
            0 => 
            array (
                'id' => 1,
                'school_year' => 2013,
                'report_days' => '01',
                'order_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'school_year' => 2013,
                'report_days' => '05',
                'order_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'school_year' => 2013,
                'report_days' => '07',
                'order_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'school_year' => 2013,
                'report_days' => '10',
                'order_id' => 4,
            ),
            4 => 
            array (
                'id' => 10,
                'school_year' => 2014,
                'report_days' => '01',
                'order_id' => 1,
            ),
            5 => 
            array (
                'id' => 11,
                'school_year' => 2014,
                'report_days' => '05',
                'order_id' => 2,
            ),
            6 => 
            array (
                'id' => 12,
                'school_year' => 2014,
                'report_days' => '07',
                'order_id' => 3,
            ),
            7 => 
            array (
                'id' => 13,
                'school_year' => 2014,
                'report_days' => '10',
                'order_id' => 4,
            ),
            8 => 
            array (
                'id' => 14,
                'school_year' => 2015,
                'report_days' => '01',
                'order_id' => 1,
            ),
            9 => 
            array (
                'id' => 15,
                'school_year' => 2015,
                'report_days' => '05',
                'order_id' => 2,
            ),
            10 => 
            array (
                'id' => 16,
                'school_year' => 2015,
                'report_days' => '07',
                'order_id' => 3,
            ),
            11 => 
            array (
                'id' => 17,
                'school_year' => 2015,
                'report_days' => '10',
                'order_id' => 4,
            ),
            12 => 
            array (
                'id' => 18,
                'school_year' => 2016,
                'report_days' => '01',
                'order_id' => 1,
            ),
            13 => 
            array (
                'id' => 19,
                'school_year' => 2016,
                'report_days' => '05',
                'order_id' => 2,
            ),
            14 => 
            array (
                'id' => 20,
                'school_year' => 2016,
                'report_days' => '07',
                'order_id' => 3,
            ),
            15 => 
            array (
                'id' => 21,
                'school_year' => 2016,
                'report_days' => '10',
                'order_id' => 4,
            ),
            16 => 
            array (
                'id' => 22,
                'school_year' => 2017,
                'report_days' => '01',
                'order_id' => 1,
            ),
            17 => 
            array (
                'id' => 23,
                'school_year' => 2017,
                'report_days' => '05',
                'order_id' => 2,
            ),
            18 => 
            array (
                'id' => 24,
                'school_year' => 2017,
                'report_days' => '07',
                'order_id' => 3,
            ),
            19 => 
            array (
                'id' => 25,
                'school_year' => 2017,
                'report_days' => '10',
                'order_id' => 4,
            ),
            20 => 
            array (
                'id' => 26,
                'school_year' => 2018,
                'report_days' => '01',
                'order_id' => 1,
            ),
            21 => 
            array (
                'id' => 27,
                'school_year' => 2018,
                'report_days' => '05',
                'order_id' => 2,
            ),
            22 => 
            array (
                'id' => 28,
                'school_year' => 2018,
                'report_days' => '07',
                'order_id' => 3,
            ),
            23 => 
            array (
                'id' => 29,
                'school_year' => 2018,
                'report_days' => '10',
                'order_id' => 4,
            ),
            24 => 
            array (
                'id' => 30,
                'school_year' => 2019,
                'report_days' => '01',
                'order_id' => 1,
            ),
            25 => 
            array (
                'id' => 31,
                'school_year' => 2019,
                'report_days' => '05',
                'order_id' => 2,
            ),
            26 => 
            array (
                'id' => 32,
                'school_year' => 2019,
                'report_days' => '07',
                'order_id' => 3,
            ),
            27 => 
            array (
                'id' => 33,
                'school_year' => 2019,
                'report_days' => '10',
                'order_id' => 4,
            ),
            28 => 
            array (
                'id' => 34,
                'school_year' => 2020,
                'report_days' => '01',
                'order_id' => 1,
            ),
            29 => 
            array (
                'id' => 35,
                'school_year' => 2020,
                'report_days' => '05',
                'order_id' => 2,
            ),
            30 => 
            array (
                'id' => 36,
                'school_year' => 2020,
                'report_days' => '07',
                'order_id' => 3,
            ),
            31 => 
            array (
                'id' => 37,
                'school_year' => 2020,
                'report_days' => '10',
                'order_id' => 4,
            ),
        ));
        
        
    }
}