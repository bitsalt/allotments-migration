<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'category_name' => 'Area Superintendent Allotments',
                'school_year' => 2013,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 1,
            ),
            1 => 
            array (
                'category_id' => 2,
                'category_name' => 'Instructional Services Allotments',
                'school_year' => 2013,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 2,
            ),
            2 => 
            array (
                'category_id' => 3,
                'category_name' => 'Auxiliary Services',
                'school_year' => 2013,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 3,
            ),
            3 => 
            array (
                'category_id' => 4,
                'category_name' => 'State',
                'school_year' => 2013,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 1,
            ),
            4 => 
            array (
                'category_id' => 5,
                'category_name' => 'Local',
                'school_year' => 2013,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 2,
            ),
            5 => 
            array (
                'category_id' => 6,
                'category_name' => 'Enterprise',
                'school_year' => 2013,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 4,
            ),
            6 => 
            array (
                'category_id' => 7,
                'category_name' => 'Grants/Contracts',
                'school_year' => 2013,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 3,
            ),
            7 => 
            array (
                'category_id' => 8,
                'category_name' => 'Teachers',
                'school_year' => 2013,
                'fund' => NULL,
                'salary_nonsalary_ind' => NULL,
                'display_order' => 0,
            ),
            8 => 
            array (
                'category_id' => 9,
                'category_name' => 'Teacher Assistants',
                'school_year' => 2013,
                'fund' => NULL,
                'salary_nonsalary_ind' => NULL,
                'display_order' => 0,
            ),
            9 => 
            array (
                'category_id' => 10,
                'category_name' => 'Area Superintendent Allotments',
                'school_year' => 2014,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 1,
            ),
            10 => 
            array (
                'category_id' => 11,
                'category_name' => 'Instructional Services Allotments',
                'school_year' => 2014,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 2,
            ),
            11 => 
            array (
                'category_id' => 12,
                'category_name' => 'Auxiliary Services',
                'school_year' => 2014,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 3,
            ),
            12 => 
            array (
                'category_id' => 13,
                'category_name' => 'State',
                'school_year' => 2014,
                'fund' => '01',
                'salary_nonsalary_ind' => 'N',
                'display_order' => 1,
            ),
            13 => 
            array (
                'category_id' => 14,
                'category_name' => 'Local',
                'school_year' => 2014,
                'fund' => '02',
                'salary_nonsalary_ind' => 'N',
                'display_order' => 2,
            ),
            14 => 
            array (
                'category_id' => 15,
                'category_name' => 'Enterprise',
                'school_year' => 2014,
                'fund' => '07',
                'salary_nonsalary_ind' => 'N',
                'display_order' => 4,
            ),
            15 => 
            array (
                'category_id' => 16,
                'category_name' => 'Grants/Contracts',
                'school_year' => 2014,
                'fund' => '05',
                'salary_nonsalary_ind' => 'N',
                'display_order' => 3,
            ),
            16 => 
            array (
                'category_id' => 17,
                'category_name' => 'Teachers',
                'school_year' => 2014,
                'fund' => NULL,
                'salary_nonsalary_ind' => NULL,
                'display_order' => 0,
            ),
            17 => 
            array (
                'category_id' => 18,
                'category_name' => 'Teacher Assistants',
                'school_year' => 2014,
                'fund' => NULL,
                'salary_nonsalary_ind' => NULL,
                'display_order' => 0,
            ),
            18 => 
            array (
                'category_id' => 19,
                'category_name' => 'Area Superintendent Allotments',
                'school_year' => 2015,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 1,
            ),
            19 => 
            array (
                'category_id' => 20,
                'category_name' => 'Instructional Services Allotments',
                'school_year' => 2015,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 2,
            ),
            20 => 
            array (
                'category_id' => 21,
                'category_name' => 'Auxiliary Services',
                'school_year' => 2015,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 3,
            ),
            21 => 
            array (
                'category_id' => 22,
                'category_name' => 'State',
                'school_year' => 2015,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 1,
            ),
            22 => 
            array (
                'category_id' => 23,
                'category_name' => 'Local',
                'school_year' => 2015,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 2,
            ),
            23 => 
            array (
                'category_id' => 24,
                'category_name' => 'Enterprise',
                'school_year' => 2015,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 4,
            ),
            24 => 
            array (
                'category_id' => 25,
                'category_name' => 'Grants/Contracts',
                'school_year' => 2015,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 3,
            ),
            25 => 
            array (
                'category_id' => 26,
                'category_name' => 'Teachers',
                'school_year' => 2015,
                'fund' => NULL,
                'salary_nonsalary_ind' => '',
                'display_order' => 0,
            ),
            26 => 
            array (
                'category_id' => 27,
                'category_name' => 'Teacher Assistants',
                'school_year' => 2015,
                'fund' => NULL,
                'salary_nonsalary_ind' => '',
                'display_order' => 0,
            ),
            27 => 
            array (
                'category_id' => 28,
                'category_name' => 'Area Superintendent Allotments',
                'school_year' => 2016,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 1,
            ),
            28 => 
            array (
                'category_id' => 29,
                'category_name' => 'Instructional Services Allotments',
                'school_year' => 2016,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 2,
            ),
            29 => 
            array (
                'category_id' => 30,
                'category_name' => 'Auxiliary Services',
                'school_year' => 2016,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 3,
            ),
            30 => 
            array (
                'category_id' => 31,
                'category_name' => 'State',
                'school_year' => 2016,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 1,
            ),
            31 => 
            array (
                'category_id' => 32,
                'category_name' => 'Local',
                'school_year' => 2016,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 2,
            ),
            32 => 
            array (
                'category_id' => 33,
                'category_name' => 'Enterprise',
                'school_year' => 2016,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 4,
            ),
            33 => 
            array (
                'category_id' => 34,
                'category_name' => 'Grants/Contracts',
                'school_year' => 2016,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 3,
            ),
            34 => 
            array (
                'category_id' => 35,
                'category_name' => 'Teachers',
                'school_year' => 2016,
                'fund' => NULL,
                'salary_nonsalary_ind' => '',
                'display_order' => 0,
            ),
            35 => 
            array (
                'category_id' => 36,
                'category_name' => 'Teacher Assistants',
                'school_year' => 2016,
                'fund' => NULL,
                'salary_nonsalary_ind' => '',
                'display_order' => 0,
            ),
            36 => 
            array (
                'category_id' => 37,
                'category_name' => 'Area Superintendent Allotments',
                'school_year' => 2017,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 1,
            ),
            37 => 
            array (
                'category_id' => 38,
                'category_name' => 'Instructional Services Allotments',
                'school_year' => 2017,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 2,
            ),
            38 => 
            array (
                'category_id' => 39,
                'category_name' => 'Auxiliary Services',
                'school_year' => 2017,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 3,
            ),
            39 => 
            array (
                'category_id' => 40,
                'category_name' => 'State',
                'school_year' => 2017,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 1,
            ),
            40 => 
            array (
                'category_id' => 41,
                'category_name' => 'Local',
                'school_year' => 2017,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 2,
            ),
            41 => 
            array (
                'category_id' => 42,
                'category_name' => 'Enterprise',
                'school_year' => 2017,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 4,
            ),
            42 => 
            array (
                'category_id' => 43,
                'category_name' => 'Grants/Contracts',
                'school_year' => 2017,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 3,
            ),
            43 => 
            array (
                'category_id' => 44,
                'category_name' => 'Teachers',
                'school_year' => 2017,
                'fund' => NULL,
                'salary_nonsalary_ind' => '',
                'display_order' => 0,
            ),
            44 => 
            array (
                'category_id' => 45,
                'category_name' => 'Teacher Assistants',
                'school_year' => 2017,
                'fund' => NULL,
                'salary_nonsalary_ind' => '',
                'display_order' => 0,
            ),
            45 => 
            array (
                'category_id' => 54,
                'category_name' => 'Instructional Assistants',
                'school_year' => 2018,
                'fund' => NULL,
                'salary_nonsalary_ind' => '',
                'display_order' => 0,
            ),
            46 => 
            array (
                'category_id' => 53,
                'category_name' => 'Teachers',
                'school_year' => 2018,
                'fund' => NULL,
                'salary_nonsalary_ind' => '',
                'display_order' => 0,
            ),
            47 => 
            array (
                'category_id' => 52,
                'category_name' => 'Grants/Contracts',
                'school_year' => 2018,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 3,
            ),
            48 => 
            array (
                'category_id' => 51,
                'category_name' => 'Enterprise',
                'school_year' => 2018,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 4,
            ),
            49 => 
            array (
                'category_id' => 50,
                'category_name' => 'Local',
                'school_year' => 2018,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 2,
            ),
            50 => 
            array (
                'category_id' => 49,
                'category_name' => 'State',
                'school_year' => 2018,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 1,
            ),
            51 => 
            array (
                'category_id' => 48,
                'category_name' => 'Auxiliary Services',
                'school_year' => 2018,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 3,
            ),
            52 => 
            array (
                'category_id' => 47,
                'category_name' => 'Instructional Services Allotments',
                'school_year' => 2018,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 2,
            ),
            53 => 
            array (
                'category_id' => 46,
                'category_name' => 'Area Superintendent Allotments',
                'school_year' => 2018,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 1,
            ),
            54 => 
            array (
                'category_id' => 55,
                'category_name' => 'Instructional Assistants',
                'school_year' => 2019,
                'fund' => NULL,
                'salary_nonsalary_ind' => '',
                'display_order' => 0,
            ),
            55 => 
            array (
                'category_id' => 56,
                'category_name' => 'Teachers',
                'school_year' => 2019,
                'fund' => NULL,
                'salary_nonsalary_ind' => '',
                'display_order' => 0,
            ),
            56 => 
            array (
                'category_id' => 57,
                'category_name' => 'Grants/Contracts',
                'school_year' => 2019,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 3,
            ),
            57 => 
            array (
                'category_id' => 58,
                'category_name' => 'Enterprise',
                'school_year' => 2019,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 4,
            ),
            58 => 
            array (
                'category_id' => 59,
                'category_name' => 'Local',
                'school_year' => 2019,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 2,
            ),
            59 => 
            array (
                'category_id' => 60,
                'category_name' => 'State',
                'school_year' => 2019,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 1,
            ),
            60 => 
            array (
                'category_id' => 61,
                'category_name' => 'Auxiliary Services',
                'school_year' => 2019,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 3,
            ),
            61 => 
            array (
                'category_id' => 62,
                'category_name' => 'Instructional Services Allotments',
                'school_year' => 2019,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 2,
            ),
            62 => 
            array (
                'category_id' => 63,
                'category_name' => 'Area Superintendent Allotments',
                'school_year' => 2019,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 1,
            ),
            63 => 
            array (
                'category_id' => 64,
                'category_name' => 'Instructional Assistants',
                'school_year' => 2020,
                'fund' => NULL,
                'salary_nonsalary_ind' => '',
                'display_order' => 0,
            ),
            64 => 
            array (
                'category_id' => 65,
                'category_name' => 'Teachers',
                'school_year' => 2020,
                'fund' => NULL,
                'salary_nonsalary_ind' => '',
                'display_order' => 0,
            ),
            65 => 
            array (
                'category_id' => 66,
                'category_name' => 'Grants/Contracts',
                'school_year' => 2020,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 3,
            ),
            66 => 
            array (
                'category_id' => 67,
                'category_name' => 'Enterprise',
                'school_year' => 2020,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 4,
            ),
            67 => 
            array (
                'category_id' => 68,
                'category_name' => 'Local',
                'school_year' => 2020,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 2,
            ),
            68 => 
            array (
                'category_id' => 69,
                'category_name' => 'State',
                'school_year' => 2020,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'N',
                'display_order' => 1,
            ),
            69 => 
            array (
                'category_id' => 70,
                'category_name' => 'Auxiliary Services',
                'school_year' => 2020,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 3,
            ),
            70 => 
            array (
                'category_id' => 71,
                'category_name' => 'Instructional Services Allotments',
                'school_year' => 2020,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 2,
            ),
            71 => 
            array (
                'category_id' => 72,
                'category_name' => 'Area Superintendent Allotments',
                'school_year' => 2020,
                'fund' => NULL,
                'salary_nonsalary_ind' => 'S',
                'display_order' => 1,
            ),
        ));
        
        
    }
}