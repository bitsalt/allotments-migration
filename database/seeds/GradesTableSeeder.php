<?php

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('grades')->delete();
        
        \DB::table('grades')->insert(array (
            0 => 
            array (
                'id' => 1,
                'grade' => 'K',
                'school_year' => 2013,
                'grade_order' => 1,
                'moe_divisor' => '20.97',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '20.97',
                'ta_divisor_override1' => '28.37',
            ),
            1 => 
            array (
                'id' => 2,
                'grade' => '01',
                'school_year' => 2013,
                'grade_order' => 2,
                'moe_divisor' => '19.97',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '19.97',
                'ta_divisor_override1' => '28.37',
            ),
            2 => 
            array (
                'id' => 3,
                'grade' => '02',
                'school_year' => 2013,
                'grade_order' => 3,
                'moe_divisor' => '19.97',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '19.97',
                'ta_divisor_override1' => '28.37',
            ),
            3 => 
            array (
                'id' => 4,
                'grade' => '03',
                'school_year' => 2013,
                'grade_order' => 4,
                'moe_divisor' => '19.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '19.97',
                'ta_divisor_override1' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'grade' => '04',
                'school_year' => 2013,
                'grade_order' => 5,
                'moe_divisor' => '25.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '23.97',
                'ta_divisor_override1' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'grade' => '05',
                'school_year' => 2013,
                'grade_order' => 6,
                'moe_divisor' => '25.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '23.97',
                'ta_divisor_override1' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'grade' => '06',
                'school_year' => 2013,
                'grade_order' => 7,
                'moe_divisor' => '24.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.97',
                'ta_divisor_override1' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'grade' => '07',
                'school_year' => 2013,
                'grade_order' => 8,
                'moe_divisor' => '24.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.97',
                'ta_divisor_override1' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'grade' => '08',
                'school_year' => 2013,
                'grade_order' => 9,
                'moe_divisor' => '24.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.97',
                'ta_divisor_override1' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'grade' => '09',
                'school_year' => 2013,
                'grade_order' => 10,
                'moe_divisor' => '26.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '26.47',
                'ta_divisor_override1' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'grade' => '10',
                'school_year' => 2013,
                'grade_order' => 11,
                'moe_divisor' => '26.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '26.47',
                'ta_divisor_override1' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'grade' => '11',
                'school_year' => 2013,
                'grade_order' => 12,
                'moe_divisor' => '26.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '26.47',
                'ta_divisor_override1' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'grade' => '12',
                'school_year' => 2013,
                'grade_order' => 13,
                'moe_divisor' => '26.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '26.47',
                'ta_divisor_override1' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'grade' => 'K',
                'school_year' => 2014,
                'grade_order' => 1,
                'moe_divisor' => '20.97',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '20.97',
                'ta_divisor_override1' => '28.37',
            ),
            14 => 
            array (
                'id' => 15,
                'grade' => '01',
                'school_year' => 2014,
                'grade_order' => 2,
                'moe_divisor' => '19.97',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '19.97',
                'ta_divisor_override1' => '28.37',
            ),
            15 => 
            array (
                'id' => 16,
                'grade' => '02',
                'school_year' => 2014,
                'grade_order' => 3,
                'moe_divisor' => '19.97',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '19.97',
                'ta_divisor_override1' => '28.37',
            ),
            16 => 
            array (
                'id' => 17,
                'grade' => '03',
                'school_year' => 2014,
                'grade_order' => 4,
                'moe_divisor' => '19.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '19.97',
                'ta_divisor_override1' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'grade' => '04',
                'school_year' => 2014,
                'grade_order' => 5,
                'moe_divisor' => '25.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '23.97',
                'ta_divisor_override1' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'grade' => '05',
                'school_year' => 2014,
                'grade_order' => 6,
                'moe_divisor' => '25.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '23.97',
                'ta_divisor_override1' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'grade' => '06',
                'school_year' => 2014,
                'grade_order' => 7,
                'moe_divisor' => '24.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.97',
                'ta_divisor_override1' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'grade' => '07',
                'school_year' => 2014,
                'grade_order' => 8,
                'moe_divisor' => '24.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.97',
                'ta_divisor_override1' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'grade' => '08',
                'school_year' => 2014,
                'grade_order' => 9,
                'moe_divisor' => '24.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.97',
                'ta_divisor_override1' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'grade' => '09',
                'school_year' => 2014,
                'grade_order' => 10,
                'moe_divisor' => '26.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '26.47',
                'ta_divisor_override1' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'grade' => '10',
                'school_year' => 2014,
                'grade_order' => 11,
                'moe_divisor' => '26.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '26.47',
                'ta_divisor_override1' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'grade' => '11',
                'school_year' => 2014,
                'grade_order' => 12,
                'moe_divisor' => '26.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '26.47',
                'ta_divisor_override1' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'grade' => '12',
                'school_year' => 2014,
                'grade_order' => 13,
                'moe_divisor' => '26.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '26.47',
                'ta_divisor_override1' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'grade' => 'K',
                'school_year' => 2015,
                'grade_order' => 1,
                'moe_divisor' => '20.97',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '20.97',
                'ta_divisor_override1' => '28.37',
            ),
            27 => 
            array (
                'id' => 28,
                'grade' => '01',
                'school_year' => 2015,
                'grade_order' => 2,
                'moe_divisor' => '19.97',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '19.97',
                'ta_divisor_override1' => '28.37',
            ),
            28 => 
            array (
                'id' => 29,
                'grade' => '02',
                'school_year' => 2015,
                'grade_order' => 3,
                'moe_divisor' => '19.97',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '19.97',
                'ta_divisor_override1' => '28.37',
            ),
            29 => 
            array (
                'id' => 30,
                'grade' => '03',
                'school_year' => 2015,
                'grade_order' => 4,
                'moe_divisor' => '19.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '19.97',
                'ta_divisor_override1' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'grade' => '04',
                'school_year' => 2015,
                'grade_order' => 5,
                'moe_divisor' => '25.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '23.97',
                'ta_divisor_override1' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'grade' => '05',
                'school_year' => 2015,
                'grade_order' => 6,
                'moe_divisor' => '25.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '23.97',
                'ta_divisor_override1' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'grade' => '06',
                'school_year' => 2015,
                'grade_order' => 7,
                'moe_divisor' => '24.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.97',
                'ta_divisor_override1' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'grade' => '07',
                'school_year' => 2015,
                'grade_order' => 8,
                'moe_divisor' => '24.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.97',
                'ta_divisor_override1' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'grade' => '08',
                'school_year' => 2015,
                'grade_order' => 9,
                'moe_divisor' => '24.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.97',
                'ta_divisor_override1' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'grade' => '09',
                'school_year' => 2015,
                'grade_order' => 10,
                'moe_divisor' => '26.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '26.47',
                'ta_divisor_override1' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'grade' => '10',
                'school_year' => 2015,
                'grade_order' => 11,
                'moe_divisor' => '26.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '26.47',
                'ta_divisor_override1' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'grade' => '11',
                'school_year' => 2015,
                'grade_order' => 12,
                'moe_divisor' => '26.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '26.47',
                'ta_divisor_override1' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'grade' => '12',
                'school_year' => 2015,
                'grade_order' => 13,
                'moe_divisor' => '26.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '26.47',
                'ta_divisor_override1' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'grade' => 'K',
                'school_year' => 2016,
                'grade_order' => 1,
                'moe_divisor' => '21.27',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '21.27',
                'ta_divisor_override1' => '28.37',
            ),
            40 => 
            array (
                'id' => 41,
                'grade' => '01',
                'school_year' => 2016,
                'grade_order' => 2,
                'moe_divisor' => '19.27',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '19.27',
                'ta_divisor_override1' => '28.37',
            ),
            41 => 
            array (
                'id' => 42,
                'grade' => '02',
                'school_year' => 2016,
                'grade_order' => 3,
                'moe_divisor' => '20.27',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '20.27',
                'ta_divisor_override1' => '28.37',
            ),
            42 => 
            array (
                'id' => 43,
                'grade' => '03',
                'school_year' => 2016,
                'grade_order' => 4,
                'moe_divisor' => '20.27',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '20.27',
                'ta_divisor_override1' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'grade' => '04',
                'school_year' => 2016,
                'grade_order' => 5,
                'moe_divisor' => '26.27',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.27',
                'ta_divisor_override1' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'grade' => '05',
                'school_year' => 2016,
                'grade_order' => 6,
                'moe_divisor' => '26.27',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.27',
                'ta_divisor_override1' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'grade' => '06',
                'school_year' => 2016,
                'grade_order' => 7,
                'moe_divisor' => '25.12',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '25.12',
                'ta_divisor_override1' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'grade' => '07',
                'school_year' => 2016,
                'grade_order' => 8,
                'moe_divisor' => '25.12',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '25.12',
                'ta_divisor_override1' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'grade' => '08',
                'school_year' => 2016,
                'grade_order' => 9,
                'moe_divisor' => '25.12',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '25.12',
                'ta_divisor_override1' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'grade' => '09',
                'school_year' => 2016,
                'grade_order' => 10,
                'moe_divisor' => '27.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.47',
                'ta_divisor_override1' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'grade' => '10',
                'school_year' => 2016,
                'grade_order' => 11,
                'moe_divisor' => '27.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.47',
                'ta_divisor_override1' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'grade' => '11',
                'school_year' => 2016,
                'grade_order' => 12,
                'moe_divisor' => '27.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.47',
                'ta_divisor_override1' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'grade' => '12',
                'school_year' => 2016,
                'grade_order' => 13,
                'moe_divisor' => '27.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.47',
                'ta_divisor_override1' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'grade' => 'K',
                'school_year' => 2017,
                'grade_order' => 1,
                'moe_divisor' => '20.00',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '20.00',
                'ta_divisor_override1' => '28.37',
            ),
            53 => 
            array (
                'id' => 54,
                'grade' => '01',
                'school_year' => 2017,
                'grade_order' => 2,
                'moe_divisor' => '20.00',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '20.00',
                'ta_divisor_override1' => '28.37',
            ),
            54 => 
            array (
                'id' => 55,
                'grade' => '02',
                'school_year' => 2017,
                'grade_order' => 3,
                'moe_divisor' => '20.00',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '20.00',
                'ta_divisor_override1' => '28.37',
            ),
            55 => 
            array (
                'id' => 56,
                'grade' => '03',
                'school_year' => 2017,
                'grade_order' => 4,
                'moe_divisor' => '20.00',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '20.00',
                'ta_divisor_override1' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'grade' => '04',
                'school_year' => 2017,
                'grade_order' => 5,
                'moe_divisor' => '26.27',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.27',
                'ta_divisor_override1' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'grade' => '05',
                'school_year' => 2017,
                'grade_order' => 6,
                'moe_divisor' => '26.27',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.27',
                'ta_divisor_override1' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'grade' => '06',
                'school_year' => 2017,
                'grade_order' => 7,
                'moe_divisor' => '25.12',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '25.12',
                'ta_divisor_override1' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'grade' => '07',
                'school_year' => 2017,
                'grade_order' => 8,
                'moe_divisor' => '25.12',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '25.12',
                'ta_divisor_override1' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'grade' => '08',
                'school_year' => 2017,
                'grade_order' => 9,
                'moe_divisor' => '25.12',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '25.12',
                'ta_divisor_override1' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'grade' => '09',
                'school_year' => 2017,
                'grade_order' => 10,
                'moe_divisor' => '27.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.47',
                'ta_divisor_override1' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'grade' => '10',
                'school_year' => 2017,
                'grade_order' => 11,
                'moe_divisor' => '27.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.47',
                'ta_divisor_override1' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'grade' => '11',
                'school_year' => 2017,
                'grade_order' => 12,
                'moe_divisor' => '27.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.47',
                'ta_divisor_override1' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'grade' => '12',
                'school_year' => 2017,
                'grade_order' => 13,
                'moe_divisor' => '27.47',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.47',
                'ta_divisor_override1' => NULL,
            ),
            65 => 
            array (
                'id' => 78,
                'grade' => '12',
                'school_year' => 2018,
                'grade_order' => 13,
                'moe_divisor' => '27.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.97',
                'ta_divisor_override1' => NULL,
            ),
            66 => 
            array (
                'id' => 77,
                'grade' => '11',
                'school_year' => 2018,
                'grade_order' => 12,
                'moe_divisor' => '27.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.97',
                'ta_divisor_override1' => NULL,
            ),
            67 => 
            array (
                'id' => 76,
                'grade' => '10',
                'school_year' => 2018,
                'grade_order' => 11,
                'moe_divisor' => '27.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.97',
                'ta_divisor_override1' => NULL,
            ),
            68 => 
            array (
                'id' => 75,
                'grade' => '09',
                'school_year' => 2018,
                'grade_order' => 10,
                'moe_divisor' => '27.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.97',
                'ta_divisor_override1' => NULL,
            ),
            69 => 
            array (
                'id' => 74,
                'grade' => '08',
                'school_year' => 2018,
                'grade_order' => 9,
                'moe_divisor' => '25.12',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '25.12',
                'ta_divisor_override1' => NULL,
            ),
            70 => 
            array (
                'id' => 73,
                'grade' => '07',
                'school_year' => 2018,
                'grade_order' => 8,
                'moe_divisor' => '25.12',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '25.12',
                'ta_divisor_override1' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'grade' => '06',
                'school_year' => 2018,
                'grade_order' => 7,
                'moe_divisor' => '25.12',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '25.12',
                'ta_divisor_override1' => NULL,
            ),
            72 => 
            array (
                'id' => 71,
                'grade' => '05',
                'school_year' => 2018,
                'grade_order' => 6,
                'moe_divisor' => '25.70',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.20',
                'ta_divisor_override1' => NULL,
            ),
            73 => 
            array (
                'id' => 70,
                'grade' => '04',
                'school_year' => 2018,
                'grade_order' => 5,
                'moe_divisor' => '25.70',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.20',
                'ta_divisor_override1' => NULL,
            ),
            74 => 
            array (
                'id' => 69,
                'grade' => '03',
                'school_year' => 2018,
                'grade_order' => 4,
                'moe_divisor' => '19.25',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '19.25',
                'ta_divisor_override1' => NULL,
            ),
            75 => 
            array (
                'id' => 68,
                'grade' => '02',
                'school_year' => 2018,
                'grade_order' => 3,
                'moe_divisor' => '19.25',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '19.25',
                'ta_divisor_override1' => '28.37',
            ),
            76 => 
            array (
                'id' => 67,
                'grade' => '01',
                'school_year' => 2018,
                'grade_order' => 2,
                'moe_divisor' => '19.00',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '19.00',
                'ta_divisor_override1' => '28.37',
            ),
            77 => 
            array (
                'id' => 66,
                'grade' => 'K',
                'school_year' => 2018,
                'grade_order' => 1,
                'moe_divisor' => '19.50',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '19.50',
                'ta_divisor_override1' => '28.37',
            ),
            78 => 
            array (
                'id' => 79,
                'grade' => 'K',
                'school_year' => 2019,
                'grade_order' => 1,
                'moe_divisor' => '18.00',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '18.00',
                'ta_divisor_override1' => '28.37',
            ),
            79 => 
            array (
                'id' => 80,
                'grade' => '01',
                'school_year' => 2019,
                'grade_order' => 2,
                'moe_divisor' => '16.00',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '16.00',
                'ta_divisor_override1' => '28.37',
            ),
            80 => 
            array (
                'id' => 81,
                'grade' => '02',
                'school_year' => 2019,
                'grade_order' => 3,
                'moe_divisor' => '20.00',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '20.00',
                'ta_divisor_override1' => '28.37',
            ),
            81 => 
            array (
                'id' => 82,
                'grade' => '03',
                'school_year' => 2019,
                'grade_order' => 4,
                'moe_divisor' => '20.00',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '20.00',
                'ta_divisor_override1' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'grade' => '04',
                'school_year' => 2019,
                'grade_order' => 5,
                'moe_divisor' => '24.50',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.50',
                'ta_divisor_override1' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'grade' => '05',
                'school_year' => 2019,
                'grade_order' => 6,
                'moe_divisor' => '24.50',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.50',
                'ta_divisor_override1' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'grade' => '06',
                'school_year' => 2019,
                'grade_order' => 7,
                'moe_divisor' => '24.00',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.00',
                'ta_divisor_override1' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'grade' => '07',
                'school_year' => 2019,
                'grade_order' => 8,
                'moe_divisor' => '23.00',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '23.00',
                'ta_divisor_override1' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'grade' => '08',
                'school_year' => 2019,
                'grade_order' => 9,
                'moe_divisor' => '23.00',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '23.00',
                'ta_divisor_override1' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'grade' => '09',
                'school_year' => 2019,
                'grade_order' => 10,
                'moe_divisor' => '27.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.97',
                'ta_divisor_override1' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'grade' => '10',
                'school_year' => 2019,
                'grade_order' => 11,
                'moe_divisor' => '27.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.97',
                'ta_divisor_override1' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'grade' => '11',
                'school_year' => 2019,
                'grade_order' => 12,
                'moe_divisor' => '27.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.97',
                'ta_divisor_override1' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'grade' => '12',
                'school_year' => 2019,
                'grade_order' => 13,
                'moe_divisor' => '27.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.97',
                'ta_divisor_override1' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'grade' => 'K',
                'school_year' => 2020,
                'grade_order' => 1,
                'moe_divisor' => '18.00',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '18.00',
                'ta_divisor_override1' => '28.37',
            ),
            92 => 
            array (
                'id' => 93,
                'grade' => '01',
                'school_year' => 2020,
                'grade_order' => 2,
                'moe_divisor' => '16.00',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '16.00',
                'ta_divisor_override1' => '28.37',
            ),
            93 => 
            array (
                'id' => 94,
                'grade' => '02',
                'school_year' => 2020,
                'grade_order' => 3,
                'moe_divisor' => '17.00',
                'ta_divisor' => '28.37',
                'moe_divisor_override1' => '17.00',
                'ta_divisor_override1' => '28.37',
            ),
            94 => 
            array (
                'id' => 95,
                'grade' => '03',
                'school_year' => 2020,
                'grade_order' => 4,
                'moe_divisor' => '20.00',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '20.00',
                'ta_divisor_override1' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'grade' => '04',
                'school_year' => 2020,
                'grade_order' => 5,
                'moe_divisor' => '24.50',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.50',
                'ta_divisor_override1' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'grade' => '05',
                'school_year' => 2020,
                'grade_order' => 6,
                'moe_divisor' => '24.50',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.50',
                'ta_divisor_override1' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'grade' => '06',
                'school_year' => 2020,
                'grade_order' => 7,
                'moe_divisor' => '24.00',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '24.00',
                'ta_divisor_override1' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'grade' => '07',
                'school_year' => 2020,
                'grade_order' => 8,
                'moe_divisor' => '23.00',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '23.00',
                'ta_divisor_override1' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'grade' => '08',
                'school_year' => 2020,
                'grade_order' => 9,
                'moe_divisor' => '23.00',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '23.00',
                'ta_divisor_override1' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'grade' => '09',
                'school_year' => 2020,
                'grade_order' => 10,
                'moe_divisor' => '27.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.97',
                'ta_divisor_override1' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'grade' => '10',
                'school_year' => 2020,
                'grade_order' => 11,
                'moe_divisor' => '27.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.97',
                'ta_divisor_override1' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'grade' => '11',
                'school_year' => 2020,
                'grade_order' => 12,
                'moe_divisor' => '27.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.97',
                'ta_divisor_override1' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'grade' => '12',
                'school_year' => 2020,
                'grade_order' => 13,
                'moe_divisor' => '27.97',
                'ta_divisor' => NULL,
                'moe_divisor_override1' => '27.97',
                'ta_divisor_override1' => NULL,
            ),
        ));
        
        
    }
}